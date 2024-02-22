<?php
 Class Visimisi extends CI_Controller {
 
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
            $data['user']=$this->m_crud->edit_data_v2('visimisi')->result();
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/profil/v_visimisi', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
    }

    
    public function add()
    {
        if (isset($_POST['simpan'])) {
           $visi=$this->input->post('visi');
           $misi=$this->input->post('misi');
            $this->load->library('upload', $config);
           
            $data = array(
                'visi' => $visi,
                'misi' => $misi

            );
            $this->m_crud->insert_data($data,'visimisi');
            redirect('admin/kemahasiswaan/profil/visimisi?pesan=berhasil_input');

        }else{
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/profil/v_visimisiInput');
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
    }

    public function edit(){
        if (isset($_POST['update'])) {
           $id_visimisi=$this->input->post('id');
           $visi=$this->input->post('visi');
           $misi=$this->input->post('misi');
           
            $data = array(
                'visi' => $visi,
                'misi' => $misi
            );

            $where=array('id_visimisi'=>$id_visimisi
            );
            $this->m_crud->update_data($where,$data,'visimisi');
            redirect('admin/kemahasiswaan/profil/visimisi?pesan=berhasil_edit');

        }else{
            $where=array('id_visimisi'=>$this->uri->segment(6));
            $data['visimisi']=$this->m_crud->edit_data($where,'visimisi')->row_array();
            // var_dump($where);die;
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/profil/v_visimisiEdit',$data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
       
    }
    
    public function delete($id){
        $where=array('id_visimisi'=>$id);
        $this->m_crud->delete_data($where,'visimisi');
        redirect('admin/kemahasiswaan/profil/visimisi?pesan=berhasil_hapus');
    }

    /*public function detail($id){
        $where=array('id_visimisi'=>$id);
        $this->m_crud-> update_data($where,array('visimisi'));
        $data['visimisi']=$this->m_crud->edit_data($where,'visimisi')->row_array();
        $this->load->view('admin/kemahasiswaan/v_header');
        $this->load->view('admin/kemahasiswaan/profil/v_visimisiDetail',$data);
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