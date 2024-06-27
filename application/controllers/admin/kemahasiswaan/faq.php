<?php
 Class Faq extends CI_Controller {
 
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
            $data['user']=$this->m_crud->edit_data_v2('faq')->result();
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/publikasi/v_faq', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        } 
    }
    
    public function add()
    {
        if (isset($_POST['simpan'])) {
           $pertanyaan=$this->input->post('pertanyaan');
           $jawaban=$this->input->post('jawaban');
            $this->load->library('upload', $config);
           
            $data = array(
                'pertanyaan' => $pertanyaan,
                'jawaban' => $jawaban
            );

            $this->m_crud->insert_data($data,'faq');
            redirect('admin/kemahasiswaan/faq?pesan=berhasil_input');

        }else{
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/publikasi/v_faqInput');
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
    }

    public function edit(){
        if (isset($_POST['update'])) {
           $id_faq=$this->input->post('id');
           $pertanyaan=$this->input->post('pertanyaan');
           $jawaban=$this->input->post('jawaban');
           
            $data = array(
                'pertanyaan' => $pertanyaan,
                'jawaban' => $jawaban
            );

            $where=array('id_faq'=>$id_faq);
            $this->m_crud->update_data($where,$data,'faq');
            redirect('admin/kemahasiswaan/faq?pesan=berhasil_edit');

        }else{
            $where=array('id_faq'=>$this->uri->segment(5));
            $data['faq']=$this->m_crud->edit_data($where,'faq')->row_array();
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/publikasi/v_faqEdit',$data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
    }
    
    public function delete($id){
        $where=array('id_faq'=>$id);
        $this->m_crud->delete_data($where,'faq');
        redirect('admin/kemahasiswaan/faq?pesan=berhasil_hapus');
    }

    public function get_notif(){
        $kegiatan_terbaru=$this->m_crud->edit_data(array('departemen'=>$this->session->userdata('departemen')),'kegiatan')->num_rows();
        $data = array('kegiatan_terbaru'=>$kegiatan_terbaru);
        echo json_encode($data);
    }

 } 
?>