<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Film_model;

class Dashboard extends BaseController
{
    public function index(){
        $model = new Film_model();
        $data['vod'] = $model->getFilm();
        echo view('Home', $data);
    }
    public function home_admin(){
        $model = new Film_model();
        $data['vod'] = $model->getFilm();
        echo view('HomeAdmin', $data);
    }
    public function movie_page($id){
        $model = new Film_model();
        $data['vod'] = $model->getFilm($id)->getRow();
        echo view('MoviePage', $data);
    }
    public function add_new(){
        echo view('AddMovie');
    }
    public function save(){
        $model = new Film_model();
        $data = array(
            'judul_vod' => $this->request->getPost('judul_vod'),
            'rating_vod' => $this->request->getPost('rating_vod'),
            'desc_vod' => $this->request->getPost('desc_vod'),
            'genre_vod' => $this->request->getPost('genre_vod'),
            'jenis_vod' => $this->request->getPost('jenis_vod'),
            'img_vod' => $this->request->getPost('img_vod'),
            'vod_link' => $this->request->getPost('vod_link'),
        );
        $model->saveFilm($data);
        return redirect()->to('/dashboard');
    }
    public function edit($id){
        $model = new Film_model();
        $data['vod'] = $model->getFilm($id)->getRow();
        echo view('edit_film_view', $data);
    }
    public function update(){
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
        );
        $model->updateFilm($data,$id);
        return redirect()->to('/dashboard');
    }
    public function delete($id){
        $model = new Film_model();
        $model->deleteFilm($id);
        return redirect()->to('/dashboard');
    }
}
