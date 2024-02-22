<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi_Misi extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_post');
        date_default_timezone_set('Asia/Jakarta');
    }

	public function index()
	{
		// $data['visimisi']=$this->m_post->get_data_visimisi();
		$data['visimisi']=$this->m_post->get_data_visimisi_post();
		$this->load->view('profil/v_visi_misi', $data);
	}
}