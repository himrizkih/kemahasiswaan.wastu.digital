<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Dashboard extends CI_Controller {
 
     
     public function __construct()
     {
         parent::__construct();
         $this->load->model('m_crud');
         
     }
      
     public function index()
     {  
         if ($this->session->userdata('masuk')!=1) {
             
             redirect('admin/kemahasiswaan/masuk?pesan=belumlogin','refresh');
             
         }
         $data['total_kegiatan']=$this->m_crud->get_data('kegiatan')->num_rows();
         $data['total_keg_pendidikan']=$this->m_crud->edit_data(array('kategori'=>'pendpenga'),'kegiatan')->num_rows();
         $data['total_keg_penelitian']=$this->m_crud->edit_data(array('kategori'=>'penlpenge'),'kegiatan')->num_rows();
         $data['total_keg_pkm']=$this->m_crud->edit_data(array('kategori'=>'pkm'),'kegiatan')->num_rows();

         $data['total_keg_nokategori']=$this->m_crud->edit_data(array('status'=>' '),'kegiatan')->num_rows();
         $data['total_keg_tersimpan']=$this->m_crud->edit_data(array('status'=>'tersimpan'),'kegiatan')->num_rows();
         $data['total_keg_terpublikasi']=$this->m_crud->edit_data(array('status'=>'terpublikasi'),'kegiatan')->num_rows();

         $data['data_status_kegiatan']=$this->db->query('Select * FROM kegiatan order by id_kegiatan ASC')->result();
         $data['data_status_keg_pendidikan']=$this->db->query('Select * FROM kegiatan where kategori="pendpenga" order by id_kegiatan ASC limit 5')->result();
         $data['data_status_keg_penelitian']=$this->db->query('Select * FROM kegiatan where kategori="penlpenge" order by id_kegiatan ASC limit 5')->result();
         $data['data_status_keg_pkm']=$this->db->query('Select * FROM kegiatan where kategori="pkm" order by id_kegiatan ASC limit 5')->result();
         $data['data_kategori_blank']=$this->db->query('Select * FROM kegiatan where kategori="" order by id_kegiatan ASC limit 5')->result();

        //   var_dump($data);die();
        $this->load->view('admin/kemahasiswaan/v_header');
        $this->load->view('admin/kemahasiswaan/v_dashboard',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');
     }
 
 }
 
 /* End of file Dashboard.php */
  
?>