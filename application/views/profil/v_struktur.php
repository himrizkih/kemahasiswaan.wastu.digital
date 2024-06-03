<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kemahasiswaan - Struktur Organisasi</title>

  <!-- Slider Title -->
  <script language="JavaScript">
  var txt=" Kemahasiswaan - Struktur Organisasi |";
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
            <h2><a href="#"><span>|</span>Struktur Organisasi</a></h2>
            <h3>STT. Wastukancana Purwakarta</h3>
          </div>
        </div>

      </div>
    </section><!-- End Cta Title Section -->

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container"  data-aos="zoom-in">

        <ol>
          <li><a href="<?php echo base_url().'beranda'?>">Beranda</a></li>
          <li>Struktur Organisasi</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Cta Title Section ======= -->
    <section id="ctaa" class="ctaa">
      <div class="container" data-aos="zoom-in">

        <div class="container">
          <div class="row">
        <?php
          foreach ($strukturorganisasi->result_array() as $so) :
            $strukturorganisasi_id=$so['id_strukturorganisasi'];
            $strukturorganisasi_gambar=$so['gambar'];
            $strukturorganisasi_tanggal=$so['tanggal'];
        ?>
            
            <div class="col-lg-12 order-1 order-lg-2 hero-img" data-aos="fade-center" data-aos-delay="200">
              <div class="imgs">
                <img src="<?php echo base_url().'theme/assets/img/hero/'.$strukturorganisasi_gambar;?>" alt="Struktur Organisasi">
              </div>
            </div>

          </div>
        </div>

      <?php endforeach;?>
      </div>
    </section><!-- End Cta Title Section -->


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