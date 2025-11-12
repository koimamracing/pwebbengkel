<?php

namespace Myth\Auth\Authentication\Activators;

use Config\Email;
use Myth\Auth\Entities\User;
use CodeIgniter\I18n\Time;
use Myth\Auth\Models\LoginModel;

class EmailActivator extends BaseActivator implements ActivatorInterface
{
    /**
     * Membuat token aktivasi dan mengirimkan email.
     */
  public function createActivation(User $user): bool
{
    helper('text');
    $token = bin2hex(random_bytes(20)); 


    $db = db_connect();
    $db->table('auth_activation_attempts')->insert([
        'ip_address' => service('request')->getIPAddress(),
        'user_agent' => service('request')->getUserAgent()->getAgentString(),
        'token'      => $token,
        'created_at' => date('Y-m-d H:i:s'),
    ]);

    // Simpan token juga ke tabel users (kolom activate_hash)
    $userModel = model('Myth\Auth\Models\UserModel');
    $userModel->update($user->id, ['activate_hash' => $token]);

    // Simpan ke entitas agar bisa dikirim lewat email
    $user->activate_hash = $token;

    // Kirim email aktivasi
    return $this->send($user);
}


    /**
     * Mengirim email aktivasi.
     */
    public function send(?User $user = null): bool
    {
        $email  = service('email');
        $config = new Email();
        $settings = $this->getActivatorSettings();

        $sent = $email->setFrom(
                $settings->fromEmail ?? $config->fromEmail,
                $settings->fromName ?? $config->fromName
            )
            ->setTo($user->email)
            ->setSubject(lang('Auth.activationSubject'))
            ->setMessage(
                view($this->config->views['emailActivation'], [
                    'hash' => $user->activate_hash,
                ])
            )
            ->setMailType('html')
            ->send();

        if (! $sent) {
            $this->error = lang('Auth.errorSendingActivation', [$user->email]);
            return false;
        }

        return true;
    }
}
