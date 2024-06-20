<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class faq extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_post');
        date_default_timezone_set('Asia/Jakarta');
    }

	public function index()
	{
		// $data['faq']=$this->m_post->get_data_faq_all();
		$data['faq']=$this->m_post->get_data_faq();
		$this->load->view('v_faq', $data);
	}
}