<?php

namespace Myth\Auth\Authentication\Activators;

use Myth\Auth\Config\Auth as AuthConfig;
use Myth\Auth\Entities\User;
use CodeIgniter\Model;

/**
 * Class BaseActivator
 *
 * Dasar untuk aktivator user (email/manual).
 * Karena butuh akses database, BaseActivator harus extends Model.
 */
abstract class BaseActivator extends Model
{
    /**
     * @var AuthConfig
     */
    protected $config;

    /**
     * @var string
     */
    protected $error = '';

    /**
     * Nama tabel tempat menyimpan token aktivasi.
     */
    protected $table = 'auth_activation_attempts';

    /**
     * Field yang diizinkan untuk insert/update.
     */
    protected $allowedFields = ['user_id', 'token', 'created_at', 'expires'];

    /**
     * Kirim pesan aktivasi ke user.
     */
    abstract public function send(?User $user = null): bool;

    /**
     * Konstruktor, ambil konfigurasi Auth.
     */
    public function __construct(?AuthConfig $config = null)
    {
        parent::__construct(); // penting agar Model siap
        $this->config = $config ?? config('Auth');
    }

    /**
     * Ubah konfigurasi aktivator.
     */
    public function setConfig(AuthConfig $config)
    {
        $this->config = $config;
        return $this;
    }

    /**
     * Ambil pengaturan dari Config\Auth untuk aktivator ini.
     */
    public function getActivatorSettings()
    {
        return (object) ($this->config->userActivators[static::class] ?? []);
    }

    /**
     * Ambil error terakhir.
     */
    public function error(): string
    {
        return $this->error;
    }
}
