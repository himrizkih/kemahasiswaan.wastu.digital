<?php
 Class Quotes extends CI_Controller {
 
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
            $data['user']=$this->m_crud->edit_data_v2('quotes')->result();
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/beranda/v_quotes', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
    }

    
    public function add()
    {
        if (isset($_POST['simpan'])) {
           $nama=$this->input->post('nama');
           $status=$this->input->post('status');
           $quotes=$this->input->post('quotes');
            $this->load->library('upload', $config);
           
            $data = array(
                'nama' => $nama,
                'status' => $status,
                'quotes' => $quotes
            );

            $this->m_crud->insert_data($data,'quotes');
            redirect('admin/kemahasiswaan/beranda/quotes?pesan=berhasil_input');

        }else{
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/beranda/v_quotesInput');
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
    }

    public function edit(){
        if (isset($_POST['update'])) {
           $id_quotes=$this->input->post('id');
           $nama=$this->input->post('nama');
           $status=$this->input->post('status');
           $quotes=$this->input->post('quotes');
           
            $data = array(
                'nama' => $nama,
                'status' => $status,
                'quotes' => $quotes
            );

            $where=array('id_quotes'=>$id_quotes);
            $this->m_crud->update_data($where,$data,'quotes');
            redirect('admin/kemahasiswaan/beranda/quotes?pesan=berhasil_edit');

        }else{
            $where=array('id_quotes'=>$this->uri->segment(6));
            $data['quotes']=$this->m_crud->edit_data($where,'quotes')->row_array();
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/kemahasiswaan/beranda/v_quotesEdit',$data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
    }
    
    public function delete($id){
        $where=array('id_quotes'=>$id);
        $this->m_crud->delete_data($where,'quotes');
        redirect('admin/kemahasiswaan/beranda/quotes?pesan=berhasil_hapus');
    }

    public function get_notif(){
        $kegiatan_terbaru=$this->m_crud->edit_data(array('departemen'=>$this->session->userdata('departemen')),'kegiatan')->num_rows();
        $data = array('kegiatan_terbaru'=>$kegiatan_terbaru);
        echo json_encode($data);
    }

 }
?>