<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_register extends CI_Model { //model "Model_products"
    
    public function create($data_products) //function dengan nama "create($data_products)"
    {
        //Query INSERT INTO
        $this->db->insert('users2', $data_products); //meng akses database lalu memasukkan data variabel-
        //                                             //-"$data_products" kedalam tabel "products2"
    }
}