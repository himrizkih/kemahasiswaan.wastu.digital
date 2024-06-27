<?php
 Class Kegiatan extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('m_crud');
        $this->load->model('m_post');
        $this->load->library('upload');
        date_default_timezone_set('Asia/Jakarta');
    }
 
    function index() {
        if ($this->session->userdata('masuk')!=1) {
             redirect('admin/kemahasiswaan/masuk?pesan=belumlogin','refresh');
         }
        if (
        $this->session->userdata('departemen')=='Kemahasiswaan') {
            $data['user']=$this->m_crud->edit_data_v2('kegiatan')->result();
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/publikasi/v_kegiatan', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');

        }elseif($this->session->userdata('organisasi')=='Badan Eksekutif Mahasiswa (BEM)') {
            $data['user']=$this->m_post->get_data_kegiatan_ormawa_BEM(array('ormawa'=>'Badan Eksekutif Mahasiswa (BEM)'),'kegiatan')->result();
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/publikasi/v_kegiatan', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');

        }elseif($this->session->userdata('organisasi')=='Himpunan Mahasiswa Teknik Industri (HMTI)') {
            $data['user']=$this->m_post->get_data_kegiatan_ormawa_HMTI(array('ormawa'=>'Himpunan Mahasiswa Teknik Industri (HMTI)'),'kegiatan')->result();
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/publikasi/v_kegiatan', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');

        }elseif($this->session->userdata('organisasi')=='Himpunan Mahasiswa Mesin (HMM)') {
            $data['user']=$this->m_post->get_data_kegiatan_ormawa_HMM(array('ormawa'=>'Himpunan Mahasiswa Mesin (HMM)'),'kegiatan')->result();
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/publikasi/v_kegiatan', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');

        }elseif($this->session->userdata('organisasi')=='Himpunan Mahasiswa Teknik Informatika (HUMANIKA)') {
            $data['user']=$this->m_post->get_data_kegiatan_ormawa_HUMANIKA(array('ormawa'=>'Himpunan Mahasiswa Teknik Informatika (HUMANIKA)'),'kegiatan')->result();
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/publikasi/v_kegiatan', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');

        }elseif($this->session->userdata('organisasi')=='Himpunan Mahasiswa Manajemen Industri (HM2I)') {
            $data['user']=$this->m_post->get_data_kegiatan_ormawa_HM2I(array('ormawa'=>'Himpunan Mahasiswa Manajemen Industri (HM2I)'),'kegiatan')->result();
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/publikasi/v_kegiatan', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');

        }elseif($this->session->userdata('organisasi')=='Himpunan Mahasiswa Teknik Tekstil (HIMATEK)') {
            $data['user']=$this->m_post->get_data_kegiatan_ormawa_HIMATEK(array('ormawa'=>'Himpunan Mahasiswa Teknik Tekstil (HIMATEK)'),'kegiatan')->result();
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/publikasi/v_kegiatan', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');

        }elseif($this->session->userdata('organisasi')=='Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)') {
            $data['user']=$this->m_post->get_data_kegiatan_ormawa_MAPALAWASKA(array('ormawa'=>'Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)'),'kegiatan')->result();
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/publikasi/v_kegiatan', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');

        }elseif($this->session->userdata('organisasi')=='Lembaga Pers Mahasiswa Wastukancana (LPM Waska)') {
            $data['user']=$this->m_post->get_data_kegiatan_ormawa_LPMWaska(array('ormawa'=>'Lembaga Pers Mahasiswa Wastukancana (LPM Waska)'),'kegiatan')->result();
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/publikasi/v_kegiatan', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');

        }elseif($this->session->userdata('organisasi')=='Lembaga Dakwah Kampus Wastukancana (LDK Waska)') {
            $data['user']=$this->m_post->get_data_kegiatan_ormawa_LDKWaska(array('ormawa'=>'Lembaga Dakwah Kampus Wastukancana (LDK Waska)'),'kegiatan')->result();
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/publikasi/v_kegiatan', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
    }

    
    public function add()
    {
        if (isset($_POST['simpan'])) {
           $nama=$this->input->post('nama');
           $kategori=$this->input->post('kategori');
           $peserta=$this->input->post('peserta');
           $jumlah_peserta=$this->input->post('jumlah_peserta');
           $tanggal=$this->input->post('tanggal');
           $deskripsi=$this->input->post('deskripsi');
           $status=$this->input->post('status');

           $id=$this->session->userdata('id_user');
           $user=$this->m_crud->get_pengguna_login($id);
           $w=$user->row_array();
           $kegiatan_id_user=$w['id_user'];
           $ormawa=$w['organisasi'];

           $string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $nama);
           $trim     = trim($string);
           $pre_slug     = strtolower(str_replace(" ", "-", $trim));
           $kegiatan_slug=$pre_slug.'.html';

           $gambar = $_FILES['gambar'];
           if ($gambar=''){}else{
            $config['upload_path'] = './theme/assets/img/kegiatan';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
                $config['overwrite']        = TRUE;
                $config['max_size']         = 10240; //10MB

                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '90%';
                $config['width']= 1920;
                $config['height']= 930;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            if(!$this->upload->do_upload('gambar')){
                redirect('admin/kemahasiswaan/kegiatan?pesan=upload_gagal'); die;
            } else {
                $gambar = $this->upload->data('file_name');
            }
           }
           
            $data = array(
                'nama' =>$nama,
                'kategori' =>$kategori,
                'peserta' =>$peserta,
                'jumlah_peserta' =>$jumlah_peserta,
                'tanggal' =>$tanggal,
                'deskripsi' =>$deskripsi,
                'status' =>'tersimpan',
                'gambar'=>$gambar,
                'kegiatan_id_user' =>$kegiatan_id_user,
                'ormawa' =>$ormawa,
                'kegiatan_slug' =>$kegiatan_slug
            );

            $this->m_crud->insert_data($data,'kegiatan');
            redirect('admin/kemahasiswaan/kegiatan?pesan=berhasil_input');
            
        }else{
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/publikasi/v_kegiatanInput');
            $this->load->view('admin/kemahasiswaan/v_footer');

        }
    }

    public function edit()
    {
        if (isset($_POST['update'])) {
           $id_kegiatan=$this->input->post('id');
           $nama=$this->input->post('nama');
           $kategori=$this->input->post('kategori');
           $peserta=$this->input->post('peserta');
           $jumlah_peserta=$this->input->post('jumlah_peserta');
           $tanggal=$this->input->post('tanggal');
           $deskripsi=$this->input->post('deskripsi');
           $status=$this->input->post('status');

           $string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $nama);
           $trim     = trim($string);
           $pre_slug     = strtolower(str_replace(" ", "-", $trim));
           $kegiatan_slug=$pre_slug.'.html';

           $gambar = $_FILES['gambar'];
           if ($gambar=''){}else{
            $config['upload_path'] = './theme/assets/img/kegiatan';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
                $config['overwrite']        = TRUE;
                $config['max_size']         = 10240; //10MB


            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            if(!$this->upload->do_upload('gambar')){
                // redirect('admin/kemahasiswaan/kegiatan?pesan=upload_gagal'); die;
                $data = array(
                    'nama' =>$nama,
                    'kategori' =>$kategori,
                    'peserta' =>$peserta,
                    'jumlah_peserta' =>$jumlah_peserta,
                    'tanggal' =>$tanggal,
                    'deskripsi' =>$deskripsi,
                    'status' =>$status,
                    'kegiatan_slug' =>$kegiatan_slug
                );
            } else {
                $gambar = $this->upload->data('file_name');
                $data = array(
                    'nama' =>$nama,
                    'kategori' =>$kategori,
                    'peserta' =>$peserta,
                    'jumlah_peserta' =>$jumlah_peserta,
                    'tanggal' =>$tanggal,
                    'deskripsi' =>$deskripsi,
                    'status' =>$status,
                    'gambar'=>$gambar,
                    'kegiatan_slug' =>$kegiatan_slug
                );
            }
           }

            // $data = array(
            //     'nama' =>$nama,
            //     'kategori' =>$kategori,
            //     'peserta' =>$peserta,
            //     'jumlah_peserta' =>$jumlah_peserta,
            //     'tanggal' =>$tanggal,
            //     'deskripsi' =>$deskripsi,
            //     'status' =>$status,
            //     'gambar'=>$gambar,
            //     // 'kegiatan_id_user' =>$kegiatan_id_user,
            //     // 'ormawa' =>$ormawa,
            //     'kegiatan_slug' =>$kegiatan_slug
            // );

             $where=array('id_kegiatan'=>$id_kegiatan);
             $this->m_crud->update_data($where,$data,'kegiatan');     
             redirect('admin/kemahasiswaan/kegiatan?pesan=berhasil_edit');
        }else{
            $where=array('id_kegiatan'=>$this->uri->segment(5));
            $data['kegiatan']=$this->m_crud->edit_data($where,'kegiatan')->row_array();
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/publikasi/v_kegiatanEdit',$data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
       
    }

    public function delete($id){
        $where=array('id_kegiatan'=>$id);
        /*$gambar=$this->input->post('gambar');
        $path='./theme/assets/img/kegiatan'.$gambar;
        unlink($path);*/
        $this->m_crud->delete_data($where,'kegiatan');
        redirect('admin/kemahasiswaan/kegiatan?pesan=berhasil_hapus');
    }

    /*public function detail($id){
        $where=array('id_kegiatan'=>$id);
        $this->m_crud-> update_data($where,array('kegiatan'));
        $data['kegiatan']=$this->m_crud->edit_data($where,'kegiatan')->row_array();
        $this->load->view('admin/kemahasiswaan/v_header');
        $this->load->view('admin/kemahasiswaan/publikasi/v_kegiatanDetail',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');
    }*/

//public function proses

//public function print

//public function printbydate

//public function cetak_arsip_keluar

// public function get_notif()

//public function send_mail

 }
?>