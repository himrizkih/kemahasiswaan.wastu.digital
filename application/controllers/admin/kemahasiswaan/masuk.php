<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Masuk extends CI_Controller {
     
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
            redirect('admin/kemahasiswaan/dashboard');
        }
         $this->load->view('admin/login/v_masuk');    
     }

     public function proses()
     {
         $username=$this->input->post('username');
         $password=$this->input->post('password');
         $encrypt=md5($password);
         $w=array(
             'username'=>$username,
             'password'=>$encrypt
         );
         $hasil=$this->m_crud->cek_login('user',$w)->row_array();
         if ($hasil==null)
         {    
             redirect('admin/kemahasiswaan/masuk?pesan=salah');
         }else
         {
            $arraydata = array(
                'id_user'   => $hasil['id_user'],
                'nama'      => $hasil['nama'],
                'departemen'=> $hasil['departemen'],
                'organisasi'=> $hasil['organisasi'],
                'keterangan'=> $hasil['keterangan'],
                'masuk'     => '1'
            );
            $this->session->set_userdata($arraydata);
            redirect('admin/kemahasiswaan/dashboard','refresh');            
         }
     }

     public function logout()
     {
        $this->session->sess_destroy();
        redirect('admin/kemahasiswaan/masuk?pesan=logout','refresh');
     }

     public function password()
     {
         $this->load->view('admin/kemahasiswaan/v_header');
         $this->load->view('admin/login/editpassword');
         $this->load->view('admin/kemahasiswaan/v_footer');
     }
     
     public function proseseditpass()
     {
        $this->form_validation->set_rules('new','New Password','required');
        $this->form_validation->set_rules('confirm','Confirm Password','required|matches[new]');
        if ($this->form_validation->run()==FALSE)
        { 
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/login/editpassword');
            $this->load->view('admin/kemahasiswaan/v_footer');         
        }
        else
        {
            $id_user=$this->session->userdata('id_user');
            $password=md5($this->input->post('new'));
            $this->m_crud->update_data(array('id_user'=>$id_user),array('password'=>$password),'user');
            $this->session->sess_destroy();
            redirect('admin/kemahasiswaan/masuk?pesan=sukses','refresh');
        }
     }

     public function belumlogin()
     {
        redirect('admin/kemahasiswaan/masuk?pesan=belumlogin','refresh');
     }
 
 }
 /* End of file Masuk.php */
?>