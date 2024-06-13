<?php
 Class Sambutan extends CI_Controller {
 
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
            $data['user']=$this->m_crud->edit_data_v2('sambutan')->result();
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/profil/v_sambutan', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
    }

    
    public function add()
    {
        if (isset($_POST['simpan'])) {
           $nama=$this->input->post('nama');
           $sambutan=$this->input->post('sambutan');

           $foto = $_FILES['foto'];
           if ($foto=''){}else{
            $config['upload_path']      = './theme/assets/img/sambutan';
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp';
                $config['overwrite']        = TRUE;
                $config['max_size']         = 10240; //10MB

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            if(!$this->upload->do_upload('foto')){
                redirect('admin/kemahasiswaan/profil/sambutan?pesan=upload_gagal'); die;
            } else {
                $foto = $this->upload->data('file_name');
            }
           }
           
            $data = array(
                'nama'      => $nama,
                'sambutan'  => $sambutan,
                'foto'      => $foto

            );

            $this->m_crud->insert_data($data,'sambutan');
            redirect('admin/kemahasiswaan/profil/sambutan?pesan=berhasil_input');
            
        }else{
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/profil/v_sambutanInput');
            $this->load->view('admin/kemahasiswaan/v_footer');

        }
    }

    public function edit()
    {
        if (isset($_POST['update'])) {
           $id_sambutan=$this->input->post('id');
           $nama=$this->input->post('nama');
           $sambutan=$this->input->post('sambutan');

           $foto = $_FILES['foto'];
           if ($foto=''){}else{
            $config['upload_path']      = './theme/assets/img/sambutan';
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp';
                $config['overwrite']        = TRUE;
                $config['max_size']         = 10240; //10MB

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            if(!$this->upload->do_upload('foto')){
                // redirect('admin/kemahasiswaan/profil/sambutan?pesan=upload_gagal'); die;
                $data = array(
                    'nama'      => $nama,
                    'sambutan'  => $sambutan
                );
            } else {
                $foto = $this->upload->data('file_name');
                $data = array(
                    'nama'      => $nama,
                    'sambutan'  => $sambutan,
                    'foto'      => $foto
                );
            }
           }

            // $data = array(
            //     'nama'      => $nama,
            //     'sambutan'  => $sambutan,
            //     'foto'      => $foto
            // );
            
             $where=array('id_sambutan'=>$id_sambutan
             );
             $this->m_crud->update_data($where,$data,'sambutan');     
             redirect('admin/kemahasiswaan/profil/sambutan?pesan=berhasil_edit');
        }else{
            $where=array('id_sambutan'=>$this->uri->segment(6));
            $data['sambutan']=$this->m_crud->edit_data($where,'sambutan')->row_array();
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/profil/v_sambutanEdit',$data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
       
    }

    public function delete($id){
        $where=array('id_sambutan'=>$id);    
        // $foto=$this->input->post('foto');
        // $path='./theme/assets/img/sambutan'.$foto;
        // unlink($path);
        $this->m_crud->delete_data($where,'sambutan');
        redirect('admin/kemahasiswaan/profil/sambutan?pesan=berhasil_hapus');
    }

    /*public function detail($id){
        $where=array('id_sambutan'=>$id);
        $this->m_crud-> update_data($where,array('sambutan'));
        $data['sambutan']=$this->m_crud->edit_data($where,'sambutan')->row_array();
        $this->load->view('admin/kemahasiswaan/v_header');
        $this->load->view('admin/kemahasiswaan/profil/v_sambutanDetail',$data);
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