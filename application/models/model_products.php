<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_products extends CI_Model { //model "Model_products"
    
    public function find($username) //function dengan nama all
    {
        //query semua record di table products
        $hasil = $this->db->where('username2', $username)
                          ->limit(1)
                          ->get('users2'); //memasukkan nilai variabel $hasil dari database/table "products2
        if($hasil->num_rows() > 0) //jika variabel "$hasil" mengakses menampilkan jumlah baris hasil dari query lebih besar dari 0 maka :->
        {
            return $hasil->result(); //mengembalikan nilai (return) dalam bentuk object array "result"
        } 
        else 
        {
            return array(); //mengembalikan nilai (return) dalam bentuk array
        }
    }
}