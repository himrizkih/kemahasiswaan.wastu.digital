<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unduhan extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('m_post');
        $this->load->helper('download');
        date_default_timezone_set('Asia/Jakarta');
        
    }

	public function index()
	{
		// $data['unduhan']=$this->m_post->get_data_unduhan();
		$data['unduhan']=$this->m_post->get_data_files_unduhan();
		$this->load->view('kategori/v_unduhan1', $data);
	}

	public function get_file(){
		$id=$this->uri->segment(3);
		$get_db=$this->m_post->get_files_byid($id);
		$q=$get_db->row_array();
		$file=$q['lampiran'];
		$path='./theme/assets/file/unduhan/'.$file;
		$data = file_get_contents($path);
		$name = $file;
		force_download($name, $data);
	}
}