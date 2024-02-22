<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kemahasiswaan - Pengguna</title>

  <!-- Slider Title -->
  <script language="JavaScript">
  var txt=" Kemahasiswaan - Ormawa |";
  var kecepatan=500;var segarkan=null;function bergerak() { document.title=txt;
  txt=txt.substring(1,txt.length)+txt.charAt(0);
  segarkan=setTimeout("bergerak()",kecepatan);}bergerak();
  </script>

  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php $this->load->view('layout/v_script');?>
  
</head>

<body>

  <?php $this->load->view('layout/v_header');?>

    <!-- ======= Cta Title Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h2><a href="#"><span>|</span>Pengguna</a></h2>
            <h3>Sistem Informasi Kemahasiswaan STT Wastukancana</h3>
          </div>
        </div>

      </div>
    </section><!-- End Cta Title Section -->

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container"  data-aos="zoom-in">

        <ol>
          <li><a href="<?php echo base_url().'beranda'?>">Beranda</a></li>
          <li>Pengguna</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
     <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-box maroon">
              <i class="ri-admin-line icon"></i>
              <h3>Ketua STT Wastukancana</h3>
              <p> 
              </p>
              <a href="<?php echo base_url().'./administrator'?>" class="read-more"><span>Masuk Sebagai 
                <br>Ketua STT Wastukancana </span> <i class="bi bi-box-arrow-in-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box blue">
              <i class="ri-admin-line icon"></i>
              <h3>Kemahasiswaan</h3>
              <p> 
              </p>
              <a href="<?php echo base_url().'./administrator'?>" class="read-more"><span>Masuk Sebagai 
                <br>Kemahasiswaan </span> <i class="bi bi-box-arrow-in-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box gold">
              <i class="ri-admin-line icon"></i>
              <h3>Ketua Program Studi</h3>
              <p> 
              </p>
              <a href="<?php echo base_url().'./administrator'?>" class="read-more"><span>Masuk Sebagai 
                <br>Ketua Program Studi </span> <i class="bi bi-box-arrow-in-right"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6">
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box crimson">
              <i class="ri-admin-line icon"></i>
              <h3>Majelis Permusyawaratan Mahasiswa</h3>
              <p> 
              </p>
              <a href="<?php echo base_url().'./administrator'?>" class="read-more"><span>Masuk Sebagai
                <br>Majelis Permusyawaratan Mahasiswa </span><i class="bi bi-box-arrow-in-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="900">
            <div class="service-box orange">
              <i class="ri-admin-line icon"></i>
              <h3>Badan Eksekutif Mahasiswa</h3>
              <p> 
              </p>
              <a href="<?php echo base_url().'./administrator'?>" class="read-more"><span>Masuk Sebagai
                <br>Badan Eksekutif Mahasiswa </span><i class="bi bi-box-arrow-in-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-md-6">
          </div>

          <div class="col-lg-2 col-md-6">
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="1100">
            <div class="service-box purple">
              <i class="ri-admin-line icon"></i>
              <h3>Himpunan Mahasiswa</h3>
              <p> 
              </p>
              <a href="<?php echo base_url().'./administrator'?>" class="read-more"><span>Masuk Sebagai 
                <br>Himpunan Mahasiswa </span> <i class="bi bi-box-arrow-in-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="1300">
            <div class="service-box palegreen">
              <i class="ri-admin-line icon"></i>
              <h3>Unit Kegiatan Mahasiswa</h3>
              <p> 
              </p>
              <a href="<?php echo base_url().'./administrator'?>" class="read-more"><span>Masuk Sebagai 
                <br>Unit Kegiatan Mahasiswa </span> <i class="bi bi-box-arrow-in-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-md-6">
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->
  </div>
</section>

  <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <?php echo date('Y')?> | <strong>Bagian Kemahasiswaan - STT Wastukancana Purwakarta</strong>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

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

</body>

</html>