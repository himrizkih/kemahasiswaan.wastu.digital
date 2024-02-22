<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_post');
        date_default_timezone_set('Asia/Jakarta');
    }

	public function index()
	{
		// $data['home']=$this->m_post->get_data_home();
		$data['home']=$this->m_post->get_data_home_post();
		// $data['pengumuman']=$this->m_post->get_data_pengumuman();
		$data['pengumuman']=$this->m_post->get_data_pengumuman_terpublikasi();
		// $data['berita']=$this->m_post->get_data_berita();
		$data['berita']=$this->m_post->get_data_berita_post();
		$data['internal']=$this->m_post->get_data_berita_post_internal();
		$data['eksternal']=$this->m_post->get_data_berita_post_eksternal();
		// $data['quotes']=$this->m_post->get_data_quotes();
		$data['quotes']=$this->m_post->get_data_quotes_post();
		$this->load->view('v_beranda', $data);
	}
}