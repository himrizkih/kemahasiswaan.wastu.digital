<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beasiswa_mhs extends CI_Controller {

     public function __construct()
     {
         parent::__construct();
         $this->load->model('m_crud');
         $this->load->model('m_post');
         
     }

    public function index()
    {
        if ($this->session->userdata('masuk')!=1) {
             
             redirect('admin/kemahasiswaan/masuk_bea_mhs?pesan=belumlogin','refresh');
        }
        if($this->session->userdata('prodi')=='mhs') {
            $data['pendaftar']=$this->m_post->get_data_pendaftar_prodi_mhs();
            $this->load->view('admin/kemahasiswaan/beasiswa/v_beasiswa_mhs', $data);

        }
        elseif($this->session->userdata('prodi')=='if'){
            $data['pendaftar']=$this->m_post->get_data_pendaftar_prodi_if();
            $this->load->view('admin/kemahasiswaan/beasiswa/v_beasiswa_mhs', $data);

        }elseif($this->session->userdata('prodi')=='tm'){
            $data['pendaftar']=$this->m_post->get_data_pendaftar_prodi_tm();
            $this->load->view('admin/kemahasiswaan/beasiswa/v_beasiswa_mhs', $data);

        }elseif($this->session->userdata('prodi')=='ti'){
            $data['pendaftar']=$this->m_post->get_data_pendaftar_prodi_ti();
            $this->load->view('admin/kemahasiswaan/beasiswa/v_beasiswa_mhs', $data);

        }elseif($this->session->userdata('prodi')=='mi'){
            $data['pendaftar']=$this->m_post->get_data_pendaftar_prodi_mi();
            $this->load->view('admin/kemahasiswaan/beasiswa/v_beasiswa_mhs', $data);

        }elseif($this->session->userdata('prodi')=='teks'){
            $data['pendaftar']=$this->m_post->get_data_pendaftar_prodi_teks();
            $this->load->view('admin/kemahasiswaan/beasiswa/v_beasiswa_mhs', $data);;
        }
    }

}