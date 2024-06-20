<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class dashboard extends CI_Controller {
 
     
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
    if($this->session->userdata('departemen')=='Kemahasiswaan') {
      /* Dashboard Kemahasiswaan */
        /* Dashboard Kemahasiswaan - Total Data Kegiatan */
         $data['total_kegiatan']=$this->m_crud->get_data('kegiatan')->num_rows();
         $data['total_keg_pendidikan']=$this->m_crud->edit_data(array('kategori'=>'pendpenga'),'kegiatan')->num_rows();
         $data['total_keg_penelitian']=$this->m_crud->edit_data(array('kategori'=>'penlpenge'),'kegiatan')->num_rows();
         $data['total_keg_pkm']=$this->m_crud->edit_data(array('kategori'=>'pkm'),'kegiatan')->num_rows();

         $data['total_keg_nokategori']=$this->m_crud->edit_data(array('status'=>' '),'kegiatan')->num_rows();
         $data['total_keg_tersimpan']=$this->m_crud->edit_data(array('status'=>'tersimpan'),'kegiatan')->num_rows();
         $data['total_keg_terpublikasi']=$this->m_crud->edit_data(array('status'=>'terpublikasi'),'kegiatan')->num_rows();
        /* End Dashboard Kemahasiswaan - Total Data Kegiatan */

        /* Dashboard Kemahasiswaan - Data Kegiatan Detail */
         $data['data_status_kegiatan']=$this->db->query('Select * FROM kegiatan order by id_kegiatan ASC')->result();
         $data['data_status_keg_pendidikan']=$this->db->query('Select * FROM kegiatan where kategori="pendpenga" order by id_kegiatan ASC limit 5')->result();
         $data['data_status_keg_penelitian']=$this->db->query('Select * FROM kegiatan where kategori="penlpenge" order by id_kegiatan ASC limit 5')->result();
         $data['data_status_keg_pkm']=$this->db->query('Select * FROM kegiatan where kategori="pkm" order by id_kegiatan ASC limit 5')->result();
         $data['data_kategori_blank']=$this->db->query('Select * FROM kegiatan where kategori="" order by id_kegiatan ASC limit 5')->result();
        /* End Dashboard Kemahasiswaan - Data Kegiatan Detail */
      /* End Dashboard Kemahasiswaan */
        //   var_dump($data);die();
        $this->load->view('admin/kemahasiswaan/v_header');
        $this->load->view('admin/kemahasiswaan/v_dashboard',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');

    }elseif($this->session->userdata('organisasi')=='Badan Eksekutif Mahasiswa (BEM)'){
        /* Dashboard BEM */
        /* Dashboard BEM - Total Data Kegiatan */
         $data['total_kegiatan']=$this->db->query('Select * FROM kegiatan where ormawa="Badan Eksekutif Mahasiswa (BEM)" order by id_kegiatan')->num_rows();
         $data['total_keg_pendidikan']=$this->db->query('Select * FROM kegiatan where ormawa="Badan Eksekutif Mahasiswa (BEM)" and kategori="pendpenga" order by id_kegiatan')->num_rows();
         $data['total_keg_penelitian']=$this->db->query('Select * FROM kegiatan where ormawa="Badan Eksekutif Mahasiswa (BEM)" and kategori="penlpenge" order by id_kegiatan')->num_rows();
         $data['total_keg_pkm']=$this->db->query('Select * FROM kegiatan where ormawa="Badan Eksekutif Mahasiswa (BEM)" and kategori="pkm" order by id_kegiatan')->num_rows();

         $data['total_keg_nokategori']=$this->db->query('Select * FROM kegiatan where ormawa="Badan Eksekutif Mahasiswa (BEM)" and status=" " order by id_kegiatan')->num_rows();
         $data['total_keg_tersimpan']=$this->db->query('Select * FROM kegiatan where ormawa="Badan Eksekutif Mahasiswa (BEM)" and status="tersimpan" order by id_kegiatan')->num_rows();
         $data['total_keg_terpublikasi']=$this->db->query('Select * FROM kegiatan where ormawa="Badan Eksekutif Mahasiswa (BEM)" and status="terpublikasi" order by id_kegiatan')->num_rows();
        /* End Dashboard BEM - Total Data Kegiatan */

        /* Dashboard BEM - Data Kegiatan Detail */
         $data['data_status_kegiatan']=$this->db->query('Select * FROM kegiatan where ormawa="Badan Eksekutif Mahasiswa (BEM)" order by id_kegiatan ASC')->result();
         $data['data_status_keg_pendidikan']=$this->db->query('Select * FROM kegiatan where kategori="pendpenga" and ormawa="Badan Eksekutif Mahasiswa (BEM)" order by id_kegiatan ASC limit 5')->result();
         $data['data_status_keg_penelitian']=$this->db->query('Select * FROM kegiatan where kategori="penlpenge" and ormawa="Badan Eksekutif Mahasiswa (BEM)" order by id_kegiatan ASC limit 5')->result();
         $data['data_status_keg_pkm']=$this->db->query('Select * FROM kegiatan where kategori="pkm" and ormawa="Badan Eksekutif Mahasiswa (BEM)" order by id_kegiatan ASC limit 5')->result();
         $data['data_kategori_blank']=$this->db->query('Select * FROM kegiatan where kategori="" and ormawa="Badan Eksekutif Mahasiswa (BEM)" order by id_kegiatan ASC limit 5')->result();
        /* End Dashboard BEM - Data Kegiatan Detail */
      /* End Dashboard BEM */
        //   var_dump($data);die();
        $this->load->view('admin/kemahasiswaan/v_header');
        $this->load->view('admin/kemahasiswaan/dashboard/v_dashboard_bem',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');

    }elseif($this->session->userdata('organisasi')=='Himpunan Mahasiswa Teknik Industri (HMTI)'){
        /* Dashboard HMTI */
        /* Dashboard HMTI - Total Data Kegiatan */
         $data['total_kegiatan']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Teknik Industri (HMTI)" order by id_kegiatan')->num_rows();
         $data['total_keg_pendidikan']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Teknik Industri (HMTI)" and kategori="pendpenga" order by id_kegiatan')->num_rows();
         $data['total_keg_penelitian']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Teknik Industri (HMTI)" and kategori="penlpenge" order by id_kegiatan')->num_rows();
         $data['total_keg_pkm']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Teknik Industri (HMTI)" and kategori="pkm" order by id_kegiatan')->num_rows();

         $data['total_keg_nokategori']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Teknik Industri (HMTI)" and status=" " order by id_kegiatan')->num_rows();
         $data['total_keg_tersimpan']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Teknik Industri (HMTI)" and status="tersimpan" order by id_kegiatan')->num_rows();
         $data['total_keg_terpublikasi']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Teknik Industri (HMTI)" and status="terpublikasi" order by id_kegiatan')->num_rows();
        /* End Dashboard HMTI - Total Data Kegiatan */

        /* Dashboard HMTI - Data Kegiatan Detail */
         $data['data_status_kegiatan']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Teknik Industri (HMTI)" order by id_kegiatan ASC')->result();
         $data['data_status_keg_pendidikan']=$this->db->query('Select * FROM kegiatan where kategori="pendpenga" and ormawa="Himpunan Mahasiswa Teknik Industri (HMTI)" order by id_kegiatan ASC limit 5')->result();
         $data['data_status_keg_penelitian']=$this->db->query('Select * FROM kegiatan where kategori="penlpenge" and ormawa="Himpunan Mahasiswa Teknik Industri (HMTI)" order by id_kegiatan ASC limit 5')->result();
         $data['data_status_keg_pkm']=$this->db->query('Select * FROM kegiatan where kategori="pkm" and ormawa="Himpunan Mahasiswa Teknik Industri (HMTI)" order by id_kegiatan ASC limit 5')->result();
         $data['data_kategori_blank']=$this->db->query('Select * FROM kegiatan where kategori="" and ormawa="Himpunan Mahasiswa Teknik Industri (HMTI)" order by id_kegiatan ASC limit 5')->result();
        /* End Dashboard HMTI - Data Kegiatan Detail */
      /* End Dashboard HMTI */
        //   var_dump($data);die();
        $this->load->view('admin/kemahasiswaan/v_header');
        $this->load->view('admin/kemahasiswaan/dashboard/v_dashboard_hmti',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');

    }elseif($this->session->userdata('organisasi')=='Himpunan Mahasiswa Mesin (HMM)'){
        /* Dashboard HMM */
        /* Dashboard HMM - Total Data Kegiatan */
         $data['total_kegiatan']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Mesin (HMM)" order by id_kegiatan')->num_rows();
         $data['total_keg_pendidikan']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Mesin (HMM)" and kategori="pendpenga" order by id_kegiatan')->num_rows();
         $data['total_keg_penelitian']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Mesin (HMM)" and kategori="penlpenge" order by id_kegiatan')->num_rows();
         $data['total_keg_pkm']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Mesin (HMM)" and kategori="pkm" order by id_kegiatan')->num_rows();

         $data['total_keg_nokategori']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Mesin (HMM)" and status=" " order by id_kegiatan')->num_rows();
         $data['total_keg_tersimpan']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Mesin (HMM)" and status="tersimpan" order by id_kegiatan')->num_rows();
         $data['total_keg_terpublikasi']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Mesin (HMM)" and status="terpublikasi" order by id_kegiatan')->num_rows();
        /* End Dashboard HMM - Total Data Kegiatan */

        /* Dashboard HMM - Data Kegiatan Detail */
         $data['data_status_kegiatan']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Mesin (HMM)" order by id_kegiatan ASC')->result();
         $data['data_status_keg_pendidikan']=$this->db->query('Select * FROM kegiatan where kategori="pendpenga" and ormawa="Himpunan Mahasiswa Mesin (HMM)" order by id_kegiatan ASC limit 5')->result();
         $data['data_status_keg_penelitian']=$this->db->query('Select * FROM kegiatan where kategori="penlpenge" and ormawa="Himpunan Mahasiswa Mesin (HMM)" order by id_kegiatan ASC limit 5')->result();
         $data['data_status_keg_pkm']=$this->db->query('Select * FROM kegiatan where kategori="pkm" and ormawa="Himpunan Mahasiswa Mesin (HMM)" order by id_kegiatan ASC limit 5')->result();
         $data['data_kategori_blank']=$this->db->query('Select * FROM kegiatan where kategori="" and ormawa="Himpunan Mahasiswa Mesin (HMM)" order by id_kegiatan ASC limit 5')->result();
        /* End Dashboard HMM - Data Kegiatan Detail */
      /* End Dashboard HMM */
        //   var_dump($data);die();
        $this->load->view('admin/kemahasiswaan/v_header');
        $this->load->view('admin/kemahasiswaan/dashboard/v_dashboard_hmm',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');

    }elseif($this->session->userdata('organisasi')=='Himpunan Mahasiswa Teknik Informatika (HUMANIKA)'){
        /* Dashboard HUMANIKA */
        /* Dashboard HUMANIKA - Total Data Kegiatan */
         $data['total_kegiatan']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Teknik Informatika (HUMANIKA)" order by id_kegiatan')->num_rows();
         $data['total_keg_pendidikan']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Teknik Informatika (HUMANIKA)" and kategori="pendpenga" order by id_kegiatan')->num_rows();
         $data['total_keg_penelitian']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Teknik Informatika (HUMANIKA)" and kategori="penlpenge" order by id_kegiatan')->num_rows();
         $data['total_keg_pkm']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Teknik Informatika (HUMANIKA)" and kategori="pkm" order by id_kegiatan')->num_rows();

         $data['total_keg_nokategori']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Teknik Informatika (HUMANIKA)" and status=" " order by id_kegiatan')->num_rows();
         $data['total_keg_tersimpan']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Teknik Informatika (HUMANIKA)" and status="tersimpan" order by id_kegiatan')->num_rows();
         $data['total_keg_terpublikasi']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Teknik Informatika (HUMANIKA)" and status="terpublikasi" order by id_kegiatan')->num_rows();
        /* End Dashboard HUMANIKA - Total Data Kegiatan */

        /* Dashboard HUMANIKA - Data Kegiatan Detail */
         $data['data_status_kegiatan']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Teknik Informatika (HUMANIKA)" order by id_kegiatan ASC')->result();
         $data['data_status_keg_pendidikan']=$this->db->query('Select * FROM kegiatan where kategori="pendpenga" and ormawa="Himpunan Mahasiswa Teknik Informatika (HUMANIKA)" order by id_kegiatan ASC limit 5')->result();
         $data['data_status_keg_penelitian']=$this->db->query('Select * FROM kegiatan where kategori="penlpenge" and ormawa="Himpunan Mahasiswa Teknik Informatika (HUMANIKA)" order by id_kegiatan ASC limit 5')->result();
         $data['data_status_keg_pkm']=$this->db->query('Select * FROM kegiatan where kategori="pkm" and ormawa="Himpunan Mahasiswa Teknik Informatika (HUMANIKA)" order by id_kegiatan ASC limit 5')->result();
         $data['data_kategori_blank']=$this->db->query('Select * FROM kegiatan where kategori="" and ormawa="Himpunan Mahasiswa Teknik Informatika (HUMANIKA)" order by id_kegiatan ASC limit 5')->result();
        /* End Dashboard HUMANIKA - Data Kegiatan Detail */
      /* End Dashboard HUMANIKA */
        //   var_dump($data);die();
        $this->load->view('admin/kemahasiswaan/v_header');
        $this->load->view('admin/kemahasiswaan/dashboard/v_dashboard_humanika',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');

    }elseif($this->session->userdata('organisasi')=='Himpunan Mahasiswa Manajemen Industri (HM2I)'){
        /* Dashboard HM2I */
        /* Dashboard HM2I - Total Data Kegiatan */
         $data['total_kegiatan']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Manajemen Industri (HM2I)" order by id_kegiatan')->num_rows();
         $data['total_keg_pendidikan']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Manajemen Industri (HM2I)" and kategori="pendpenga" order by id_kegiatan')->num_rows();
         $data['total_keg_penelitian']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Manajemen Industri (HM2I)" and kategori="penlpenge" order by id_kegiatan')->num_rows();
         $data['total_keg_pkm']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Manajemen Industri (HM2I)" and kategori="pkm" order by id_kegiatan')->num_rows();

         $data['total_keg_nokategori']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Manajemen Industri (HM2I)" and status=" " order by id_kegiatan')->num_rows();
         $data['total_keg_tersimpan']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Manajemen Industri (HM2I)" and status="tersimpan" order by id_kegiatan')->num_rows();
         $data['total_keg_terpublikasi']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Manajemen Industri (HM2I)" and status="terpublikasi" order by id_kegiatan')->num_rows();
        /* End Dashboard HM2I - Total Data Kegiatan */

        /* Dashboard HM2I - Data Kegiatan Detail */
         $data['data_status_kegiatan']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Manajemen Industri (HM2I)" order by id_kegiatan ASC')->result();
         $data['data_status_keg_pendidikan']=$this->db->query('Select * FROM kegiatan where kategori="pendpenga" and ormawa="Himpunan Mahasiswa Manajemen Industri (HM2I)" order by id_kegiatan ASC limit 5')->result();
         $data['data_status_keg_penelitian']=$this->db->query('Select * FROM kegiatan where kategori="penlpenge" and ormawa="Himpunan Mahasiswa Manajemen Industri (HM2I)" order by id_kegiatan ASC limit 5')->result();
         $data['data_status_keg_pkm']=$this->db->query('Select * FROM kegiatan where kategori="pkm" and ormawa="Himpunan Mahasiswa Manajemen Industri (HM2I)" order by id_kegiatan ASC limit 5')->result();
         $data['data_kategori_blank']=$this->db->query('Select * FROM kegiatan where kategori="" and ormawa="Himpunan Mahasiswa Manajemen Industri (HM2I)" order by id_kegiatan ASC limit 5')->result();
        /* End Dashboard HM2I - Data Kegiatan Detail */
      /* End Dashboard HM2I */
        //   var_dump($data);die();
        $this->load->view('admin/kemahasiswaan/v_header');
        $this->load->view('admin/kemahasiswaan/dashboard/v_dashboard_hm2i',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');

    }elseif($this->session->userdata('organisasi')=='Himpunan Mahasiswa Teknik Tekstil (HIMATEK)'){
        /* Dashboard HIMATEK */
        /* Dashboard HIMATEK - Total Data Kegiatan */
         $data['total_kegiatan']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Teknik Tekstil (HIMATEK)" order by id_kegiatan')->num_rows();
         $data['total_keg_pendidikan']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Teknik Tekstil (HIMATEK)" and kategori="pendpenga" order by id_kegiatan')->num_rows();
         $data['total_keg_penelitian']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Teknik Tekstil (HIMATEK)" and kategori="penlpenge" order by id_kegiatan')->num_rows();
         $data['total_keg_pkm']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Teknik Tekstil (HIMATEK)" and kategori="pkm" order by id_kegiatan')->num_rows();

         $data['total_keg_nokategori']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Teknik Tekstil (HIMATEK)" and status=" " order by id_kegiatan')->num_rows();
         $data['total_keg_tersimpan']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Teknik Tekstil (HIMATEK)" and status="tersimpan" order by id_kegiatan')->num_rows();
         $data['total_keg_terpublikasi']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Teknik Tekstil (HIMATEK)" and status="terpublikasi" order by id_kegiatan')->num_rows();
        /* End Dashboard HIMATEK - Total Data Kegiatan */

        /* Dashboard HIMATEK - Data Kegiatan Detail */
         $data['data_status_kegiatan']=$this->db->query('Select * FROM kegiatan where ormawa="Himpunan Mahasiswa Teknik Tekstil (HIMATEK)" order by id_kegiatan ASC')->result();
         $data['data_status_keg_pendidikan']=$this->db->query('Select * FROM kegiatan where kategori="pendpenga" and ormawa="Himpunan Mahasiswa Teknik Tekstil (HIMATEK)" order by id_kegiatan ASC limit 5')->result();
         $data['data_status_keg_penelitian']=$this->db->query('Select * FROM kegiatan where kategori="penlpenge" and ormawa="Himpunan Mahasiswa Teknik Tekstil (HIMATEK)" order by id_kegiatan ASC limit 5')->result();
         $data['data_status_keg_pkm']=$this->db->query('Select * FROM kegiatan where kategori="pkm" and ormawa="Himpunan Mahasiswa Teknik Tekstil (HIMATEK)" order by id_kegiatan ASC limit 5')->result();
         $data['data_kategori_blank']=$this->db->query('Select * FROM kegiatan where kategori="" and ormawa="Himpunan Mahasiswa Teknik Tekstil (HIMATEK)" order by id_kegiatan ASC limit 5')->result();
        /* End Dashboard HIMATEK - Data Kegiatan Detail */
      /* End Dashboard HIMATEK */
        //   var_dump($data);die();
        $this->load->view('admin/kemahasiswaan/v_header');
        $this->load->view('admin/kemahasiswaan/dashboard/v_dashboard_himatek',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');

    }elseif($this->session->userdata('organisasi')=='Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)'){
        /* Dashboard MAPALAWASKA */
        /* Dashboard MAPALAWASKA - Total Data Kegiatan */
         $data['total_kegiatan']=$this->db->query('Select * FROM kegiatan where ormawa="Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)" order by id_kegiatan')->num_rows();
         $data['total_keg_pendidikan']=$this->db->query('Select * FROM kegiatan where ormawa="Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)" and kategori="pendpenga" order by id_kegiatan')->num_rows();
         $data['total_keg_penelitian']=$this->db->query('Select * FROM kegiatan where ormawa="Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)" and kategori="penlpenge" order by id_kegiatan')->num_rows();
         $data['total_keg_pkm']=$this->db->query('Select * FROM kegiatan where ormawa="Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)" and kategori="pkm" order by id_kegiatan')->num_rows();

         $data['total_keg_nokategori']=$this->db->query('Select * FROM kegiatan where ormawa="Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)" and status=" " order by id_kegiatan')->num_rows();
         $data['total_keg_tersimpan']=$this->db->query('Select * FROM kegiatan where ormawa="Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)" and status="tersimpan" order by id_kegiatan')->num_rows();
         $data['total_keg_terpublikasi']=$this->db->query('Select * FROM kegiatan where ormawa="Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)" and status="terpublikasi" order by id_kegiatan')->num_rows();
        /* End Dashboard MAPALAWASKA - Total Data Kegiatan */

        /* Dashboard MAPALAWASKA - Data Kegiatan Detail */
         $data['data_status_kegiatan']=$this->db->query('Select * FROM kegiatan where ormawa="Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)" order by id_kegiatan ASC')->result();
         $data['data_status_keg_pendidikan']=$this->db->query('Select * FROM kegiatan where kategori="pendpenga" and ormawa="Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)" order by id_kegiatan ASC limit 5')->result();
         $data['data_status_keg_penelitian']=$this->db->query('Select * FROM kegiatan where kategori="penlpenge" and ormawa="Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)" order by id_kegiatan ASC limit 5')->result();
         $data['data_status_keg_pkm']=$this->db->query('Select * FROM kegiatan where kategori="pkm" and ormawa="Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)" order by id_kegiatan ASC limit 5')->result();
         $data['data_kategori_blank']=$this->db->query('Select * FROM kegiatan where kategori="" and ormawa="Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)" order by id_kegiatan ASC limit 5')->result();
        /* End Dashboard MAPALAWASKA - Data Kegiatan Detail */
      /* End Dashboard MAPALAWASKA */
        //   var_dump($data);die();
        $this->load->view('admin/kemahasiswaan/v_header');
        $this->load->view('admin/kemahasiswaan/dashboard/v_dashboard_mapalawaska',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');

    }elseif($this->session->userdata('organisasi')=='Lembaga Pers Mahasiswa Wastukancana (LPM Waska)'){
        /* Dashboard LPM WASKA */
        /* Dashboard LPM WASKA - Total Data Kegiatan */
         $data['total_kegiatan']=$this->db->query('Select * FROM kegiatan where ormawa="Lembaga Pers Mahasiswa Wastukancana (LPM Waska)" order by id_kegiatan')->num_rows();
         $data['total_keg_pendidikan']=$this->db->query('Select * FROM kegiatan where ormawa="Lembaga Pers Mahasiswa Wastukancana (LPM Waska)" and kategori="pendpenga" order by id_kegiatan')->num_rows();
         $data['total_keg_penelitian']=$this->db->query('Select * FROM kegiatan where ormawa="Lembaga Pers Mahasiswa Wastukancana (LPM Waska)" and kategori="penlpenge" order by id_kegiatan')->num_rows();
         $data['total_keg_pkm']=$this->db->query('Select * FROM kegiatan where ormawa="Lembaga Pers Mahasiswa Wastukancana (LPM Waska)" and kategori="pkm" order by id_kegiatan')->num_rows();

         $data['total_keg_nokategori']=$this->db->query('Select * FROM kegiatan where ormawa="Lembaga Pers Mahasiswa Wastukancana (LPM Waska)" and status=" " order by id_kegiatan')->num_rows();
         $data['total_keg_tersimpan']=$this->db->query('Select * FROM kegiatan where ormawa="Lembaga Pers Mahasiswa Wastukancana (LPM Waska)" and status="tersimpan" order by id_kegiatan')->num_rows();
         $data['total_keg_terpublikasi']=$this->db->query('Select * FROM kegiatan where ormawa="Lembaga Pers Mahasiswa Wastukancana (LPM Waska)" and status="terpublikasi" order by id_kegiatan')->num_rows();
        /* End Dashboard LPM WASKA - Total Data Kegiatan */

        /* Dashboard LPM WASKA - Data Kegiatan Detail */
         $data['data_status_kegiatan']=$this->db->query('Select * FROM kegiatan where ormawa="Lembaga Pers Mahasiswa Wastukancana (LPM Waska)" order by id_kegiatan ASC')->result();
         $data['data_status_keg_pendidikan']=$this->db->query('Select * FROM kegiatan where kategori="pendpenga" and ormawa="Lembaga Pers Mahasiswa Wastukancana (LPM Waska)" order by id_kegiatan ASC limit 5')->result();
         $data['data_status_keg_penelitian']=$this->db->query('Select * FROM kegiatan where kategori="penlpenge" and ormawa="Lembaga Pers Mahasiswa Wastukancana (LPM Waska)" order by id_kegiatan ASC limit 5')->result();
         $data['data_status_keg_pkm']=$this->db->query('Select * FROM kegiatan where kategori="pkm" and ormawa="Lembaga Pers Mahasiswa Wastukancana (LPM Waska)" order by id_kegiatan ASC limit 5')->result();
         $data['data_kategori_blank']=$this->db->query('Select * FROM kegiatan where kategori="" and ormawa="Lembaga Pers Mahasiswa Wastukancana (LPM Waska)" order by id_kegiatan ASC limit 5')->result();
        /* End Dashboard LPM WASKA - Data Kegiatan Detail */
      /* End Dashboard LPM WASKA */
        //   var_dump($data);die();
        $this->load->view('admin/kemahasiswaan/v_header');
        $this->load->view('admin/kemahasiswaan/dashboard/v_dashboard_lpmwaska',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');

    }elseif($this->session->userdata('organisasi')=='Lembaga Dakwah Kampus Wastukancana (LDK Waska)'){
        /* Dashboard LDK WASKA */
        /* Dashboard LDK WASKA - Total Data Kegiatan */
         $data['total_kegiatan']=$this->db->query('Select * FROM kegiatan where ormawa="Lembaga Dakwah Kampus Wastukancana (LDK Waska)" order by id_kegiatan')->num_rows();
         $data['total_keg_pendidikan']=$this->db->query('Select * FROM kegiatan where ormawa="Lembaga Dakwah Kampus Wastukancana (LDK Waska)" and kategori="pendpenga" order by id_kegiatan')->num_rows();
         $data['total_keg_penelitian']=$this->db->query('Select * FROM kegiatan where ormawa="Lembaga Dakwah Kampus Wastukancana (LDK Waska)" and kategori="penlpenge" order by id_kegiatan')->num_rows();
         $data['total_keg_pkm']=$this->db->query('Select * FROM kegiatan where ormawa="Lembaga Dakwah Kampus Wastukancana (LDK Waska)" and kategori="pkm" order by id_kegiatan')->num_rows();

         $data['total_keg_nokategori']=$this->db->query('Select * FROM kegiatan where ormawa="Lembaga Dakwah Kampus Wastukancana (LDK Waska)" and status=" " order by id_kegiatan')->num_rows();
         $data['total_keg_tersimpan']=$this->db->query('Select * FROM kegiatan where ormawa="Lembaga Dakwah Kampus Wastukancana (LDK Waska)" and status="tersimpan" order by id_kegiatan')->num_rows();
         $data['total_keg_terpublikasi']=$this->db->query('Select * FROM kegiatan where ormawa="Lembaga Dakwah Kampus Wastukancana (LDK Waska)" and status="terpublikasi" order by id_kegiatan')->num_rows();
        /* End Dashboard LDK WASKA - Total Data Kegiatan */

        /* Dashboard LDK WASKA - Data Kegiatan Detail */
         $data['data_status_kegiatan']=$this->db->query('Select * FROM kegiatan where ormawa="Lembaga Dakwah Kampus Wastukancana (LDK Waska)" order by id_kegiatan ASC')->result();
         $data['data_status_keg_pendidikan']=$this->db->query('Select * FROM kegiatan where kategori="pendpenga" and ormawa="Lembaga Dakwah Kampus Wastukancana (LDK Waska)" order by id_kegiatan ASC limit 5')->result();
         $data['data_status_keg_penelitian']=$this->db->query('Select * FROM kegiatan where kategori="penlpenge" and ormawa="Lembaga Dakwah Kampus Wastukancana (LDK Waska)" order by id_kegiatan ASC limit 5')->result();
         $data['data_status_keg_pkm']=$this->db->query('Select * FROM kegiatan where kategori="pkm" and ormawa="Lembaga Dakwah Kampus Wastukancana (LDK Waska)" order by id_kegiatan ASC limit 5')->result();
         $data['data_kategori_blank']=$this->db->query('Select * FROM kegiatan where kategori="" and ormawa="Lembaga Dakwah Kampus Wastukancana (LDK Waska)" order by id_kegiatan ASC limit 5')->result();
        /* End Dashboard LDK WASKA - Data Kegiatan Detail */
      /* End Dashboard LDK WASKA */
        //   var_dump($data);die();
        $this->load->view('admin/kemahasiswaan/v_header');
        $this->load->view('admin/kemahasiswaan/dashboard/v_dashboard_ldkwaska',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');

    }elseif($this->session->userdata('organisasi')=='Ketua Program Studi Teknik Informatika'){
        /* Dashboard KAPRODI HUMANIKA */

        /* Dashboard KAPRODI HUMANIKA - Data Proposal Detail */
         $data['data_total_proposal']=$this->db->query('Select * FROM proposal where ormawa="Himpunan Mahasiswa Teknik Informatika (HUMANIKA)" order by id_proposal ASC limit 5')->result();
         $data['data_proposal_reject']=$this->db->query('Select * FROM proposal where ormawa="Himpunan Mahasiswa Teknik Informatika (HUMANIKA)" and status_approve=6 order by id_proposal ASC limit 5')->result();
         $data['data_menunggu_approve']=$this->db->query('Select * FROM proposal where ormawa="Himpunan Mahasiswa Teknik Informatika (HUMANIKA)" and status_approve=0 order by id_proposal ASC limit 5')->result();

        /* End Dashboard LDK WASKA - Data Kegiatan Detail */
      /* End Dashboard LDK WASKA */
        //   var_dump($data);die();
        $this->load->view('admin/kemahasiswaan/v_header');
        $this->load->view('admin/kemahasiswaan/v_dashboard_all',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');

    }elseif($this->session->userdata('organisasi')=='Ketua STT Wastukancana'){
        /* Dashboard KAPRODI HUMANIKA */

        /* Dashboard KAPRODI HUMANIKA - Data Proposal Detail */
         $data['data_total_proposal']=$this->db->query('Select * FROM proposal order by id_proposal ASC limit 5')->result();
         $data['data_proposal_reject']=$this->db->query('Select * FROM proposal where status_approve=6 order by id_proposal ASC limit 5')->result();
         $data['data_menunggu_approve']=$this->db->query('Select * FROM proposal where status_approve=0 order by id_proposal ASC limit 5')->result();

        /* End Dashboard LDK WASKA - Data Kegiatan Detail */
      /* End Dashboard LDK WASKA */
        //   var_dump($data);die();
        $this->load->view('admin/kemahasiswaan/v_header');
        $this->load->view('admin/kemahasiswaan/v_dashboard_all',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');

        }
     }
 
 }
 
 /* End of file Dashboard.php */
  
?>