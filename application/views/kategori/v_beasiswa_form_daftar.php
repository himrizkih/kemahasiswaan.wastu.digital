<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kemahasiswaan - Daftar Beasiswa </title>

  <!-- Slider Title -->
  <script language="JavaScript">
  var txt=" Kemahasiswaan - Daftar Beasiswa |";
  var kecepatan=500;var segarkan=null;function bergerak() { document.title=txt;
  txt=txt.substring(1,txt.length)+txt.charAt(0);
  segarkan=setTimeout("bergerak()",kecepatan);}bergerak();
  </script>

  <?php
            error_reporting(0);
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }

        ?>

  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php $this->load->view('layout/v_script');?>
  <?php $this->load->view('layout/v_script_form');?>
  
</head>

<body>

  <?php $this->load->view('layout/v_header_bea');?>

    <!-- ======= Cta Title Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h2><a href="#"><span>|</span>Daftar Beasiswa</a></h2>
            <h3>Sistem Informasi Pelayanan Beasiswa | Kemahasiswaan STT Wastukancana</h3>
          </div>
        </div>

      </div>
    </section>
    <!-- End Cta Title Section -->

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container"  data-aos="zoom-in">

        <ol>
          <li><a href="<?php echo base_url().'beasiswa'?>">Beranda</a></li>
          <li>Daftar-Beasiswa</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

<section id="why-us" class="why-us section-bg">
  <div class="container" data-aos="fade-up">
    
    <section class="section">
      <div class="row">
        
        <div class="col-lg-3">
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">

<!-- ======= Values Section ======= -->
  <section style="margin-bottom: -50px;" id="values" class="values">

<?php
  if(isset($_GET['pesan']))
  { 
    if($_GET['pesan'] == "berhasil_input")
      { 
        echo "<div class='alert alert-success'>Data Pengajuan Beasiswa Berhasil disubmit.</div>"; 
      }else if($_GET['pesan'] == "upload_gagal")
      { 
        echo "<div class='alert alert-danger'>Maaf Data Gagal disubmit! Periksa Kembali Data yang akan disubmit</div>";
        echo "<div class='alert alert-info'>Berkas Persyaratan. Hanya dapat dilampirkan dalam 1 (satu) file PDF.<br/>Selengkapnya lihat ketentuan file pada kolom isian Berkas Persyaratan. Semangaaat!</div>";
      }else if($_GET['pesan'] == "input_duplikat")
      { 
        echo "<div class='alert alert-danger'>Maaf Data Gagal disubmit! Data Telah Terdaftar dalam Jenis Beasiswa yang sama.</div>";
      } else { 
        echo "<div class='alert alert-danger'>Data Gagal disimpan.</div>";
      }
  } 
?>

      <div class="container" data-aos="fade-up">
        <div class="section-title" data-aos="fade-up">
          <h2>Form Pengajuan Beasiswa</h2>
          <p>Untuk Pengajuan Beasiswa, Silahkan Isi dan Lengkapi Data pada Form di bawah ini</p>
        </div>
      </div>
  </section>
