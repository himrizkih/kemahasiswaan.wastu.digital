<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kemahasiswaan - Beasiswa - FAQ</title>

  <!-- Slider Title -->
  <script language="JavaScript">
  var txt=" Kemahasiswaan - Beasiswa - FAQ |";
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
            <h2><a href="#"><span>|</span>FAQ (Frequently Asked Questions)</a></h2>
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
          <li>Beasiswa-FAQ</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <div style="margin-bottom: -90px;" class="section-title" data-aos="fade-up">
          <h2>FAQ Per Jenis Beasiswa</h2>
          <p>Pertanyaan Umum Seputar Beasiswa</p>
        </div>

      </div>

    </section><!-- End Values Section -->

    <!-- ======= Feature Section ======= -->
    <section id="feature" class="feature">
      <div class="container">

        <div class="row" data-aos="fade-up" data-aos-delay="300">

          <div class="col-lg-3 col-md-4">
            <div class="icon-box">
              <i class="ri-store-line" style="color: #e80368;"></i>
              <h3><a href="<?php echo base_url().'./beasiswa/beasiswa_lokal_faq_detail'?>">Beasiswa Lokal</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #29cc61;"></i>
              <h3><a href="<?php echo base_url().'./beasiswa/beasiswa_wilayah_faq_detail'?>">Beasiswa Wilayah</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
              <h3><a href="<?php echo base_url().'./beasiswa/beasiswa_nasional_faq_detail'?>">Beasiswa Nasional</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
              <h3><a href="<?php echo base_url().'./beasiswa/beasiswa_internasional_faq_detail'?>">Beasiswa Internasional</a></h3>
            </div>
          </div>
          
        </div>

      </div>
    </section><!-- End Features Section -->

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