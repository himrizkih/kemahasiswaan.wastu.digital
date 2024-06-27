<?php
 Class Unduhan extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('m_crud');
        $this->load->library('upload');
        $this->load->helper('download');
        date_default_timezone_set('Asia/Jakarta');       
    }
 
    function index() {
        if ($this->session->userdata('masuk')!=1) {
             redirect('admin/kemahasiswaan/masuk_bea_dsn?pesan=belumlogin','refresh');
         }
        if (
        $this->session->userdata('status')=='kmhs') {
            $data['user']=$this->m_crud->edit_data_v2('unduhan')->result();
            $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
            $this->load->view('admin/kemahasiswaan/kategori/v_unduhan', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
    }
    
    public function add()
    {
        if (isset($_POST['simpan'])) {
           $nama=$this->input->post('nama');
           $tanggal=$this->input->post('tanggal');
           $lampiran = $_FILES['lampiran'];
           if ($lampiran=''){}else{
            $config['upload_path'] = './theme/assets/file/unduhan';
            $config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|zip';
                $config['overwrite']        = TRUE;
                $config['max_size']         = 10240; //10MB

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('lampiran')){
                redirect('admin/kemahasiswaan/kategori/unduhan?pesan=upload_gagal'); die;
            } else {
                $lampiran = $this->upload->data('file_name');
            }
           }
           
            $data = array(
                'nama' =>$nama,
                'tanggal' =>$tanggal,
                'lampiran' =>$lampiran
            );

            $this->m_crud->insert_data($data,'unduhan');
            redirect('admin/kemahasiswaan/kategori/unduhan?pesan=berhasil_input');
            
        }else{
            $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
            $this->load->view('admin/kemahasiswaan/kategori/v_unduhanInput');
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
    }

    public function edit()
    {
        if (isset($_POST['update'])) {
           $id_unduhan=$this->input->post('id');
           $nama=$this->input->post('nama');
           $tanggal=$this->input->post('tanggal');
           $lampiran = $_FILES['lampiran'];
           if ($lampiran=''){}else{
            $config['upload_path'] = './theme/assets/file/unduhan';
            $config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|zip';
                $config['overwrite']        = TRUE;
                $config['max_size']         = 10240; //10MB

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('lampiran')){
                redirect('admin/kemahasiswaan/kategori/unduhan?pesan=upload_gagal'); die;
            } else {
                $lampiran = $this->upload->data('file_name');
            }
           }
           
            $data = array(
                'nama' =>$nama,
                'tanggal' =>$tanggal,
                'lampiran' =>$lampiran
            );

            $where=array('id_unduhan'=>$id_unduhan);
            $this->m_crud->update_data($where,$data,'unduhan');     
            redirect('admin/kemahasiswaan/kategori/unduhan?pesan=berhasil_edit');
        }else{
            $where=array('id_unduhan'=>$this->uri->segment(6));
            $data['unduhan']=$this->m_crud->edit_data($where,'unduhan')->row_array();
            $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
            $this->load->view('admin/kemahasiswaan/kategori/v_unduhanEdit',$data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
    }

    public function delete($id){
        $where=array('id_unduhan'=>$id);
        /*$lampiran=$this->input->post('lampiran');
        $path='./theme/assets/file/unduhan'.$lampiran;
        unlink($path);*/
        $this->m_crud->delete_data($where,'unduhan');
        redirect('admin/kemahasiswaan/kategori/unduhan?pesan=berhasil_hapus');
    }

    function download(){
        $id=$this->uri->segment(6);
        $get_db=$this->m_files->get_file_byid($id);
        $q=$get_db->row_array();
        $file=$q['file_data'];
        $path='./assets/files/'.$file;
        $data =  file_get_contents($path);
        $name = $file;

        force_download($name, $data); 
        redirect('admin/files');
    }

    public function get_notif(){
        $kegiatan_terbaru=$this->m_crud->edit_data(array('departemen'=>$this->session->userdata('departemen')),'kegiatan')->num_rows();
        $data = array('kegiatan_terbaru'=>$kegiatan_terbaru);
        echo json_encode($data);
    }

 }
?>