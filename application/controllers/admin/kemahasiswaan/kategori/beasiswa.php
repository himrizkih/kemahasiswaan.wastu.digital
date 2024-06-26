<?php
 Class Beasiswa extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('m_crud');
        $this->load->library('upload');
        date_default_timezone_set('Asia/Jakarta');
    }
 
    function index() {
        if ($this->session->userdata('masuk')!=1) {
             redirect('admin/kemahasiswaan/masuk_bea_dsn?pesan=belumlogin','refresh');
         }
        if (
        $this->session->userdata('status')=='kmhs') {
            $data['user']=$this->m_crud->edit_data_v2('beasiswa')->result();
            $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
            $this->load->view('admin/kemahasiswaan/kategori/v_beasiswa', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
    }

    
    public function add()
    {
        if (isset($_POST['simpan'])) {
           $nama=$this->input->post('nama');
           $persyaratan=$this->input->post('persyaratan');
           $deskripsi=$this->input->post('deskripsi');
           $keunggulan=$this->input->post('keunggulan');
           $tanggal_penting=$this->input->post('tanggal_penting');
           $kategori=$this->input->post('kategori');
           $status=$this->input->post('status');
           $link_pendaftaran=$this->input->post('link_pendaftaran');

           $kuota_mhs=$this->input->post('kuota_mhs');
           $kuota_if=$this->input->post('kuota_if');
           $kuota_tm=$this->input->post('kuota_tm');
           $kuota_ti=$this->input->post('kuota_ti');
           $kuota_mi=$this->input->post('kuota_mi');
           $kuota_teks=$this->input->post('kuota_teks');

           $string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $nama);
           $trim     = trim($string);
           $pre_slug     = strtolower(str_replace(" ", "-", $trim));
           $beasiswa_slug=$pre_slug.'.html';

           $gambar = $_FILES['gambar'];
           if ($gambar=''){}else{
            $config['upload_path'] = './theme/assets/img/beasiswa';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
                $config['overwrite']        = TRUE;
                $config['max_size']         = 10240; //10MB

                // $config['create_thumb']= FALSE;
                // $config['maintain_ratio']= FALSE;
                // $config['quality']= '90%';
                // $config['width']= 1920;
                // $config['height']= 930;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            if(!$this->upload->do_upload('gambar')){
                redirect('admin/kemahasiswaan/kategori/beasiswa?pesan=upload_gagal'); die;
            } else {
                $gambar = $this->upload->data('file_name');
            }
           }
           
            $data = array(
                'nama' =>$nama,
                'persyaratan' =>$persyaratan,
                'deskripsi' =>$deskripsi,
                'keunggulan' =>$keunggulan,
                'tanggal_penting' =>$tanggal_penting,
                'kategori' =>$kategori,
                'status' =>$status,
                'link_pendaftaran' =>$link_pendaftaran,
                'gambar' =>$gambar,
                'beasiswa_slug' =>$beasiswa_slug,

                'kuota_mhs' =>$kuota_mhs,
                'kuota_if' =>$kuota_if,
                'kuota_tm' =>$kuota_tm,
                'kuota_ti' =>$kuota_ti,
                'kuota_mi' =>$kuota_mi,
                'kuota_teks' =>$kuota_teks

            );
            $this->m_crud->insert_data($data,'beasiswa');
            redirect('admin/kemahasiswaan/kategori/beasiswa?pesan=berhasil_input');
            
        }else{
            $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
            $this->load->view('admin/kemahasiswaan/kategori/v_beasiswaInput');
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
    }

    public function edit()
    {
        if (isset($_POST['update'])) {
           $id_beasiswa=$this->input->post('id');
           $nama=$this->input->post('nama');
           $persyaratan=$this->input->post('persyaratan');
           $deskripsi=$this->input->post('deskripsi');
           $keunggulan=$this->input->post('keunggulan');
           $tanggal_penting=$this->input->post('tanggal_penting');
           $kategori=$this->input->post('kategori');
           $status=$this->input->post('status');
           $link_pendaftaran=$this->input->post('link_pendaftaran');

           $kuota_mhs=$this->input->post('kuota_mhs');
           $kuota_if=$this->input->post('kuota_if');
           $kuota_tm=$this->input->post('kuota_tm');
           $kuota_ti=$this->input->post('kuota_ti');
           $kuota_mi=$this->input->post('kuota_mi');
           $kuota_teks=$this->input->post('kuota_teks');

           $string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $nama);
           $trim     = trim($string);
           $pre_slug     = strtolower(str_replace(" ", "-", $trim));
           $beasiswa_slug=$pre_slug.'.html';

           $gambar = $_FILES['gambar'];
           if ($gambar=''){}else{
            $config['upload_path'] = './theme/assets/img/beasiswa';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
                $config['overwrite']        = TRUE;
                $config['max_size']         = 10240; //10MB

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            if(!$this->upload->do_upload('gambar')){
                redirect('admin/kemahasiswaan/kategori/beasiswa?pesan=upload_gagal'); die;
            } else {
                $gambar = $this->upload->data('file_name');
            }
           }
            $data = array(
                'nama' =>$nama,
                'persyaratan' =>$persyaratan,
                'deskripsi' =>$deskripsi,
                'keunggulan' =>$keunggulan,
                'tanggal_penting' =>$tanggal_penting,
                'kategori' =>$kategori,
                'status' =>$status,
                'link_pendaftaran' =>$link_pendaftaran,
                'gambar' =>$gambar,
                'beasiswa_slug' =>$beasiswa_slug,

                'kuota_mhs' =>$kuota_mhs,
                'kuota_if' =>$kuota_if,
                'kuota_tm' =>$kuota_tm,
                'kuota_ti' =>$kuota_ti,
                'kuota_mi' =>$kuota_mi,
                'kuota_teks' =>$kuota_teks

            );
             $where=array('id_beasiswa'=>$id_beasiswa);
             $this->m_crud->update_data($where,$data,'beasiswa');     
             redirect('admin/kemahasiswaan/kategori/beasiswa?pesan=berhasil_edit');
        }else{
            $where=array('id_beasiswa'=>$this->uri->segment(6));
            $data['beasiswa']=$this->m_crud->edit_data($where,'beasiswa')->row_array();
            $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
            $this->load->view('admin/kemahasiswaan/kategori/v_beasiswaEdit',$data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        }
    }

    public function delete($id){
        $where=array('id_beasiswa'=>$id);
        // $gambar=$this->input->post('gambar');
        // $path='theme/assets/img/beasiswa'.$beasiswa['gambar'];
        // unlink($path);
        $this->m_crud->delete_data($where,'beasiswa');
        redirect('admin/kemahasiswaan/kategori/beasiswa?pesan=berhasil_hapus');
    }

    public function get_notif(){
        $kegiatan_terbaru=$this->m_crud->edit_data(array('departemen'=>$this->session->userdata('departemen')),'kegiatan')->num_rows();
        $data = array('kegiatan_terbaru'=>$kegiatan_terbaru);
        echo json_encode($data);
    }

 }
?>