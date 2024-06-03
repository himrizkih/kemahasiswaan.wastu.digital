<?php
 Class strukturorganisasi extends CI_Controller {
 
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
            $data['user']=$this->m_crud->edit_data_v2('strukturorganisasi')->result();
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/profil/v_strukturorganisasi', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
    }

    
    public function add()
    {
        if (isset($_POST['simpan'])) {

           $gambar = $_FILES['gambar'];
           if ($gambar=''){}else{
            $config['upload_path']      = './theme/assets/img/strukturorganisasi';
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp';
                $config['overwrite']        = TRUE;
                $config['max_size']         = 10240; //10MB
                // $config['max_width']        = 1920;
                // $config['max_height']       = 930;

            if ($this->upload->do_upload('gambar')){
                $gambar = $this->upload->data();

                $config['image_library']    = 'gd2';
                $config['source_image']     = './theme/assets/img/strukturorganisasi/'.$gambar=['file_name'];
                $config['create_thumb']     = FALSE;
                $config['maintain_ratio']   = FALSE;
                $config['quality']          = '50%';
                $config['width']            = 1920;
                $config['heigh']            = 930;
                $config['new_image']        = '.theme/assets/img/strukturorganisasi/'.$gambar['file_name'];
            }


            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            if(!$this->upload->do_upload('gambar')){
                redirect('admin/kemahasiswaan/profil/strukturorganisasi?pesan=upload_gagal'); die;
            } else {
                $gambar = $this->upload->data('file_name');
            }
           }
           
            $data = array(
                'gambar'      => $gambar

            );

            $this->m_crud->insert_data($data,'strukturorganisasi');
            redirect('admin/kemahasiswaan/profil/strukturorganisasi?pesan=berhasil_input');
            
        }else{
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/profil/v_strukturorganisasiInput');
            $this->load->view('admin/kemahasiswaan/v_footer');

        }
    }

    public function edit()
    {
        if (isset($_POST['update'])) {
           $id_strukturorganisasi=$this->input->post('id');

           $gambar = $_FILES['gambar'];
           if ($gambar=''){}else{
            $config['upload_path']      = './theme/assets/img/strukturorganisasi';
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp';
                $config['overwrite']        = TRUE;
                $config['max_size']         = 10240; //10MB
                // $config['max_width']        = 1920;
                // $config['max_height']       = 930;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            if(!$this->upload->do_upload('gambar')){
                redirect('admin/kemahasiswaan/profil/strukturorganisasi?pesan=upload_gagal'); die;
            } else {
                $gambar = $this->upload->data('file_name');
            }
             // var_dump($deskripsi);die;
           }

            // var_dump($_FILES);die;
            $data = array(
                'gambar'      => $gambar

            );
             $where=array('id_strukturorganisasi'=>$id_strukturorganisasi
             );
             $this->m_crud->update_data($where,$data,'strukturorganisasi');     
             redirect('admin/kemahasiswaan/profil/strukturorganisasi?pesan=berhasil_edit');
        }else{
            $where=array('id_strukturorganisasi'=>$this->uri->segment(6));
            $data['strukturorganisasi']=$this->m_crud->edit_data($where,'strukturorganisasi')->row_array();
            // var_dump($where);die;
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/profil/v_strukturorganisasiEdit',$data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
       
    }

    public function delete($id){
        $where=array('id_strukturorganisasi'=>$id);    
        // $gambar=$this->input->post('gambar');
        // $path='./theme/assets/img/strukturorganisasi'.$gambar;
        // unlink($path);
        $this->m_crud->delete_data($where,'strukturorganisasi');
        redirect('admin/kemahasiswaan/profil/strukturorganisasi?pesan=berhasil_hapus');
    }

    /*public function detail($id){
        $where=array('id_strukturorganisasi'=>$id);
        $this->m_crud-> update_data($where,array('strukturorganisasi'));
        $data['strukturorganisasi']=$this->m_crud->edit_data($where,'strukturorganisasi')->row_array();
        $this->load->view('admin/kemahasiswaan/v_header');
        $this->load->view('admin/kemahasiswaan/profil/v_strukturorganisasiDetail',$data);
        $this->load->view('admin/kemahasiswaan/v_footer');
    }*/

//public function proses

//public function print

//public function printbydate

////public function cetak_arsip_keluar

   public function get_notif(){
       //departemen kemahasiswaan
    $kegiatan_new=$this->m_crud->edit_data(array('departemen'=>$this->session->userdata('departemen')),'kegiatan')->num_rows();
    $data = array('kegiatan_terbaru'=>$kegiatan_terbaru);
     echo json_encode($data);
   }

//public function send_mail
} 


?>