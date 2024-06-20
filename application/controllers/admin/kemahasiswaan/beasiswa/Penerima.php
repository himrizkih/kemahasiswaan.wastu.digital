<?php

// Load library phpspreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

 Class penerima extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('m_crud');
        $this->load->model('m_post');
        date_default_timezone_set('Asia/Jakarta');
        
    }

    function index() {
        if ($this->session->userdata('masuk')!=1) {   
            redirect('admin/kemahasiswaan/masuk_bea_dsn?pesan=belumlogin','refresh');  
        }
        if($this->session->userdata('status')=='kmhs') {
            $data['user']=$this->m_post->get_data_penerima()->result();
            // $data['beasiswa']=$this->m_post->get_data_beasiswa();
            $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
            $this->load->view('admin/kemahasiswaan/beasiswa/v_penerima', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');
        // }
        }elseif($this->session->userdata('status')=='if'){
            $data['user']=$this->m_post->get_data_penerima_prodi_if(array('prodi'=>'if'),'pendaftar')->result();
            $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
            $this->load->view('admin/kemahasiswaan/beasiswa/v_penerima', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');

        }elseif($this->session->userdata('status')=='tm'){
            $data['user']=$this->m_post->get_data_penerima_prodi_tm(array('prodi'=>'tm'),'pendaftar')->result();
            $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
            $this->load->view('admin/kemahasiswaan/beasiswa/v_penerima', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');

        }elseif($this->session->userdata('status')=='ti'){
            $data['user']=$this->m_post->get_data_penerima_prodi_ti(array('prodi'=>'ti'),'pendaftar')->result();
            $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
            $this->load->view('admin/kemahasiswaan/beasiswa/v_penerima', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');

        }elseif($this->session->userdata('status')=='mi'){
            $data['user']=$this->m_post->get_data_penerima_prodi_mi(array('prodi'=>'mi'),'pendaftar')->result();
            $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
            $this->load->view('admin/kemahasiswaan/beasiswa/v_penerima', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');

        }elseif($this->session->userdata('status')=='teks'){
            $data['user']=$this->m_post->get_data_penerima_prodi_teks(array('prodi'=>'teks'),'pendaftar')->result();
            $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
            $this->load->view('admin/kemahasiswaan/beasiswa/v_penerima', $data);
            $this->load->view('admin/kemahasiswaan/v_footer');

        }
        
    }

   	public function excel(){
        $data=$this->m_post->get_data_penerima()->result();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nama Mahasiswa');
        $sheet->setCellValue('C1', 'NIM');
        $sheet->setCellValue('D1', 'Program Studi');
        $sheet->setCellValue('E1', 'Beasiswa');
        $sheet->setCellValue('F1', 'Tanggal Pengajuan');
        $sheet->setCellValue('G1', 'Nomor HP');
        // $sheet->setCellValue('H1', 'status');

        $column = 2;
        foreach($data as $d) {
            $sheet->setCellValue('A'.$column, ($column-1));
            $sheet->setCellValue('B'.$column, $d->nama_mhs);
            $sheet->setCellValue('c'.$column, $d->nim);
            $sheet->setCellValue('D'.$column, $d->prodi);

            // $sheet->setCellValue('D'.$column,
                
            //  if ($d->prodi=='') {
            //         echo '<span class="badge badge-danger">Perlu diinput Prodi Mahasiswa</span>';
            //     }else if ($d->prodi=='mhs') {
            //         echo 'Mahasiswa';
            //     }else if ($d->prodi=='if') {
            //         echo 'Teknik Informatika';
            //     }else if ($d->prodi=='tm') {
            //         echo 'Teknik Mesin';
            //     }else if ($d->prodi=='ti') {
            //         echo 'Teknik Industri';
            //     }else if ($d->prodi=='mi') {
            //         echo 'Manajemen Industri';
            //     }else if ($d->prodi=='teks') {
            //         echo 'Teknik Tekstil';
            //     }
            // );
            $sheet->setCellValue('E'.$column, $d->nama_bea);
            $sheet->setCellValue('F'.$column, $d->tanggal);
            $sheet->setCellValue('G'.$column, $d->nomor_hp);
            // $sheet->setCellValue('H'.$column, $d->status
                // if ($d->status==0) {
                //     echo '<span class="badge badge-secondary">Menunggu Persetujuan<br/> Kaprodi</span>';
                // }else if ($d->status==1) {
                //     echo '<span class="badge badge-warning">Proses Seleksi</span>';
                // }elseif ($d->status==2) {
                //     echo '<span class="badge badge-success">Disetujui Kaprodi</span>';
                // }elseif ($d->status==3) {
                //     echo '<span class="badge badge-danger">Ditolak</span>';
                // }
            // );
            $column++;
        }

        $sheet->getStyle('A1:G1')->getFont()->setBold(true);
        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => 'FF000000'],
                ],
            ],
        ];
        $sheet->getStyle('A1:G'.($column-1))->applyFromArray($styleArray);

        $sheet->getColumnDimension('A')->setAutoSize(true);
        $sheet->getColumnDimension('B')->setAutoSize(true);
        $sheet->getColumnDimension('C')->setAutoSize(true);
        $sheet->getColumnDimension('D')->setAutoSize(true);
        $sheet->getColumnDimension('E')->setAutoSize(true);
        $sheet->getColumnDimension('F')->setAutoSize(true);
        $sheet->getColumnDimension('G')->setAutoSize(true);
        // $sheet->getColumnDimension('H')->setAutoSize(true);

        $data['user']=$this->m_post->get_data_penerima()->result();
        $this->load->view('admin/kemahasiswaan/beasiswa/v_header_dsn');
        $this->load->view('admin/kemahasiswaan/beasiswa/v_penerima', $data);
        $this->load->view('admin/kemahasiswaan/v_footer');

        $writer = new Xlsx($spreadsheet);
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment; filename="Data Penerima Beasiswa.xlsx"');
            header('Cache-Control: max-age=0');
        $writer->save('php://output');
        exit();
    }

} 
?>