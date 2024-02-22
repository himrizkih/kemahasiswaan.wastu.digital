<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kemahasiswaan - Beasiswa</title>

  <!-- Slider Title -->
  <script language="JavaScript">
  var txt=" Kemahasiswaan - Beasiswa |";
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
  
</head>

<body>

  <?php $this->load->view('layout/v_header_bea');?>

    <!-- ======= Cta Title Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h2><a href="#"><span>|</span>Beasiswa</a></h2>
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
          <li>Beasiswa-Masuk</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <div style="margin-bottom: -40px;" class="section-title" data-aos="fade-up">
          <h2>Masuk<br>Sistem Informasi Pelayanan Beasiswa</h2>
        </div>

      </div>

    </section><!-- End Values Section -->

    <!-- ======= Services Section ======= -->
     <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <!-- <div class="col-lg-2 col-md-6">
          </div> -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box blue">
              <i class="ri-admin-line icon"></i>
              <h3>Kemahasiswaan</h3>
              <p> 
              </p>
              <a href="<?php echo base_url().'./login'?>" class="read-more"><span>Masuk Sebagai 
                <br>Kemahasiswaan </span> <i class="bi bi-box-arrow-in-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box orange">
              <i class="ri-admin-line icon"></i>
              <h3>Ketua Program Studi</h3>
              <p> 
              </p>
              <a href="<?php echo base_url().'./login'?>" class="read-more"><span>Masuk Sebagai 
                <br>Ketua Program Studi </span> <i class="bi bi-box-arrow-in-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box gold">
              <i class="ri-admin-line icon"></i>
              <h3>Mahasiswa</h3>
              <p> 
              </p>
              <a href="<?php echo base_url().'./masuk'?>" class="read-more"><span>Masuk Sebagai
                <br>Mahasiswa</span><i class="bi bi-box-arrow-in-right"></i></a>
            </div>
          </div>
          <!-- <div class="col-lg-2 col-md-6">
          </div> -->

          <!-- <div class="col-lg-4 col-md-6">
          </div> -->
          <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box gold">
              <i class="ri-admin-line icon"></i>
              <h3>Mahasiswa</h3>
              <p> 
              </p>
              <a href="<?php echo base_url().'./masuk'?>" class="read-more"><span>Masuk Sebagai
                <br>Mahasiswa</span><i class="bi bi-box-arrow-in-right"></i></a>
            </div>
          </div> -->
          <!-- <div class="col-lg-4 col-md-6">
          </div> -->

        </div>

      </div>

    </section><!-- End Services Section -->
  </div>
</section>

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


</body>

</html>