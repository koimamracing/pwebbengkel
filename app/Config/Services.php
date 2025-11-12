<?php

namespace Config;

use CodeIgniter\Config\BaseService;
use Myth\Auth\Config\Auth;
use Myth\Auth\Authentication\Activators\EmailActivator;
use Myth\Auth\Authentication\Activators\ActivatorInterface;

class Services extends BaseService
{
    /**
     * 
     */
    public static function activator(?Auth $config = null, bool $getShared = true): ActivatorInterface
    {
        if ($getShared) {
            return static::getSharedInstance('activator', $config);
        }

        if ($config === null) {
            $config = config(Auth::class);
        }

        return new EmailActivator($config);
    }
}
