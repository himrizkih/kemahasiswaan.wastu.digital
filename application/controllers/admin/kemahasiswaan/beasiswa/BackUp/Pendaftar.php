<?php
 Class Pendaftar extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('m_crud');
        $this->load->model('m_post');
        $this->load->library('upload');
        date_default_timezone_set('Asia/Jakarta');
        
    }
 
    function index() {
        if ($this->session->userdata('masuk')!=1) {   
            redirect('admin/kemahasiswaan/masuk_bea_dsn?pesan=belumlogin','refresh');  
        }
        if($this->session->userdata('status')=='kmhs') {
            $data['user']=$this->m_crud->edit_data_v2('pendaftar')->result();
            // $data['beasiswa']=$this->m_post->get_data_beasiswa();
            $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
            $this->load->view('admin/kemahasiswaan/beasiswa/v_pendaftar', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        // }
        }elseif($this->session->userdata('status')=='if'){
            $data['user']=$this->m_post->get_data_pendaftar_prodi_if(array('prodi'=>'if'),'pendaftar')->result();
            $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
            $this->load->view('admin/kemahasiswaan/beasiswa/v_pendaftar', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');

        }elseif($this->session->userdata('status')=='tm'){
            $data['user']=$this->m_post->get_data_pendaftar_prodi_tm(array('prodi'=>'tm'),'pendaftar')->result();
            $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
            $this->load->view('admin/kemahasiswaan/beasiswa/v_pendaftar', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');

        }elseif($this->session->userdata('status')=='ti'){
            $data['user']=$this->m_post->get_data_pendaftar_prodi_ti(array('prodi'=>'ti'),'pendaftar')->result();
            $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
            $this->load->view('admin/kemahasiswaan/beasiswa/v_pendaftar', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');

        }elseif($this->session->userdata('status')=='mi'){
            $data['user']=$this->m_post->get_data_pendaftar_prodi_mi(array('prodi'=>'mi'),'pendaftar')->result();
            $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
            $this->load->view('admin/kemahasiswaan/beasiswa/v_pendaftar', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');

        }elseif($this->session->userdata('status')=='teks'){
            $data['user']=$this->m_post->get_data_pendaftar_prodi_teks(array('prodi'=>'teks'),'pendaftar')->result();
            $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
            $this->load->view('admin/kemahasiswaan/beasiswa/v_pendaftar', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');

        }
        
    }

    
    public function add()
    {
        if (isset($_POST['simpan'])) {
            var_dump($_POST);die;
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
                redirect('admin/kemahasiswaan/beasiswa/pendaftar?pesan=upload_gagal', 'refresh'); die;
            } else {
                $lampiran = $this->upload->data('file_name');
            }
           }
           
            $data = array(
                'id_mhs' =>0,
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
            redirect('admin/kemahasiswaan/beasiswa/pendaftar?pesan=berhasil_input', 'refresh');
            
        }else{
            $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
            $this->load->view('admin/kemahasiswaan/beasiswa/v_pendaftarInput');
            $this->load->view('admin/kemahasiswaan/v_footer');

        }
    }

    public function edit(){
        if (isset($_POST['update'])) {
           $id_pendaftar=$this->input->post('id_pendaftar');
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
                redirect('admin/kemahasiswaan/beasiswa/pendaftar?pesan=upload_gagal'); die;
            } else {
                $lampiran = $this->upload->data('file_name');
            }
           }
           
            $data = array(
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
             $where=array('id_pendaftar'=>$id_pendaftar
             );
             $this->m_crud->update_data($where,$data,'pendaftar');
             redirect('admin/kemahasiswaan/beasiswa/pendaftar?pesan=berhasil_edit');
        }else{
            $where=array('id_pendaftar'=>$this->uri->segment(5));
            $data['pendaftar']=$this->m_crud->edit_data($where,'pendaftar')->row_array();
            $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
            $this->load->view('admin/kemahasiswaan/beasiswa/v_pendaftarEdit',$data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
       
    }
    public function delete($id){
        $where=array('id_pendaftar'=>$id_pendaftar);
        $this->m_crud->delete_data($where,'pendaftar');
        redirect('admin/kemahasiswaan/beasiswa/pendaftar?pesan=berhasil_hapus');
    }

    public function detail($id){
        $where=array('id_pendaftar'=>$id);
        $this->m_crud-> update_data($where,array('status_baca'=>1),'pendaftar');
        $data['pendaftar']=$this->m_crud->edit_data($where,'pendaftar')->row_array();
        $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
        $this->load->view('admin/kemahasiswaan/beasiswa/v_pendaftarDetail',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');
    }

    public function detail_penerima($id){
        $where=array('id_pendaftar'=>$id);
        $data['pendaftar']=$this->m_crud->edit_data($where,'pendaftar')->row_array();
        $data['history']=$this->m_crud->edit_data($where,'history')->row_array();
        $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
        $this->load->view('admin/kemahasiswaan/beasiswa/v_penerimaDetail',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');
    }

    public function insert_history($id_pendaftar,$status,$nama){
        $data = array(
            'id_pendaftar' =>$id_pendaftar,
            'status'=>$status,
            'nama'=>$nama,
            'waktu'=>date('Y-m-d H:i:s')
        );
        $this->m_crud->insert_data($data,'history');
    }

    public function proses(){
        $id=$this->input->post('id_pendaftar');
        $pendaftar=$this->m_crud->edit_data(array('id_pendaftar'=>$id),'pendaftar')->row_array();
        $user=$this->m_crud->edit_data(array('ket'=>'dosen'),'dosen')->row_array();
        
        if (isset($_POST['disetujui'])) {
            if($this->session->userdata('status')=='kmhs') {
                $this->m_crud->update_data(array('id_pendaftar'=>$id),array('status'=>2,'status_baca'=>0),'pendaftar');
                $this->insert_history($id,'approve',$this->session->userdata('nama'));
            redirect('admin/kemahasiswaan/beasiswa/pendaftar?pesan=berhasil_setujui','refresh');

            }elseif($this->session->userdata('status')=='if') {
                $this->m_crud->update_data(array('id_pendaftar'=>$id),array('status'=>2,'status_baca'=>0),'pendaftar');
                $this->insert_history($id,'approve',$this->session->userdata('nama'));
            redirect('admin/kemahasiswaan/beasiswa/pendaftar?pesan=berhasil_setujui','refresh');

            }elseif($this->session->userdata('status')=='tm') {
                $this->m_crud->update_data(array('id_pendaftar'=>$id),array('status'=>2,'status_baca'=>0),'pendaftar');
                $this->insert_history($id,'approve',$this->session->userdata('nama'));
            redirect('admin/kemahasiswaan/beasiswa/pendaftar?pesan=berhasil_setujui','refresh');

            }elseif($this->session->userdata('status')=='ti') {
                $this->m_crud->update_data(array('id_pendaftar'=>$id),array('status'=>2,'status_baca'=>0),'pendaftar');
                $this->insert_history($id,'approve',$this->session->userdata('nama'));
            redirect('admin/kemahasiswaan/beasiswa/pendaftar?pesan=berhasil_setujui','refresh');

            }elseif($this->session->userdata('status')=='mi') {
                $this->m_crud->update_data(array('id_pendaftar'=>$id),array('status'=>2,'status_baca'=>0),'pendaftar');
                $this->insert_history($id,'approve',$this->session->userdata('nama'));
            redirect('admin/kemahasiswaan/beasiswa/pendaftar?pesan=berhasil_setujui','refresh');

            }elseif($this->session->userdata('status')=='teks') {
                $this->m_crud->update_data(array('id_pendaftar'=>$id),array('status'=>2,'status_baca'=>0),'pendaftar');
                $this->insert_history($id,'approve',$this->session->userdata('nama'));
            redirect('admin/kemahasiswaan/beasiswa/pendaftar?pesan=berhasil_setujui','refresh');
            }
            
        }elseif(isset($_POST['ditolak'])) {
            $this->m_crud->update_data(array('id_pendaftar'=>$id),array('status'=>3,'status_baca'=>0),'pendaftar');
            $this->insert_history($id,'reject',$this->session->userdata('nama'));
            redirect('admin/kemahasiswaan/beasiswa/pendaftar?pesan=berhasil_tolak','refresh');
            }  
        }

} 
?>