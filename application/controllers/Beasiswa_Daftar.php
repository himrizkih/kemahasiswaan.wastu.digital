<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beasiswa_daftar extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_crud');
        $this->load->model('m_post');
        $this->load->library('upload');
        date_default_timezone_set('Asia/Jakarta');
    }

    function index() {
        if ($this->session->userdata('masuk')!=1) {
             redirect('admin/kemahasiswaan/masuk_bea_mhs_daftar?pesan=belumlogin','refresh');
         }
        if ($this->session->userdata('status')=='mhs') {
            $data['user']=$this->m_crud->edit_data_v2('beasiswa')->result();
            $data['beasiswa']=$this->m_post->get_data_beasiswa();
            $this->load->view('kategori/v_beasiswa_form_daftar', $data);
        }
    }

    public function add()
    {
        if (isset($_POST['simpan'])) {
        	// var_dump($_POST);die;
           $id_mhs=$this->input->post('id_mhs');
           $nama_mhs=$this->input->post('nama_mhs');
           $nim=$this->input->post('nim');
           $prodi=$this->input->post('prodi');

           $nomor_hp=$this->input->post('nomor_hp');
           $status=$this->input->post('status');
           $status_baca=$this->input->post('status_baca');
           $nama_bea=$this->input->post('nama_bea');
           $kategori=$this->input->post('kategori');
           $tanggal=$this->input->post('tanggal');

           $lampiran = $_FILES['lampiran'];
           if ($lampiran=''){}else{
            $config['upload_path'] = './theme/assets/lampiran';
            $config['allowed_types'] = 'pdf';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('lampiran')){
                redirect('beasiswa_daftar?pesan=upload_gagal', 'refresh'); die;
            } else {
                $lampiran = $this->upload->data('file_name');
            }
           }
           
            $data = array(
                'id_mhs'=>$id_mhs,
                'nama_mhs' =>$nama_mhs,
                'nim'=>$nim,
                'prodi'=>$prodi,
                'nomor_hp'=>$nomor_hp,
                'status'=>0,
                'status_baca'=>0,
                'nama_bea'=>$nama_bea,
                'kategori'=>$kategori,
                'tanggal'=>$tanggal,
                'lampiran'=>$lampiran
            );

            $this->m_crud->insert_data($data,'pendaftar');
            redirect('beasiswa_daftar?pesan=berhasil_input', 'refresh');
            
        }else{
            $this->load->view('beasiswa_daftar');

        }
    }

    // public function detail($id)
    // {
    //     $where=array('id_pendaftar'=>$id);
    //     $this->m_crud-> update_data($where,array('pendaftar'));
    //     $data['pendaftar']=$this->m_crud->edit_data($where,'pendaftar')->row_array();
    // }

    public function edit()
    {
        if (isset($_POST['update'])) {
          // var_dump($_POST);die;
           $id_pendaftar=$this->input->post('id');
           $id_mhs=$this->input->post('pendaftar_id_mhs');
           $nama_mhs=$this->input->post('pendaftar_nama_mhs');
           $nim=$this->input->post('pendaftar_nim');
           $prodi=$this->input->post('pendaftar_prodi');

           $nomor_hp=$this->input->post('pendaftar_nomor_hp');
           $status=$this->input->post('pendaftar_status');
           $status_baca=$this->input->post('pendaftar_status_baca');
           $nama_bea=$this->input->post('pendaftar_nama_bea');
           $kategori=$this->input->post('pendaftar_kategori');
           $tanggal=$this->input->post('pendaftar_tanggal');

           $lampiran = $_FILES['lampiran'];
           if ($lampiran=''){}else{
            $config['upload_path'] = './theme/assets/lampiran';
            $config['allowed_types'] = 'pdf';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('lampiran')){
                redirect('profil/beasiswa?pesan=upload_gagal', 'refresh'); die;
            } else {
                $lampiran = $this->upload->data('file_name');
            }
           }

           $data = array(
                'id_mhs'=>$id_mhs,
                'nama_mhs' =>$nama_mhs,
                'nim'=>$nim,
                'prodi'=>$prodi,
                'nomor_hp'=>$nomor_hp,
                'status'=>0,
                'status_baca'=>0,
                'nama_bea'=>$nama_bea,
                'kategori'=>$kategori,
                'tanggal'=>$tanggal,
                'lampiran'=>$lampiran
            );

           // var_dump($data);die;
           $where=array('id_pendaftar'=>$id_pendaftar);
           $this->m_crud->update_data($where,$data,'pendaftar');     
           redirect('profil/beasiswa?pesan=berhasil_edit', 'refresh');
        }else{
            $where=array('id_pendaftar'=>$this->uri->segment(4));
            $data['pendaftar']=$this->m_crud->edit_data($where,'pendaftar')->row_array();
            // var_dump($where);die;
            $this->load->view('profil/beasiswa',$data);
        }
       
    }

}