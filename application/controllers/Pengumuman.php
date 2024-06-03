<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_post');
        date_default_timezone_set('Asia/Jakarta');
    }

	public function index()
	{
		// $data['pengumuman']=$this->m_post->get_data_pengumuman();
		$data['pengumuman']=$this->m_post->get_data_pengumuman_terpublikasi_all();
		$this->load->view('v_pengumuman', $data);
	}
}