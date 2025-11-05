<?php
namespace App\Controllers;

use App\Models\BengkelModel;

class Bengkel extends BaseController
{
    public function login()
    {
        return view('bengkel/login');
    }

    public function register()
    {
        return view('bengkel/register');
    }

    public function registerin()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new BengkelModel();

        $existing = $userModel->where('email_client', $email)->first();

        if ($existing) {
            return redirect()->back()->with('error', 'Email sudah digunakan!');
        }

        $userModel->insert([
            'email_client' => $email,
            'password_client' => $password 
        ]);
        return redirect()->to(base_url('bengkel/berhasilregister'))
                         ->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function berhasilregister()
    {
        return view('bengkel/berhasilregis'); // ubah ke folder yang konsisten
    }

    public function loginin()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new BengkelModel();

        $user = $userModel
            ->where('email_client', $email)
            ->where('password_client', $password)
            ->first();

        if ($user) {
            $session = session();
            $session->set([
                'id_user' => $user['id_client'],
                'email_user' => $user['email_client'],
                'logged_in' => true
            ]);

            return redirect()->to(base_url('home'));
        } else {
            return redirect()->back()->with('error', 'Email atau password salah!');
        }
    }

    public function menu()
    {
        return view('bengkel/menu');
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('bengkel/login'));
    }
}