<!-- End Values Section -->
        <!-- Multi Columns Form -->
          <form action="<?php echo base_url() ?>beasiswa_daftar/add" class="row g-3" method='post' enctype="multipart/form-data">
            <input hidden="hidden" type="number" class="form-control" name="id_mhs" placeholder="id_mhs" value="<?php echo $this->session->userdata('id_mhs') ?>" required>
            <div class="col-md-12">
              <label class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama_mhs" value="<?php echo $this->session->userdata('nama') ?>" readonly >
            </div>
            <div class="col-md-6">
              <label class="form-label">NIM</label>
              <input type="text" class="form-control" name="nim" value="<?php echo $this->session->userdata('nim') ?>" readonly>
            </div>
            <div class="col-md-6">
              <label class="form-label">Program Studi</label>
              <input type="hidden" class="form-control" name="prodi" value="<?php 
                    if ($this->session->userdata('prodi')=='mhs') {
                      echo 'mhs';
                    }else if ($this->session->userdata('prodi')=='if') {
                      echo 'if';
                    }else if ($this->session->userdata('prodi')=='tm') {
                      echo 'tm';
                    }else if ($this->session->userdata('prodi')=='ti') {
                      echo 'ti';
                    }else if ($this->session->userdata('prodi')=='mi') {
                      echo 'mi';
                    }else if ($this->session->userdata('prodi')=='teks') {
                      echo 'teks';
                    }?>" readonly>
              <input type="text" class="form-control" name="" value="<?php 
                    if ($this->session->userdata('prodi')=='mhs') {
                      echo 'Mahasiswa';
                    }else if ($this->session->userdata('prodi')=='if') {
                      echo 'Teknik Informatika';
                    }else if ($this->session->userdata('prodi')=='tm') {
                      echo 'Teknik Mesin';
                    }else if ($this->session->userdata('prodi')=='ti') {
                      echo 'Teknik Industri';
                    }else if ($this->session->userdata('prodi')=='mi') {
                      echo 'Manajemen Industri';
                    }else if ($this->session->userdata('prodi')=='teks') {
                      echo 'Teknik Tekstil';
                    }?>" readonly>
            </div>
            <div class="col-12">
              <label class="form-label">Beasiswa</label><label style="color: red;">*</label>
                <div class="form-floating mb-3">
                  <select class="form-select" name="nama_bea" required>
                    <option value="">---Silahkan Pilih Jenis Beasiswa yang Tersedia---</option>

                    <?php
                    foreach ($beasiswa->result_array() as $b) :
                      $beasiswa_id=$b['id_beasiswa'];
                      $beasiswa_nama=$b['nama'];
                      $beasiswa_kategori=$b['kategori'];
                      $beasiswa_persyaratan=$b['persyaratan'];
                    ?>
                    <option value="<?php echo $beasiswa_nama;?>"><?php echo $beasiswa_nama;?></option>
                    <?php endforeach;?>
                  </select>
                  <label>Pilih Jenis Beasiswa yang Tersedia</label>
                </div>
                  <!-- <label style="font-size: 14px;" class="form-label">Silahkan lihat detail persyaratan.<a data-toggle="modal" data-target="#ModalDetail<?php echo $beasiswa_id;?>" href=""> Klik disini!</a></label> -->
            </div>

              <input hidden="hidden" type="text" class="form-control" name="kategori" placeholder="kategori" value="<?php echo $beasiswa_kategori;?>" required>
              <input hidden="hidden" type="text" class="form-control" name="tanggal" placeholder="tanggal" value="<?php echo date('d-m-Y');?>" required>
              <input hidden="hidden" type="text" class="form-control" name="status" placeholder="status" value="0" required>
              <input hidden="hidden" type="text" class="form-control" name="status_baca" placeholder="status_baca" value="0" required>

            <div class="col-12">
              <label class="form-label">Nomor HP</label><label style="color: red;">*</label>
              <input type="text" class="form-control" name="nomor_hp" placeholder="Nomor HP" required>
            </div>
            <div class="col-12">
              <label class="form-label">Berkas Persyaratan</label><label style="color: red;">*</label>
                <div class="col-12">
                  <input type="file" class="form-control" name="lampiran" required>
                   <label style="font-size: 12px;" class="form-label">
                    File number limit: 1, Max size : 10MB, file type: PDF<br/></label>
                </div>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" required>
                  <label style="color: red;font-size: 12px;: " class="form-check-label">
                    SAYA MENYATAKAN DENGAN SEBENARNYA DATA YANG SAYA ISI ADALAH BENAR.
                    <br>SEGALA KEKURANGAN DAN KELENGKAPAN DATA ADALAH TANGGUNG JAWAB PENDAFTAR.<br/>
                  </label>
                  <div class="invalid-feedback">
                    You must agree before submitting.
                  </div>
              </div>
            </div>
            <div style="margin-top: 50px; margin-bottom: 30px;" class="text-center">
              <button type="submit" class="btn btn-primary" name="simpan" value="simpan">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- End Multi Columns Form -->

            </div>
          </div>
        </div>

        <div class="col-lg-3">
        </div>

      </div>
    </section>
  
  </div>
</section>

<!-- ======== Modal Detail Persyaratan Beasiswa ======= -->            
<?php
  foreach ($beasiswa->result_array() as $b) :
    $beasiswa_id=$b['id_beasiswa'];
    $beasiswa_nama=$b['nama'];
    $beasiswa_kategori=$b['kategori'];
    $beasiswa_persyaratan=$b['persyaratan'];
?>

  <div class="modal fade" id="ModalDetail<?php echo $beasiswa_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
          <h5 style="float: left;" class="modal-title" id="myModalLabel">Detail Persyaratan Beasiswa</h5>
        </div>

        <form class="form-horizontal" action="<?php echo base_url() ?>beasiswa_daftar/detail" method="post" enctype="multipart/form-data">
          <div class="modal-body">

            <div class="col-12">
              <label class="form-label"><?php echo $beasiswa_persyaratan;?></label>
            </div>

          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach;?>
<!-- ======== Modal Detail Persyaratan Beasiswa ======= -->


<?php $this->load->view('layout/v_footer');?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url().'theme/assets/vendor/aos/aos.js'?>"></script>
  <script src="<?php echo base_url().'theme/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
  <script src="<?php echo base_url().'theme/assets/vendor/glightbox/js/glightbox.min.js'?>"></script>
  <script src="<?php echo base_url().'theme/assets/vendor/isotope-layout/isotope.pkgd.min.js'?>"></script>
  <script src="<?php echo base_url().'theme/assets/vendor/php-email-form/validate.js'?>"></script>
  <script src="<?php echo base_url().'theme/assets/vendor/swiper/swiper-bundle.min.js'?>"></script>
  <script src="<?php echo base_url().'theme/assets/vendor/waypoints/noframework.waypoints.js'?>"></script>

  <!-- Main JS File -->
  <script src="<?php echo base_url().'theme/assets/js/main.js'?>"></script>

  <!-- Vendor JS Files -->
  
  <script src="<?php echo base_url().'theme/assets/vendor/anice-admin/php-email-form/validate.js'?>"></script>
  <script src="<?php echo base_url().'theme/assets/vendor/anice-admin/quill/quill.min.js'?>"></script>
  <script src="<?php echo base_url().'theme/assets/vendor/anice-admin/tinymce/tinymce.min.js'?>"></script>
  <script src="<?php echo base_url().'theme/assets/vendor/anice-admin/simple-datatables/simple-datatables.js'?>"></script>
  <script src="<?php echo base_url().'theme/assets/vendor/anice-admin/chart.js/chart.min.js'?>"></script>
  <script src="<?php echo base_url().'theme/assets/vendor/anice-admin/apexcharts/apexcharts.min.js'?>"></script>
  <script src="<?php echo base_url().'theme/assets/vendor/anice-admin/echarts/echarts.min.js'?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url().'theme/assets/js/main-nice-admin.js'?>"></script>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>theme/assets/vendor/admin/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>theme/assets/vendor/admin/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>