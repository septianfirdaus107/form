<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller { //controller "Login"
    
    public function __construct() //function default
    {
        parent::__construct(); //Konstruktor berguna jika Anda perlu menetapkan beberapa nilai default, 
                               //atau menjalankan proses default saat kelas Anda diinisiasi
        $this->load->model('model_products'); //menjalankan model "model_products"
    }
    
    public function index() //function "index"/default
    {
        $this->form_validation->set_rules('username2','Username','required|alpha_numeric');
        $this->form_validation->set_rules('password2','Password','required|alpha_numeric');
        //"username2" nama pada inputan Username pada "form login" yang diperiksa required|alpha_numeric
        //"Username" sebagai tampilan apa yang eror yaitu "username nya"
        //"required" yang artinya wajib/tidak boleh kosong jika kosong keluar pesan "required"
        //berfungsi untuk menampilkan pesan kesalahan apabila terdapat kesalahan/tidak memenuhi ketentuan-
        //-validasi yang diminta seperti "alpha_numeric" input yang di inputkan harus tipe data berbentuk-
        //-alpha_numeric/Alpha Numeric : Campuran antara karakter dan angka termasuk huruf (A-Z;a-z),-
        //-tanda baca dan beberapa karakter khusus misalnya @, #, $, *, dan sebagainya.
        
        if($this->form_validation->run() == FALSE) //kondisi dimana jika validasi dijalankan == salah/-
                                                   //-ada pesan kesalahan karena; kosong & tipe data-
                                                   //-tidak memenuhi ketentuan "alpha_numeric"
        {            
            $this->load->view('form_login'); //meng akses view "form_login"
        } 
        else 
        {   //jika lolos dari kesalahan kondisi pertama, maka kondisi ini adalah kondisi dimana-
                 //-inputan sama/tidaknya dengan database
            $this->load->model('model_users'); //meng akses model "model_users"
            $valid_user = $this->model_users->check_credential(); //"valid_user" = pengguna yang valid
            //meng akses model "model_users" pada function "check_credential"
            
            if($valid_user == FALSE) 
    //kondisi dimana variabel "$valid_user" hasil validasi dari "model_user,chech_credential"-
    //-yang menghasilkan tidak "cocok=FALSE" data pada inputan dengan data pada database
            {
                $this->session->set_flashdata('error','Wrong Username / Password');
                //meng akses session, set_flashdata yang nantinya ditampilkan pada view "form_login"
                //"Wrong Username / Password = Username / Password salah.
                redirect('login'); // meng akses controller "login" / controllernya sendiri / restart
            } 
            else 
            {
    //kondisi dimana variabel "$valid_user" hasil validasi dari "model_user,chech_credential"-
    //-yang menghasilkan "cocok=TRUE" data pada inputan dengan data pada database
                // if the username and password is a match / Jika username dan password cocok
                $this->session->set_userdata('username2', $valid_user->username2);
                //"session" adalah variabel sementara
                //"set_userdata" adalah memasukan nilai ke variabel sementara atau session
                //set_userdata(‘some_name’, ‘some_value’);
                //"$valid_user->username2" meng inputkan data "username2" pada database/table/users2-
                //-ke variabel "$valid_user"
                                   
                $data['products'] = $this->model_products->find($valid_user->username2);
                $this->load->view('form_profil', $data); //meng akses "base_url" / http://localhost/toko-online2/                                                                               
            }
        }
    }
    
    public function logout() //function "logout"
    {
        $this->session->sess_destroy(); //berfungsi untuk menghapus kegiatan yang dilakukkan sebelumnya
        redirect(base_url()); //mengakses controller "login"/ controllernya sendiri/restart
    }
}