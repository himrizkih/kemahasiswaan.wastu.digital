<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Kemahasiswaan - Beasiswa - Penerima</title>

  <!-- Slider Title -->
  <script language="JavaScript">
  var txt=" Kemahasiswaan - Beasiswa - Penerima |";
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

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>theme/assets/css/sb-admin.css" rel="stylesheet">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url() ?>theme/assets/vendor/admin/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <?php $this->load->view('layout/v_script');?>

</head>

<body>

  <?php $this->load->view('layout/v_header_bea');?>

    <!-- ======= Ctas Title Section ======= -->
    <section id="ctas" class="ctas">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h2><a href="#"><span>|</span>Penerima Beasiswa</a></h2>
            <h3>Sistem Informasi Pelayanan Beasiswa | Kemahasiswaan STT Wastukancana</h3>
          </div>
        </div>

      </div>
    </section>
    <!-- End Ctas Title Section -->

    <!-- ======= Breadcrumbsa ======= -->
    <section id="breadcrumbsa" class="breadcrumbsa">
      <div class="container"  data-aos="zoom-in">

        <ol>
          <li><a href="<?php echo base_url().'beasiswa'?>">Beranda</a></li>
          <li>Beasiswa-Penerima</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->
    
    <!-- ======= Penerima Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Daftar Penerima Beasiswa</h2>
          <p>Berikut Detail dari Daftar Final Penerima Beasiswa</p>
        </div>

    <div class="col-xl-12 col-sm-12 mb-3">
      <div class="card">
    
        <div style="margin-bottom: 20px; font-weight: bold; font-size: 16px;" class="card-header">
          <center><strong>Tabel Data Penerima Beasiswa</strong></center>
        </div>
          
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="10" border="2">
              <thead>
               <tr style="text-align:center;">
                <th scope="col">No</th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">NIM</th>
                <th scope="col">Program Studi</th>
                <th scope="col">Jenis Beasiswa</th>
               </tr>
              </thead>
            <tbody>
              <?php
                $no=1;
                foreach ($pendaftar->result_array() as $b) :
                  $pendaftar_id=$b['id_pendaftar'];
                  $pendaftar_id=$b['id_mhs'];
                  $pendaftar_nama_mhs=$b['nama_mhs'];
                  $pendaftar_nim=$b['nim'];
                  $pendaftar_prodi=$b['prodi'];
                  $pendaftar_nomor_hp=$b['nomor_hp'];
                  $pendaftar_status=$b['status'];
                  $pendaftar_status_baca=$b['status_baca'];
                  $pendaftar_nama_bea=$b['nama_bea'];
                  $pendaftar_kategori=$b['kategori'];
                  $pendaftar_tanggal=$b['tanggal'];
              ?>
              <tr style="text-align:center;">
                <td><?php echo $no++;?></td>
                <td><?php echo $pendaftar_nama_mhs;?></td>
                <td><?php echo $pendaftar_nim;?></td>
                <td><?php 
                      if ($pendaftar_prodi=='') {
                        echo '<span class="badge badge-danger">Perlu diinput Prodi Mahasiswa</span>';
                      }else if ($pendaftar_prodi=='mhs') {
                        echo 'Mahasiswa';
                      }else if ($pendaftar_prodi=='if') {
                        echo 'Teknik Informatika';
                      }else if ($pendaftar_prodi=='tm') {
                        echo 'Teknik Mesin';
                      }else if ($pendaftar_prodi=='ti') {
                        echo 'Teknik Industri';
                      }else if ($pendaftar_prodi=='mi') {
                        echo 'Manajemen Industri';
                      }else if ($pendaftar_prodi=='teks') {
                        echo 'Teknik Tekstil';
                      }
                    ?>
                </td>
                <td><?php echo $pendaftar_nama_bea?></td>
              </tr>
              <?php endforeach;?>
            </tbody>
            </table>
          </div>
        </div>

      </div>
    </div><!-- ======= End Penerima Section ======= -->
  
  </div>
</section>


    <!-- ======= Testimonials Section ======= -->
    <div id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper-container">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?php echo base_url().'theme/assets/img/quotes/quotes-1.png'?>" class="testimonial-img" alt="">
                <h3>Nama
                <h4>Mahasiswa</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Testimonials.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?php echo base_url().'theme/assets/img/quotes/quotes-1.png'?>" class="testimonial-img" alt="">
                <h3>Nama
                <h4>Mahasiswa</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Testimonials.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <!-- <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g> -->
    </svg>

    </div><!-- End Testimonials Section -->


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


  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>theme/assets/vendor/admin/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>theme/assets/vendor/admin/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>theme/assets/vendor/admin/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url() ?>theme/assets/vendor/admin/chart.js/Chart.min.js"></script>
  <script src="<?php echo base_url() ?>theme/assets/vendor/admin/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo base_url() ?>theme/assets/vendor/admin/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>theme/assets/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url() ?>theme/assets/js/demo/datatables-demo.js"></script>
  <script src="<?php echo base_url() ?>theme/assets/js/demo/chart-area-demo.js"></script>

</body>

</html>