<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_post');
        date_default_timezone_set('Asia/Jakarta');
    }

	public function index()
	{
		// $data['berita']=$this->m_post->get_data_berita();
		$data['berita']=$this->m_post->get_data_berita_post();
		$data['internal']=$this->m_post->get_data_berita_post_internal();
		$data['eksternal']=$this->m_post->get_data_berita_post_eksternal();
		$this->load->view('v_berita', $data);
	}

	public function detail($slug){
		$data['berita']=$this->m_post->get_berita_by_slug($slug);
		$this->load->view('v_berita_detail',$data);
	}

}