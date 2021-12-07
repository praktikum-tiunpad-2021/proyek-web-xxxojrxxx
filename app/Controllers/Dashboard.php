<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Film_model;
use App\Models\User_model;
use App\Models\Admin_model;

class Dashboard extends BaseController
{
    public function index(){
        if(session()->get('id') == null) {
            return redirect()->to('/');
        }
        $model = new Film_model();
        $data['vod'] = $model->getFilm();
        echo view('Home', $data);
    }
    public function home_admin(){
        if(session()->get('id') == null || session()->get('admin') == false) {
            return redirect()->to('/');
        }
        $model = new Film_model();
        $data['vod'] = $model->getFilm();
        echo view('HomeAdmin', $data);
    }
    public function movie_page($id){
        if(session()->get('id') == null) {
            return redirect()->to('/');
        }
        $model = new Film_model();
        $data['vod'] = $model->getFilm($id)->getRow();
        echo view('MoviePage', $data);
    }

    public function profile($id){
        if(session()->get('id') == null) {
            return redirect()->to('/');
        }
        $model = new User_model();
        $data['user'] = $model->getUser($id)->getRow();
        echo view('Profile', $data);
    }

    public function add_new(){
        if(session()->get('id') == null || session()->get('admin') == false) {
            return redirect()->to('/');
        }
        echo view('AddMovie');
    }
    public function save(){
        if(session()->get('id') == null || session()->get('admin') == false) {
            return redirect()->to('/');
        }
        $model = new Film_model();
        $data = array(
            'judul_vod' => $this->request->getPost('judul_vod'),
            'rating_vod' => $this->request->getPost('rating_vod'),
            'desc_vod' => $this->request->getPost('desc_vod'),
            'genre_vod' => $this->request->getPost('genre_vod'),
            'jenis_vod' => $this->request->getPost('jenis_vod'),
            'img_vod' => $this->request->getPost('img_vod'),
            'vod_link' => $this->request->getPost('vod_link'),
            'id_admin' => $this->request->getPost('id_admin'),
        );
        $model->saveFilm($data);
        return redirect()->to('/dashboard/home_admin');
    }
    public function edit($id){
        if(session()->get('id') == null || session()->get('admin') == false) {
            return redirect()->to('/');
        }
        $model = new Film_model();
        $data['vod'] = $model->getFilm($id)->getRow();
        echo view('EditMovie', $data);
    }
    public function update(){
        if(session()->get('id') == null || session()->get('admin') == false) {
            return redirect()->to('/');
        }
        $model = new Film_model();
        $id = $this->request->getPost('id_vod');
        $data = array(
            'judul_vod' => $this->request->getPost('judul_vod'),
            'rating_vod' => $this->request->getPost('rating_vod'),
            'desc_vod' => $this->request->getPost('desc_vod'),
            'genre_vod' => $this->request->getPost('genre_vod'),
            'jenis_vod' => $this->request->getPost('jenis_vod'),
            'img_vod' => $this->request->getPost('img_vod'),
            'vod_link' => $this->request->getPost('vod_link'),
            'id_admin' => $this->request->getPost('id_admin'),
        );
        $model->updateFilm($data,$id);
        return redirect()->to('/dashboard/home_admin');
    }
    public function delete($id){
        if(session()->get('id') == null || session()->get('admin') == false) {
            return redirect()->to('/');
        }
        $model = new Film_model();
        $model->deleteFilm($id);
        return redirect()->to('/dashboard/home_admin');
    }
}
