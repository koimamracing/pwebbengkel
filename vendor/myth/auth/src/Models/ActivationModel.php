<?php

namespace Myth\Auth\Models;

use CodeIgniter\Model;

class ActivationModel extends Model
{
    protected $table      = 'auth_activation_attempts';
    protected $primaryKey = 'id';
    protected $allowedFields = ['ip_address', 'user_agent', 'token', 'created_at'];
    protected $useTimestamps = false;
}
