<?php
 Class User extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('m_crud');
    }
 
    function index() {
        if ($this->session->userdata('masuk')!=1) {   
            redirect('login?pesan=belumlogin','refresh');  
        }
        $data['user']=$this->m_crud->edit_data_v2('user')->result();
        $this->load->view('admin/kemahasiswaan/v_header');
        $this->load->view('admin/user/v_user', $data);
        $this->load->view('admin/kemahasiswaan/v_footer');
    }

    public function add()
    {
        if (isset($_POST['simpan'])) {
           $nama=$this->input->post('nama');
           $alamat=$this->input->post('alamat');
           $departemen=$this->input->post('departemen');
           $organisasi=$this->input->post('organisasi');
           $keterangan=$this->input->post('keterangan');
           $email=$this->input->post('email');
           $username=$this->input->post('username');
           $password=$this->input->post('password');

        //    $foto = $_FILES['foto'];
        //    if ($foto=''){}else{
        //     $config['upload_path'] = './upload/images/';
        //     $config['allowed_types'] = 'png';
        //     $this->load->library('upload', $config);
        //     if(!$this->upload->do_upload('foto')){
        //         echo "Upload Gagal"; die();
        //     } else {
        //         $foto = $this->upload->data('file_name');
        //     }
        //    }

            $data = array(
                'nama'=>$nama,
                'alamat'=>$alamat,
                'departemen'=>$departemen,
                'organisasi'=>$organisasi,
                'keterangan'=>$keterangan,
                'email'=>$email,
                'username'=>$username,
                'password'=>md5($password),
                // 'foto'=>$foto['name']
            );

            $this->m_crud->insert_data($data,'user');
            redirect('admin/user?pesan=berhasil_input');
            
        } else {
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/user/v_inputUser');
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
    }

    public function edit(){
        if (isset($_POST['update'])) {
            $id_user=$this->input->post('id');
            $nama=$this->input->post('nama');
            $alamat=$this->input->post('alamat');
            $departemen=$this->input->post('departemen');
            $organisasi=$this->input->post('organisasi');
            $keterangan=$this->input->post('keterangan');
            $email=$this->input->post('email');
            $username=$this->input->post('username');
            $password=$this->input->post('password');

        //     $foto = $_FILES['foto'];
        //     if ($foto=''){}else{
        //     $config['upload_path'] = './upload/images/';
        //     $config['allowed_types'] = 'png';
        //     $this->load->library('upload', $config);
        //     if(!$this->upload->do_upload('foto')){
        //         echo "Upload Gagal"; die();
        //     } else {
        //         $foto = $this->upload->data('file_name');
        //     }
        //    }
            
             $data = array(
                'nama'=>$nama,
                'alamat'=>$alamat,
                'departemen'=>$departemen,
                'organisasi'=>$organisasi,
                'keterangan'=>$keterangan,
                'email'=>$email,
                'username'=>$username,
                'password'=>md5($password),
                // 'foto'=>$foto['name']
             );

             $where=array('id_user'=>$id_user);
             $this->m_crud->update_data($where,$data,'user');
             redirect('admin/user?pesan=berhasil_edit');
        } else {
            $where=array('id_user'=>$this->uri->segment(4));
            $data['user']=$this->m_crud->edit_data($where,'user')->row_array();
            $this->load->view('admin/kemahasiswaan/v_header');
            $this->load->view('admin/user/v_editUser',$data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
    }
    
    public function delete($id) {
        $where=array('id_user'=>$id);
        $this->m_crud->delete_data($where,'user');
        redirect('admin/user?pesan=berhasil_hapus');
    }
 } 
?>