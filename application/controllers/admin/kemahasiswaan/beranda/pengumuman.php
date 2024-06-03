<?php
 Class Pengumuman extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('m_crud');
        date_default_timezone_set('Asia/Jakarta');
        
    }
 
    function index() {
        if ($this->session->userdata('masuk')!=1) {
             redirect('admin/kemahasiswaan/masuk?pesan=belumlogin','refresh');
         }
        if (
        $this->session->userdata('departemen')=='Kemahasiswaan') {
            $data['user']=$this->m_crud->edit_data_v2('pengumuman')->result();
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/beranda/v_pengumuman', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
    }

    
    public function add()
    {
        if (isset($_POST['simpan'])) {
           $pengumuman=$this->input->post('pengumuman');
           $status=$this->input->post('status');
            $this->load->library('upload', $config);
           
            $data = array(
                'pengumuman' => $pengumuman,
                'status' => $status

            );
            $this->m_crud->insert_data($data,'pengumuman');
            redirect('admin/kemahasiswaan/beranda/pengumuman?pesan=berhasil_input');

        }else{
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/beranda/v_pengumumanInput');
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
    }

    public function edit(){
        if (isset($_POST['update'])) {
           $id_pengumuman=$this->input->post('id');
           $pengumuman=$this->input->post('pengumuman');
           $status=$this->input->post('status');
           
            $data = array(
                'pengumuman' => $pengumuman,
                'status' => $status
            );

            $where=array('id_pengumuman'=>$id_pengumuman
            );
            $this->m_crud->update_data($where,$data,'pengumuman');
            redirect('admin/kemahasiswaan/beranda/pengumuman?pesan=berhasil_edit');

        }else{
            $where=array('id_pengumuman'=>$this->uri->segment(6));
            $data['pengumuman']=$this->m_crud->edit_data($where,'pengumuman')->row_array();
            // var_dump($where);die;
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/beranda/v_pengumumanEdit',$data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
       
    }
    
    public function delete($id){
        $where=array('id_pengumuman'=>$id);
        $this->m_crud->delete_data($where,'pengumuman');
        redirect('admin/kemahasiswaan/beranda/pengumuman?pesan=berhasil_hapus');
    }

    /*public function detail($id){
        $where=array('id_pengumuman'=>$id);
        $this->m_crud-> update_data($where,array('pengumuman'));
        $data['pengumuman']=$this->m_crud->edit_data($where,'pengumuman')->row_array();
        $this->load->view('admin/kemahasiswaan/v_header');
        $this->load->view('admin/kemahasiswaan/beranda/v_pengumumanDetail',$data);
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