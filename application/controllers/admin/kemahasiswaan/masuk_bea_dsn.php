<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class masuk_bea_dsn extends CI_Controller {
     
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
            redirect('./dashboard');
        }
         $this->load->view('admin/login/v_masuk_bea_dsn');    
     }

     public function proses()
     {
         $nidn=$this->input->post('username');
         $password=$this->input->post('password');
         $encrypt=md5($password);
        //  var_dump($encrypt);die();
         $w=array(
             'nidn'=>$nidn,
             'password'=>$encrypt
         );
         $hasil=$this->m_crud->cek_login('dosen',$w)->row_array();
         // var_dump($hasil);die();
         if ($hasil==null)
         {    
             redirect('./login?pesan=salah');
         }else
         {
            $arraydata = array(
                'id_dosen'  => $hasil['id_dosen'],
                'nama'      => $hasil['nama'],
                'status'    => $hasil['status'],
                'ket'       => $hasil['ket'],
                'masuk'     => '1'
            );
            $this->session->set_userdata($arraydata);
             // var_dump($hasil);die();
            redirect('./dashboard','refresh');
            
         }
     }

     public function logout()
     {
        $this->session->sess_destroy();
        redirect('./login?pesan=logout','refresh');
     }

     public function belumlogin()
     {
        redirect('./login?pesan=belumlogin','refresh');
     }
 
 }
 
 /* End of file masuk_bea_dsn.php */
  
?>