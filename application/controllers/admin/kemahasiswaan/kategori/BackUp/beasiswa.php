<?php
 Class Beasiswa extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('m_crud');
        $this->load->library('upload');
        date_default_timezone_set('Asia/Jakarta');
        
    }
 
    function index() {
        // if ($this->session->userdata('masuk')!=1) {
        //      redirect('admin/kemahasiswaan/masuk?pesan=belumlogin','refresh');
        //  }
        // if (
        // $this->session->userdata('departemen')=='Kemahasiswaan') {
        //     $data['user']=$this->m_crud->edit_data_v2('beasiswa')->result();
        //     $this->load->view('admin/kemahasiswaan/v_header');
        //     $this->load->view('admin/kemahasiswaan/kategori/v_beasiswa', $data);
        //     $this->load->view('admin/kemahasiswaan/v_footer');
        // }
        if ($this->session->userdata('masuk')!=1) {
             redirect('admin/kemahasiswaan/masuk_bea_dsn?pesan=belumlogin','refresh');
         }
        if (
        $this->session->userdata('status')=='kmhs') {
            $data['user']=$this->m_crud->edit_data_v2('beasiswa')->result();
            $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
            $this->load->view('admin/kemahasiswaan/kategori/v_beasiswa', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
    }

    
    public function add()
    {
        if (isset($_POST['simpan'])) {
           $nama=$this->input->post('nama');
           $persyaratan=$this->input->post('persyaratan');
           $deskripsi=$this->input->post('deskripsi');
           $keunggulan=$this->input->post('keunggulan');
           $tanggal_penting=$this->input->post('tanggal_penting');
           $kategori=$this->input->post('kategori');
           $status=$this->input->post('status');
           $link_pendaftaran=$this->input->post('link_pendaftaran');

           $string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $nama);
           $trim     = trim($string);
           $pre_slug     = strtolower(str_replace(" ", "-", $trim));
           $beasiswa_slug=$pre_slug.'.html';

           $gambar = $_FILES['gambar'];
           if ($gambar=''){}else{
            $config['upload_path'] = './theme/assets/img/beasiswa';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
                $config['overwrite']        = TRUE;
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
                redirect('admin/kemahasiswaan/kategori/beasiswa?pesan=upload_gagal'); die;
            } else {
                $gambar = $this->upload->data('file_name');
            }
            // var_dump($redaksi);die;
           }
           
            $data = array(
                'nama' =>$nama,
                'persyaratan' =>$persyaratan,
                'deskripsi' =>$deskripsi,
                'keunggulan' =>$keunggulan,
                'tanggal_penting' =>$tanggal_penting,
                'kategori' =>$kategori,
                'status' =>$status,
                'link_pendaftaran' =>$link_pendaftaran,
                'gambar' =>$gambar,
                'beasiswa_slug' =>$beasiswa_slug

            );
            $this->m_crud->insert_data($data,'beasiswa');
            redirect('admin/kemahasiswaan/kategori/beasiswa?pesan=berhasil_input');
            
        }else{
            $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
            $this->load->view('admin/kemahasiswaan/kategori/v_beasiswaInput');
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
    }

    public function edit()
    {
        if (isset($_POST['update'])) {
          // var_dump($_POST);die;
           $id_beasiswa=$this->input->post('id');
           $nama=$this->input->post('nama');
           $persyaratan=$this->input->post('persyaratan');
           $deskripsi=$this->input->post('deskripsi');
           $keunggulan=$this->input->post('keunggulan');
           $tanggal_penting=$this->input->post('tanggal_penting');
           $kategori=$this->input->post('kategori');
           $status=$this->input->post('status');
           $link_pendaftaran=$this->input->post('link_pendaftaran');

           $string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $nama);
           $trim     = trim($string);
           $pre_slug     = strtolower(str_replace(" ", "-", $trim));
           $beasiswa_slug=$pre_slug.'.html';

           $gambar = $_FILES['gambar'];
           if ($gambar=''){}else{
            $config['upload_path'] = './theme/assets/img/beasiswa';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
                $config['overwrite']        = TRUE;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            if(!$this->upload->do_upload('gambar')){
                redirect('admin/kemahasiswaan/kategori/beasiswa?pesan=upload_gagal'); die;
            } else {
                $gambar = $this->upload->data('file_name');
            }
              // var_dump($redaksi);die;
           }
            // var_dump($_FILES);die;
            $data = array(
                'nama' =>$nama,
                'persyaratan' =>$persyaratan,
                'deskripsi' =>$deskripsi,
                'keunggulan' =>$keunggulan,
                'tanggal_penting' =>$tanggal_penting,
                'kategori' =>$kategori,
                'status' =>$status,
                'link_pendaftaran' =>$link_pendaftaran,
                'gambar' =>$gambar,
                'beasiswa_slug' =>$beasiswa_slug

            );
             $where=array('id_beasiswa'=>$id_beasiswa
             );
             $this->m_crud->update_data($where,$data,'beasiswa');     
             redirect('admin/kemahasiswaan/kategori/beasiswa?pesan=berhasil_edit');
        }else{
            $where=array('id_beasiswa'=>$this->uri->segment(6));
            $data['beasiswa']=$this->m_crud->edit_data($where,'beasiswa')->row_array();
            // var_dump($where);die;
            $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
            $this->load->view('admin/kemahasiswaan/kategori/v_beasiswaEdit',$data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
       
    }

    public function delete($id){
        $where=array('id_beasiswa'=>$id);
        // $gambar=$this->input->post('gambar');
        // $path='theme/assets/img/beasiswa'.$beasiswa['gambar'];
        // unlink($path);
        $this->m_crud->delete_data($where,'beasiswa');
        redirect('admin/kemahasiswaan/kategori/beasiswa?pesan=berhasil_hapus');
    }

    /*public function detail($id){
        $where=array('id_beasiswa'=>$id);
        $this->m_crud-> update_data($where,array('beasiswa'));
        $data['beasiswa']=$this->m_crud->edit_data($where,'beasiswa')->row_array();
        $this->load->view('admin/kemahasiswaan/v_header');
        $this->load->view('admin/kemahasiswaan/kategori/v_beasiswaDetail',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');
    }*/

//public function proses

//public function print

//public function printbydate

////public function cetak_arsip_keluar

   public function get_notif(){
       //departemen kemahasiswaan
    $kegiatan_terbaru=$this->m_crud->edit_data(array('departemen'=>$this->session->userdata('departemen')),'kegiatan')->num_rows();
    $data = array('kegiatan_terbaru'=>$kegiatan_terbaru);
     echo json_encode($data);
   }

//public function send_mail
} 


?>