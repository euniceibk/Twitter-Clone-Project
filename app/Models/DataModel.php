<?php namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model{
    protected $table = 'data';
    protected $primaryKey = 'id';
    protected $allowedFields = ['english', 'pidgen', 'status'];
    protected $returnType     = 'object';
    // protected $createdField  = 'created';

    public function updatePidgin($id,$english) {
        $db = \Config\Database::connect();
        $query = $db->query('UPDATE data SET `english`="'.$english.'", `status`="1" WHERE id="'.$id.'"');
        if($query){
            return true;
        } else {
            return false;
        }
    }
}