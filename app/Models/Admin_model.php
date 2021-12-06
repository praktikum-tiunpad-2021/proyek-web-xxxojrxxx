<?php
namespace App\Models;
use CodeIgniter\Model;
class Admin_model extends model{
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    protected $allowedFields = ['email','password'];
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

    public function getAdmin($id = false){
        if($id === false){
            return $this->findAll();
        }else {
            return $this->getWhere(['id_admin' => $id]);
        }
    }
}