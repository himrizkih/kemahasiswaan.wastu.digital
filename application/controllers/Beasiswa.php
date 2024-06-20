<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beasiswa extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_post');
        date_default_timezone_set('Asia/Jakarta');
    }

	public function index()
	{
		// $data['beasiswa']=$this->m_post->get_data_beasiswa();
		$data['beasiswa']=$this->m_post->get_data_beasiswa_post();
		$this->load->view('kategori/v_beasiswa', $data);
	}

	public function lokal()
	{
		// $data['beasiswa']=$this->m_post->get_data_beasiswa();
		$data['beasiswa']=$this->m_post->get_data_beasiswa_lokal();
		$this->load->view('kategori/v_beasiswa_lokal', $data);
	}

	public function wilayah()
	{
		// $data['beasiswa']=$this->m_post->get_data_beasiswa();
		$data['beasiswa']=$this->m_post->get_data_beasiswa_wilayah();
		$this->load->view('kategori/v_beasiswa_wilayah', $data);
	}

	public function nasional()
	{
		// $data['beasiswa']=$this->m_post->get_data_beasiswa();
		$data['beasiswa']=$this->m_post->get_data_beasiswa_nasional();
		$this->load->view('kategori/v_beasiswa_nasional', $data);
	}

	public function internasional()
	{
		// $data['beasiswa']=$this->m_post->get_data_beasiswa();
		$data['beasiswa']=$this->m_post->get_data_beasiswa_internasional();
		$this->load->view('kategori/v_beasiswa_internasional', $data);
	}	

	public function detail($slug){
		$data['beasiswa']=$this->m_post->get_beasiswa_by_slug($slug);
		$this->load->view('kategori/v_beasiswa_detail', $data);
	}

	public function masuk(){
		$this->load->view('kategori/v_beasiswa_masuk');
	}

	public function masuk_mhs(){
		$data['beasiswa']=$this->m_post->get_data_beasiswa_post();
		$this->load->view('kategori/v_beasiswa_masuk_mhs', $data);
	}

	public function detail_mhs(){
		$data['beasiswa']=$this->m_post->get_beasiswa_by_slug($slug);
		$this->load->view('kategori/v_beasiswa_detail_mhs', $data);
	}

	// public function beasiswa_daftar(){
	// 	$data['beasiswa']=$this->m_post->get_beasiswa_daftar_by_slug($slug);
	// 	$this->load->view('kategori/v_beasiswa_form_daftar');
	// }

	public function beasiswa_penerima(){
		$data['pendaftar']=$this->m_post->get_data_penerima();
		$this->load->view('kategori/v_beasiswa_penerima2', $data);
	}

	public function beasiswa_faq(){
		$this->load->view('kategori/v_beasiswa_faq');
	}

	public function beasiswa_lokal_faq_detail(){
		$this->load->view('kategori/v_beasiswa_faq_detail');
	}

	public function beasiswa_wilayah_faq_detail(){
		$this->load->view('kategori/v_beasiswa_faq_detail');
	}

	public function beasiswa_nasional_faq_detail(){
		$this->load->view('kategori/v_beasiswa_faq_detail');
	}

	public function beasiswa_internasional_faq_detail(){
		$this->load->view('kategori/v_beasiswa_faq_detail');
	}

}