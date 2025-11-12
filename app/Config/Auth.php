<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Auth extends BaseConfig
{
    /**
     * --------------------------------------------------------------------
     * Authentication Libraries
     * --------------------------------------------------------------------
     */
    public array $authenticationLibs = [
        'local' => 'Myth\Auth\Authentication\LocalAuthenticator',
    ];

    /**
     * --------------------------------------------------------------------
     * Hash Algorithm
     * --------------------------------------------------------------------
     * Algoritma hashing untuk password.
     * Bisa 'bcrypt', 'argon2i', atau 'argon2id'
     */
    public string $hashAlgorithm = PASSWORD_DEFAULT; // atau 'bcrypt'

    /**
     * --------------------------------------------------------------------
     * Hash Cost (hanya untuk bcrypt)
     * --------------------------------------------------------------------
     */
    public int $hashCost = 10;

    /**
     * --------------------------------------------------------------------
     * Allow Registration
     * --------------------------------------------------------------------
     */
    public bool $allowRegistration = true;

    /**
     * --------------------------------------------------------------------
     * Require Activation
     * --------------------------------------------------------------------
     */
    public bool $requireActivation = true;

    /**
     * --------------------------------------------------------------------
     * Activator Type
     * --------------------------------------------------------------------
     */
    public string $activator = 'email';

    /**
     * --------------------------------------------------------------------
     * User Activators
     * --------------------------------------------------------------------
     */
    public array $userActivators = [
        'Myth\Auth\Authentication\Activators\EmailActivator' => [
            'fromEmail' => 'ezpd9764@gmail.com',
            'fromName'  => 'Bengkel Kita',
        ],
    ];

    /**
     * --------------------------------------------------------------------
     * User Resetters
     * --------------------------------------------------------------------
     */
    public array $userResetters = [
        'Myth\Auth\Authentication\Resetters\EmailResetter' => [
            'fromEmail' => 'ezpd9764@gmail.com',
            'fromName'  => 'Bengkel Kita',
        ],
    ];

    /**
     * --------------------------------------------------------------------
     * Views
     * --------------------------------------------------------------------
     */
    public array $views = [
        'login'           => 'App\Views\auth\login',
        'register'        => 'App\Views\auth\register',
        'forgot'          => 'App\Views\auth\forgot',
        'reset'           => 'Myth\Auth\Views\reset',
        'emailForgot'     => 'Myth\Auth\Views\emails\forgot',
        'emailActivation' => 'Myth\Auth\Views\emails\activation',
    ];

    /**
     * --------------------------------------------------------------------
     * Remember Me Duration
     * --------------------------------------------------------------------
     */
    public int $rememberLength = 30 * DAY;

    /**
     * --------------------------------------------------------------------
     * Session Keys
     * --------------------------------------------------------------------
     */
    public string $sessionUserKey = 'logged_in';
    public string $sessionRememberKey = 'remember_me';
}
