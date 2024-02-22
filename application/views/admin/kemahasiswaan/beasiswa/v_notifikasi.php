<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
<style type="text/css">
/*--------------------------------------------------------------
# F.A.Q.
--------------------------------------------------------------*/
.faqq .faqq-item {
  margin: 20px 0;
  padding: 20px 0;
  border-bottom: 1px solid #eeeeee;
}

.faqq .faqq-item i {
  color: #8bc4ea;
  font-size: 24px;
  float: left;
  line-height: 0;
  padding: 13px 0 0 0;
  margin: 0;
}

.faqq .faqq-item h4 {
  font-size: 16px;
  line-height: 26px;
  font-weight: 500;
  margin: 0 0 10px 32px;
  font-family: "Poppins", sans-serif;
}

.faqq .faqq-item p {
  font-size: 15px;
}
</style>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kemahasiswaan - Beasiswa - Notifikasi</title>

  <!-- Slider Title -->
  <script language="JavaScript">
  var txt=" Kemahasiswaan - Beasiswa - Notifikasi |";
  var kecepatan=500;var segarkan=null;function bergerak() { document.title=txt;
  txt=txt.substring(1,txt.length)+txt.charAt(0);
  segarkan=setTimeout("bergerak()",kecepatan);}bergerak();
  </script>

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
          <div class="col-lg-12 text-center text-lg-start">
            <h2><a href="#"><span>|</span>Notifikasi</a></h2>
            <h3>Beasiswa | Kemahasiswaan STT Wastukancana</h3>
          </div>
        </div>

      </div>
    </section><!-- End Cta Title Section -->

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container"  data-aos="zoom-in">

        <ol>
          <li><a href="<?php echo base_url().'beasiswa'?>">Beranda</a></li>
          <li>Notifikasi</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= F.A.Q. Section ======= -->
    <section id="faqq" class="faqq">
      <div class="container">

        <div class="row faqq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <i class="ri-notification-3-fill"></i>
            <h4>Notifikasi 1</h4>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faqq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-5">
            <i class="ri-notification-3-fill"></i>
            <h4>Notifikasi 2</h4>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faqq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-5">
            <i class="ri-notification-3-fill"></i>
            <h4>Notifikasi 3</h4>
          </div>
        </div><!-- End F.A.Q Item-->

      </div>
    </section><!-- End F.A.Q Section -->

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