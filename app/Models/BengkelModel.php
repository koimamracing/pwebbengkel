<?php
namespace App\Models;

use CodeIgniter\Model;

class BengkelModel extends Model
{
    protected $table = 'user'; 
    protected $primaryKey = 'id_client';
    protected $allowedFields = ['email_client', 'password_client'];
}
