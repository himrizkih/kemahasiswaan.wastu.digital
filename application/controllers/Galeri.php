<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_post');
        date_default_timezone_set('Asia/Jakarta');
    }

	public function index()
	{
		// $data['galeri']=$this->m_post->get_data_kegiatan();
		$data['galeri']=$this->m_post->get_data_galeri_terpublikasi();
		$this->load->view('v_galeri', $data);
	}
}