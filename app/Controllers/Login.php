<?php
namespace App\Controllers;
use App\models\User_model;
class Login extends BaseController{
    public function index(){
        $data = [];
        helper(['form']);
        if($this->request->getMethod() == 'post'){
            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[50]|validateUser[email,password]',
            ];
            $errors = [
                'password' => [
                    'validateUser' => 'Email or Password don\'t match'
                ]
            ];
            if(!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new User_model();
                $user = $model->where('email', $this->request->getVar('email'))->first();
                $this->setUserSession($user);
                if(!empty($this->request->getVar('remember'))){
                    setcookie('email', $this->request->getVar('email'));
                    setcookie('password', $this->request->getVar('password'));
                } else{
                    setcookie('email', '');
                    setcookie('password', '');
                }
                //$session->setFlashdata('success','Successful Registration');
                return redirect()->to('dashboard')->withCookies();
            }
            
        }
        return view('login', $data);
    }
    private function setUserSession($user){
        $data = [
            'email' => $user['email'],
            'username' => $user['username'],
            'telp' => $user['telp'],
            'isLoggedIn' => true,
        ];
        session()->set($data);
        return true;
    }
    public function register(){
        $data = [];
        helper(['form']);
        if($this->request->getMethod( ) == 'post'){
            $rules = [
                'username' => 'required|min_length[3]|max_length[50]',
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',
                'telp' => 'required|min_length[8]|max_length[12]',
                'password' => 'required|min_length[8]|max_length[50]',
                'password_confirm' => 'matches[password]',
            ];
            if(!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            }else{
                $model = new User_model();
                $newData = [
                    'username' => $this->request->getVar('username'),
                    'telp' => $this->request->getVar('telp'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success','Successful Registration');
                return redirect()->to('/');
            }
        }
        return view('register', $data);
    }
    public function logout(){
        session()->destroy();
        return redirect()->to('/');
    }
}