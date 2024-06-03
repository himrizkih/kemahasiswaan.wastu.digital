<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_post');
        date_default_timezone_set('Asia/Jakarta');
    }

	public function index()
	{
		// $data['strukturorganisasi']=$this->m_post->get_data_strukturorganisasi();
		$data['strukturorganisasi']=$this->m_post->get_data_strukturorganisasi_post();
		$this->load->view('profil/v_struktur', $data);
	}
}