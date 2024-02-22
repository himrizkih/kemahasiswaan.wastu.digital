<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifikasi extends CI_Controller {

	 public function __construct()
     {
         parent::__construct();
         $this->load->model('m_crud');
         
     }

	public function index()
	{
		if ($this->session->userdata('masuk')!=1) {
             
             redirect('admin/kemahasiswaan/masuk_bea_mhs?pesan=belumlogin','refresh');
         }
         
		$this->load->view('admin/kemahasiswaan/beasiswa/v_notifikasi');
	}
}