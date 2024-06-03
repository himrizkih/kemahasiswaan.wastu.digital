<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Masuk_bea_mhs_daftar extends CI_Controller {
     
     public function __construct()
     {
         parent::__construct();
         $this->load->model('m_crud');
         $this->load->library('session');
     }
 
     public function index()
     {
        if($this->session->userdata('masuk')==1)
        {
            redirect('./beasiswa_daftar');
        }
         $this->load->view('admin/login/v_masuk_bea_mhs_daftar');    
     }

     public function proses()
     {
         $nim=$this->input->post('username');
         $password=$this->input->post('password');
         $encrypt=md5($password);
        //  var_dump($encrypt);die();
         $w=array(
             'nim'=>$nim,
             'password'=>$encrypt
         );
         $hasil=$this->m_crud->cek_login('mahasiswa',$w)->row_array();
        //  var_dump($hasil);die();
         if ($hasil==null)
         {    
             redirect('./masuk?pesan=salah');
         }else
         {
            $arraydata = array(
                'id_mhs'    => $hasil['id_mhs'],
                'nama'      => $hasil['nama'],
                'nim'       => $hasil['nim'],
                'prodi'     => $hasil['prodi'],
                'status'    => $hasil['status'],
                'masuk'     => '1'
            );
            $this->session->set_userdata($arraydata);
             // var_dump($hasil);die();
            redirect('./beasiswa_daftar','refresh');
            
         }
     }

     public function logout()
     {
        $this->session->sess_destroy();
        // redirect('./masuk?pesan=logout','refresh');
        redirect('./beasiswa','refresh');
     }

     public function belumlogin()
     {
        redirect('./masuk?pesan=belumlogin','refresh');
     }
 
 }
 
 /* End of file masuk_bea_mhs.php */
  
?>