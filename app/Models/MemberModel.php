<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table      = 'koperasi';
    protected $primaryKey = 'id_member';
    protected $allowedFields = ['username', 'nama', 'nik', 'no_hp', 'sampul'];

    public function getMember($idmember = false)
    {
        if ($idmember === false) {
            return $this->findAll();
        }
        return $this->where(['id_member' => $idmember])->first();
    }
     public function findMember($cari){
        return $this->table('koperasi')->like('username', $cari);
    }
}
