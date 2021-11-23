<?php
namespace App\Models;
use CodeIgniter\Model;
class User_model extends model{
    protected $table = 'user';
    protected $allowedFields = ['username','email','telp','password'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];
    protected function beforeInsert(array $data){
        $data = $this->passwordHash($data);

        return $data;
    }
    protected function passwordHash(array $data){
        if(isset($data['data']['password']))
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);

        return $data;
    }
}