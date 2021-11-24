<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Film_model;

class Film extends Controller{
    public function index(){
        $model = new Film_model();
        $data['film'] = $model->getFilm();
        echo view('dashboard', $data);
    }
    public function add_new(){
        echo view('add_film_view');
    }
    public function save(){
        $model = new Film_model();
        $data = array(
            'judul_vod' => $this->request->getPost('Title'),
            'jenis_vod' => $this->request->getPost('Jenis'),
            'genre_vod' => $this->request->getPost('Genre'),
            'rating_vod' => $this->request->getPost('Rating'),
            'desc_vod' => $this->request->getPost('Synopsis'),
        );
        $model->saveFilm($data);
        return redirect()->to('/Film');
    }
    public function edit($id){
        $model = new Film_model();
        $data['film'] = $model->getFilm($id)->getRow();
        echo view('edit_film_view', $data);
    }
    public function update(){
        $model = new Film_model();
        $id = $this->request->getPost('Film_id');
        $data = array(
            'judul_vod' => $this->request->getPost('Title'),
            'jenis_vod' => $this->request->getPost('Jenis'),
            'genre_vod' => $this->request->getPost('Genre'),
            'rating_vod' => $this->request->getPost('Rating'),
            'desc_vod' => $this->request->getPost('Synopsis'),
        );
        $model->updateFilm($data,$id);
        return redirect()->to('/Film');
    }
    public function delete($id){
        $model = new Film_model();
        $model->deleteFilm($id);
        return redirect()->to('/Film');
    }
}