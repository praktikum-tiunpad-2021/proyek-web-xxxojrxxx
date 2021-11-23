<?php
namespace App\Models;
use CodeIgniter\Model;
class Film_model extends Model{
    protected $table = 'vod';
    public function getFilm($id = false){
        if($id === false){
            return $this->findAll();
        }else {
            return $this->getWhere(['id_vod' => $id]);
        }
    }
    public function saveFilm($data){
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
    public function updateFilm($data, $id){
        $query = $this->db->table($this->table)->update($data, array('id_vod' => $id));
        return $query;
    }
    public function deleteFilm($id){
        $query = $this->db->table($this->table)->delete(array('id_vod' => $id));
        return $query;
    }
}