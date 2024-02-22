<?php
 Class Slider extends CI_Controller {
 
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
            $data['user']=$this->m_crud->edit_data_v2('slider')->result();
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/beranda/v_slider', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
    }

    
    public function add()
    {
        if (isset($_POST['simpan'])) {
            $deskripsi=$this->input->post('deskripsi');

           $gambar = $_FILES['gambar'];
           if ($gambar=''){}else{
            $config['upload_path']      = './theme/assets/img/slider';
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp';
                $config['overwrite']        = TRUE;
                $config['max_size']         = 10240; //10MB
                // $config['max_width']        = 1920;
                // $config['max_height']       = 930;

            if ($this->upload->do_upload('gambar')){
                $gambar = $this->upload->data();

                $config['image_library']    = 'gd2';
                $config['source_image']     = './theme/assets/img/slider/'.$gambar=['file_name'];
                $config['create_thumb']     = FALSE;
                $config['maintain_ratio']   = FALSE;
                $config['quality']          = '50%';
                $config['width']            = 1920;
                $config['heigh']            = 930;
                $config['new_image']        = '.theme/assets/img/slider/'.$gambar['file_name'];
            }


            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            if(!$this->upload->do_upload('gambar')){
                redirect('admin/kemahasiswaan/beranda/slider?pesan=upload_gagal'); die;
            } else {
                $gambar = $this->upload->data('file_name');
            }
           }
           
            $data = array(
                'deskripsi' => $deskripsi,
                'gambar'    => $gambar

            );

            $this->m_crud->insert_data($data,'slider');
            redirect('admin/kemahasiswaan/beranda/slider?pesan=berhasil_input');
            
        }else{
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/beranda/v_sliderInput');
            $this->load->view('admin/kemahasiswaan/v_footer');

        }
    }

    public function edit()
    {
        if (isset($_POST['update'])) {
           $id_slider=$this->input->post('id');
           $deskripsi=$this->input->post('deskripsi');
           $gambar = $_FILES['gambar'];
           if ($gambar=''){}else{
            $config['upload_path']      = './theme/assets/img/slider';
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
                redirect('admin/kemahasiswaan/beranda/slider?pesan=upload_gagal'); die;
            } else {
                $gambar = $this->upload->data('file_name');
            }
             // var_dump($deskripsi);die;
           }

            // var_dump($_FILES);die;
            $data = array(
                'deskripsi' => $deskripsi,
                'gambar'    => $gambar

            );
             $where=array('id_slider'=>$id_slider
             );
             $this->m_crud->update_data($where,$data,'slider');     
             redirect('admin/kemahasiswaan/beranda/slider?pesan=berhasil_edit');
        }else{
            $where=array('id_slider'=>$this->uri->segment(6));
            $data['slider']=$this->m_crud->edit_data($where,'slider')->row_array();
            // var_dump($where);die;
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/beranda/v_sliderEdit',$data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
       
    }

    public function delete($id){
        $where=array('id_slider'=>$id);    
        // $gambar=$this->input->post('gambar');
        // $path='./theme/assets/img/slider'.$gambar;
        // unlink($path);
        $this->m_crud->delete_data($where,'slider');
        redirect('admin/kemahasiswaan/beranda/slider?pesan=berhasil_hapus');
    }

    /*public function detail($id){
        $where=array('id_slider'=>$id);
        $this->m_crud-> update_data($where,array('slider'));
        $data['slider']=$this->m_crud->edit_data($where,'slider')->row_array();
        $this->load->view('admin/kemahasiswaan/v_header');
        $this->load->view('admin/kemahasiswaan/beranda/v_sliderDetail',$data);
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