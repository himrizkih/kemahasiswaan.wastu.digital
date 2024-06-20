<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sambutan extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_post');
        date_default_timezone_set('Asia/Jakarta');
    }

	public function index()
	{
		// $data['sambutan']=$this->m_post->get_data_sambutan();
		$data['sambutan']=$this->m_post->get_data_sambutan_post();
		$this->load->view('profil/v_sambutan', $data);
	}
}