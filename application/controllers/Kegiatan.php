<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kegiatan extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_post');
        date_default_timezone_set('Asia/Jakarta');
    }

	public function index()
	{
		// $data['kegiatan']=$this->m_post->get_data_kegiatan();
		$data['kegiatan']=$this->m_post->get_data_kegiatan_terpublikasi();
		$data['pendpenga']=$this->m_post->get_data_kegiatan_terpublikasi_pendpenga();
		$data['penlpenge']=$this->m_post->get_data_kegiatan_terpublikasi_penlpenge();
		$data['pkm']=$this->m_post->get_data_kegiatan_terpublikasi_pkm();
		$this->load->view('v_kegiatan', $data);
	}

	public function detail($slug){
		$data['kegiatan']=$this->m_post->get_kegiatan_by_slug($slug);
		$this->load->view('v_kegiatan_detail',$data);
	}
}