<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Dashboard_dsn extends CI_Controller {
 
     
     public function __construct()
     {
         parent::__construct();
         $this->load->model('m_crud');
         
     }
      
     public function index()
     {  
         if ($this->session->userdata('masuk')!=1) {
             
             redirect('admin/kemahasiswaan/masuk_bea_dsn?pesan=belumlogin','refresh');
             
         }

    /* Dashboard Kemahasiswaan */
        /* Dashboard Kemahasiswaan - Total Data Beasiswa */
         $data['total_bea_lokal']=$this->m_crud->edit_data(array('kategori'=>'lokal'),'beasiswa')->num_rows();
         $data['total_bea_wilayah']=$this->m_crud->edit_data(array('kategori'=>'wilayah'),'beasiswa')->num_rows();
         $data['total_bea_nasional']=$this->m_crud->edit_data(array('kategori'=>'nasional'),'beasiswa')->num_rows();
         $data['total_bea_internasional']=$this->m_crud->edit_data(array('kategori'=>'internasional'),'beasiswa')->num_rows();

         $data['total_bea_buka']=$this->m_crud->get_data('beasiswa')->num_rows();
         $data['total_bea_tersimpan']=$this->m_crud->edit_data(array('status'=>'tersimpan'),'beasiswa')->num_rows();
         $data['total_bea_nostatus']=$this->m_crud->edit_data(array('status'=>' '),'beasiswa')->num_rows();
        /* End Dashboard Kemahasiswaan - Total Data Beasiswa */

        /* Dashboard Kemahasiswaan - Data Beasiswa Dibuka */
         $data['data_bea_buka']=$this->db->query('Select * FROM beasiswa where status="terpublikasi" order by id_beasiswa ASC limit 5')->result();
        /* End Dashboard Kemahasiswaan - Data Beasiswa Dibuka */

        /* Dashboard Kemahasiswaan - Kategori Pendaftar */
         $data['data_pendaftar_kmhs']=$this->db->query('Select * FROM pendaftar where status="0" order by id_pendaftar ASC')->result();
         $data['data_daftar_proses_kmhs']=$this->db->query('Select * FROM pendaftar where status_baca="1" order by id_pendaftar ASC')->result();
         $data['data_daftar_terima_kmhs']=$this->db->query('Select * FROM pendaftar where status="2" order by id_pendaftar ASC')->result();
         $data['data_daftar_tolak_kmhs']=$this->db->query('Select * FROM pendaftar where status="3" order by id_pendaftar ASC')->result();
        /* End Dashboard Kemahasiswaan - Kategori Pendaftar */         
    /* End Dashboard Kemahasiswaan */

    /* Dashboard KaProdi */
        /* Dashboard KaProdi IF */
         $data['total_pendaftar']=$this->db->query('Select * FROM pendaftar where prodi="if" order by id_pendaftar')->num_rows();
         $data['total_daftar_menunggu']=$this->db->query('Select * FROM pendaftar where status="0" and prodi="if" order by id_pendaftar')->num_rows();

         $data['total_daftar_proses']=$this->db->query('Select * FROM pendaftar where status_baca="1" and prodi="if" order by id_pendaftar')->num_rows();
         $data['total_daftar_terima']=$this->db->query('Select * FROM pendaftar where status="2" and prodi="if" order by id_pendaftar')->num_rows();
         $data['total_daftar_tolak']=$this->db->query('Select * FROM pendaftar where status="3" and prodi="if" order by id_pendaftar')->num_rows();

         $data['data_pendaftar']=$this->db->query('Select * FROM pendaftar where status="0" and prodi="if" order by id_pendaftar ASC')->result();
         $data['data_daftar_proses']=$this->db->query('Select * FROM pendaftar where status_baca="1" and prodi="if" order by id_pendaftar ASC')->result();
         $data['data_daftar_terima']=$this->db->query('Select * FROM pendaftar where status="2" and prodi="if" order by id_pendaftar ASC')->result();
         $data['data_daftar_tolak']=$this->db->query('Select * FROM pendaftar where status="3" and prodi="if" order by id_pendaftar ASC')->result();
         /* End Dashboard KaProdi IF */

         $data['total_pendaftarr']=$this->db->query('Select * FROM pendaftar order by id_pendaftar')->num_rows();
         $data['total_daftar_menungguu']=$this->db->query('Select * FROM pendaftar where status="0" order by id_pendaftar')->num_rows();

         $data['total_daftar_prosess']=$this->db->query('Select * FROM pendaftar where status_baca="1" order by id_pendaftar')->num_rows();
         $data['total_daftar_terimaa']=$this->db->query('Select * FROM pendaftar where status="2" order by id_pendaftar')->num_rows();
         $data['total_daftar_tolakk']=$this->db->query('Select * FROM pendaftar where status="3" order by id_pendaftar')->num_rows();

         $data['data_pendaftarr']=$this->db->query('Select * FROM pendaftar where status="0" order by id_pendaftar ASC')->result();
         $data['data_daftar_prosess']=$this->db->query('Select * FROM pendaftar where status_baca="1" order by id_pendaftar ASC')->result();
         $data['data_daftar_terimaa']=$this->db->query('Select * FROM pendaftar where status="2" order by id_pendaftar ASC')->result();
         $data['data_daftar_tolakk']=$this->db->query('Select * FROM pendaftar where status="3" order by id_pendaftar ASC')->result();

    /* End Dashboard KaProdi */

        //   var_dump($data);die();
        $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
        $this->load->view('admin/kemahasiswaan/beasiswa/v_dashboard_dsn',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');
     }
 
 }
 
 /* End of file Dashboard.php */
  
?>