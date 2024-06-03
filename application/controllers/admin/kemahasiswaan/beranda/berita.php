<?php
 Class Berita extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('m_crud');
        $this->load->library('upload');
        date_default_timezone_set('Asia/Jakarta');
        
    }
 
    function index() {
        if ($this->session->userdata('masuk')!=1) {
             redirect('admin/kemahasiswaan/masuk?pesan=belumlogin','refresh');
         }
        if (
        $this->session->userdata('departemen')=='Kemahasiswaan') {
            $data['user']=$this->m_crud->edit_data_v2('berita')->result();
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/beranda/v_berita', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
    }

    
    public function add()
    {
        if (isset($_POST['simpan'])) {
           $judul=$this->input->post('judul');
           $redaksi=$this->input->post('redaksi');
           $tanggal=$this->input->post('tanggal');
           $kategori=$this->input->post('kategori');

           $id=$this->session->userdata('id_user');
           $user=$this->m_crud->get_pengguna_login($id);
           $w=$user->row_array();
           $berita_id_user=$w['id_user'];
           $author=$w['organisasi'];

           $string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
           $trim     = trim($string);
           $pre_slug     = strtolower(str_replace(" ", "-", $trim));
           $berita_slug=$pre_slug.'.html';

           $gambar = $_FILES['gambar'];
           if ($gambar=''){}else{
            $config['upload_path'] = './theme/assets/img/berita';
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
                redirect('admin/kemahasiswaan/beranda/berita?pesan=upload_gagal'); die;
            } else {
                $gambar = $this->upload->data('file_name');
            }
            // var_dump($berita_id_user);die;
            // var_dump($redaksi);die;
           }
           
            $data = array(
                'judul' =>$judul,
                'redaksi' =>$redaksi,
                'tanggal' =>$tanggal,
                'gambar' =>$gambar,
                'kategori' =>$kategori,
                'berita_id_user' =>$berita_id_user,
                'author' =>$author,
                'berita_slug' =>$berita_slug

            );
            $this->m_crud->insert_data($data,'berita');
            redirect('admin/kemahasiswaan/beranda/berita?pesan=berhasil_input');
            
        }else{
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/beranda/v_beritaInput');
            $this->load->view('admin/kemahasiswaan/v_footer');

        }
    }

    public function edit()
    {
        if (isset($_POST['update'])) {
          // var_dump($_POST);die;
           $id_berita=$this->input->post('id');
           $judul=$this->input->post('judul');
           $redaksi=$this->input->post('redaksi');
           $tanggal=$this->input->post('tanggal');
           $kategori=$this->input->post('kategori');
           
           $id=$this->session->userdata('id_user');
           $user=$this->m_crud->get_pengguna_login($id);
           $w=$user->row_array();
           $berita_id_user=$w['id_user'];
           $author=$w['organisasi'];

           $string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
           $trim     = trim($string);
           $pre_slug     = strtolower(str_replace(" ", "-", $trim));
           $berita_slug=$pre_slug.'.html';

           $gambar = $_FILES['gambar'];
           if ($gambar=''){}else{
            $config['upload_path'] = './theme/assets/img/berita';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
                $config['overwrite']        = TRUE;
                $config['max_size']         = 10240; //10MB

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            if(!$this->upload->do_upload('gambar')){
                redirect('admin/kemahasiswaan/beranda/berita?pesan=upload_gagal'); die;
            } else {
                $gambar = $this->upload->data('file_name');
            }
              // var_dump($redaksi);die;
           }
            // var_dump($_FILES);die;
            $data = array(
                'judul' =>$judul,
                'redaksi' =>$redaksi,
                'tanggal' =>$tanggal,
                'gambar' =>$gambar,
                'kategori' =>$kategori,
                'berita_id_user' =>$berita_id_user,
                'author' =>$author,
                'berita_slug' =>$berita_slug

            );
             $where=array('id_berita'=>$id_berita
             );
             $this->m_crud->update_data($where,$data,'berita');     
             redirect('admin/kemahasiswaan/beranda/berita?pesan=berhasil_edit');
        }else{
            $where=array('id_berita'=>$this->uri->segment(6));
            $data['berita']=$this->m_crud->edit_data($where,'berita')->row_array();
            // var_dump($where);die;
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/beranda/v_beritaEdit',$data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
       
    }

    public function delete($id){
        $where=array('id_berita'=>$id);
        // var_dump($where);die;
        // $gambar=$this->input->post('gambar');
        // $path='./theme/assets/img/berita/'.$gambar;
        // unlink($path);
        $this->m_crud->delete_data($where,'berita');
        redirect('admin/kemahasiswaan/beranda/berita?pesan=berhasil_hapus');
    }

    /*public function detail($id){
        $where=array('id_berita'=>$id);
        $this->m_crud-> update_data($where,array('berita'));
        $data['berita']=$this->m_crud->edit_data($where,'berita')->row_array();
        $this->load->view('admin/kemahasiswaan/v_header');
        $this->load->view('admin/kemahasiswaan/beranda/v_beritaDetail',$data);
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