<?php
namespace App\Validation;
use App\Models\User_model;
class UserRules{
    public function validateUser(string $str, string $fields, array $data){
        $model = new User_model();
        $user = $model->where('email', $data['email'])
                      ->first();
        if(!$user)
            return false;
        return password_verify($data['password'], $user['password']);
    }
}