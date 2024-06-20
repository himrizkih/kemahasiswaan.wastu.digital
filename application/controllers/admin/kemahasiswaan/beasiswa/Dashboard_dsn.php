<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class dashboard_dsn extends CI_Controller {
 
     
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_crud');
         
    }
      
    public function index(){
    if ($this->session->userdata('masuk')!=1) {
        redirect('admin/kemahasiswaan/masuk_bea_dsn?pesan=belumlogin','refresh');  
    }
    if($this->session->userdata('status')=='kmhs') {
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
    //   var_dump($data);die();
        $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
        $this->load->view('admin/kemahasiswaan/beasiswa/v_dashboard_dsn/v_dashboard_dsn_kmhs',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');

    /* Dashboard KaProdi */
    }elseif($this->session->userdata('status')=='if'){
        /* Dashboard KaProdi IF */
         $data['total_pendaftar_if']=$this->db->query('Select * FROM pendaftar where prodi="if" order by id_pendaftar')->num_rows();
         $data['total_daftar_menunggu_if']=$this->db->query('Select * FROM pendaftar where status="0" and prodi="if" order by id_pendaftar')->num_rows();

         $data['total_daftar_proses_if']=$this->db->query('Select * FROM pendaftar where status_baca="1" and prodi="if" order by id_pendaftar')->num_rows();
         $data['total_daftar_terima_if']=$this->db->query('Select * FROM pendaftar where status="2" and prodi="if" order by id_pendaftar')->num_rows();
         $data['total_daftar_tolak_if']=$this->db->query('Select * FROM pendaftar where status="3" and prodi="if" order by id_pendaftar')->num_rows();

         $data['data_pendaftar_if']=$this->db->query('Select * FROM pendaftar where status="0" and prodi="if" order by id_pendaftar ASC')->result();
         $data['data_daftar_proses_if']=$this->db->query('Select * FROM pendaftar where status_baca="1" and prodi="if" order by id_pendaftar ASC')->result();
         $data['data_daftar_terima_if']=$this->db->query('Select * FROM pendaftar where status="2" and prodi="if" order by id_pendaftar ASC')->result();
         $data['data_daftar_tolak_if']=$this->db->query('Select * FROM pendaftar where status="3" and prodi="if" order by id_pendaftar ASC')->result();
        
        $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
        $this->load->view('admin/kemahasiswaan/beasiswa/v_dashboard_dsn/v_dashboard_kaprodi_if',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');
        /* End Dashboard KaProdi IF */

    }elseif($this->session->userdata('status')=='tm'){
        /* Dashboard KaProdi TM */
         $data['total_pendaftar_tm']=$this->db->query('Select * FROM pendaftar where prodi="tm" order by id_pendaftar')->num_rows();
         $data['total_daftar_menunggu_tm']=$this->db->query('Select * FROM pendaftar where status="0" and prodi="tm" order by id_pendaftar')->num_rows();

         $data['total_daftar_proses_tm']=$this->db->query('Select * FROM pendaftar where status_baca="1" and prodi="tm" order by id_pendaftar')->num_rows();
         $data['total_daftar_terima_tm']=$this->db->query('Select * FROM pendaftar where status="2" and prodi="tm" order by id_pendaftar')->num_rows();
         $data['total_daftar_tolak_tm']=$this->db->query('Select * FROM pendaftar where status="3" and prodi="tm" order by id_pendaftar')->num_rows();

         $data['data_pendaftar_tm']=$this->db->query('Select * FROM pendaftar where status="0" and prodi="tm" order by id_pendaftar ASC')->result();
         $data['data_daftar_proses_tm']=$this->db->query('Select * FROM pendaftar where status_baca="1" and prodi="tm" order by id_pendaftar ASC')->result();
         $data['data_daftar_terima_tm']=$this->db->query('Select * FROM pendaftar where status="2" and prodi="tm" order by id_pendaftar ASC')->result();
         $data['data_daftar_tolak_tm']=$this->db->query('Select * FROM pendaftar where status="3" and prodi="tm" order by id_pendaftar ASC')->result();

        $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
        $this->load->view('admin/kemahasiswaan/beasiswa/v_dashboard_dsn/v_dashboard_kaprodi_tm',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');
        /* End Dashboard KaProdi TM */

    }elseif($this->session->userdata('status')=='ti'){
        /* Dashboard KaProdi TI */
         $data['total_pendaftar_ti']=$this->db->query('Select * FROM pendaftar where prodi="ti" order by id_pendaftar')->num_rows();
         $data['total_daftar_menunggu_ti']=$this->db->query('Select * FROM pendaftar where status="0" and prodi="ti" order by id_pendaftar')->num_rows();

         $data['total_daftar_proses_ti']=$this->db->query('Select * FROM pendaftar where status_baca="1" and prodi="ti" order by id_pendaftar')->num_rows();
         $data['total_daftar_terima_ti']=$this->db->query('Select * FROM pendaftar where status="2" and prodi="ti" order by id_pendaftar')->num_rows();
         $data['total_daftar_tolak_ti']=$this->db->query('Select * FROM pendaftar where status="3" and prodi="ti" order by id_pendaftar')->num_rows();

         $data['data_pendaftar_ti']=$this->db->query('Select * FROM pendaftar where status="0" and prodi="ti" order by id_pendaftar ASC')->result();
         $data['data_daftar_proses_ti']=$this->db->query('Select * FROM pendaftar where status_baca="1" and prodi="ti" order by id_pendaftar ASC')->result();
         $data['data_daftar_terima_ti']=$this->db->query('Select * FROM pendaftar where status="2" and prodi="ti" order by id_pendaftar ASC')->result();
         $data['data_daftar_tolak_ti']=$this->db->query('Select * FROM pendaftar where status="3" and prodi="ti" order by id_pendaftar ASC')->result();

        $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
        $this->load->view('admin/kemahasiswaan/beasiswa/v_dashboard_dsn/v_dashboard_kaprodi_ti',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');
        /* End Dashboard KaProdi TI */

    }elseif($this->session->userdata('status')=='mi'){
        /* Dashboard KaProdi MI */
         $data['total_pendaftar_mi']=$this->db->query('Select * FROM pendaftar where prodi="mi" order by id_pendaftar')->num_rows();
         $data['total_daftar_menunggu_mi']=$this->db->query('Select * FROM pendaftar where status="0" and prodi="mi" order by id_pendaftar')->num_rows();

         $data['total_daftar_proses_mi']=$this->db->query('Select * FROM pendaftar where status_baca="1" and prodi="mi" order by id_pendaftar')->num_rows();
         $data['total_daftar_terima_mi']=$this->db->query('Select * FROM pendaftar where status="2" and prodi="mi" order by id_pendaftar')->num_rows();
         $data['total_daftar_tolak_mi']=$this->db->query('Select * FROM pendaftar where status="3" and prodi="mi" order by id_pendaftar')->num_rows();

         $data['data_pendaftar_mi']=$this->db->query('Select * FROM pendaftar where status="0" and prodi="mi" order by id_pendaftar ASC')->result();
         $data['data_daftar_proses_mi']=$this->db->query('Select * FROM pendaftar where status_baca="1" and prodi="mi" order by id_pendaftar ASC')->result();
         $data['data_daftar_terima_mi']=$this->db->query('Select * FROM pendaftar where status="2" and prodi="mi" order by id_pendaftar ASC')->result();
         $data['data_daftar_tolak_mi']=$this->db->query('Select * FROM pendaftar where status="3" and prodi="mi" order by id_pendaftar ASC')->result();

        $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
        $this->load->view('admin/kemahasiswaan/beasiswa/v_dashboard_dsn/v_dashboard_kaprodi_mi',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');
        /* End Dashboard KaProdi MI */

    }elseif($this->session->userdata('status')=='teks'){
        /* Dashboard KaProdi TEKS */
         $data['total_pendaftar_teks']=$this->db->query('Select * FROM pendaftar where prodi="teks" order by id_pendaftar')->num_rows();
         $data['total_daftar_menunggu_teks']=$this->db->query('Select * FROM pendaftar where status="0" and prodi="teks" order by id_pendaftar')->num_rows();

         $data['total_daftar_proses_teks']=$this->db->query('Select * FROM pendaftar where status_baca="1" and prodi="teks" order by id_pendaftar')->num_rows();
         $data['total_daftar_terima_teks']=$this->db->query('Select * FROM pendaftar where status="2" and prodi="teks" order by id_pendaftar')->num_rows();
         $data['total_daftar_tolak_teks']=$this->db->query('Select * FROM pendaftar where status="3" and prodi="teks" order by id_pendaftar')->num_rows();

         $data['data_pendaftar_teks']=$this->db->query('Select * FROM pendaftar where status="0" and prodi="teks" order by id_pendaftar ASC')->result();
         $data['data_daftar_proses_teks']=$this->db->query('Select * FROM pendaftar where status_baca="1" and prodi="teks" order by id_pendaftar ASC')->result();
         $data['data_daftar_terima_teks']=$this->db->query('Select * FROM pendaftar where status="2" and prodi="teks" order by id_pendaftar ASC')->result();
         $data['data_daftar_tolak_teks']=$this->db->query('Select * FROM pendaftar where status="3" and prodi="teks" order by id_pendaftar ASC')->result();

        $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
        $this->load->view('admin/kemahasiswaan/beasiswa/v_dashboard_dsn/v_dashboard_kaprodi_teks',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');
        /* End Dashboard KaProdi TEKS */
        }
    }
}
 /* End of file Dashboard.php */
  
?>