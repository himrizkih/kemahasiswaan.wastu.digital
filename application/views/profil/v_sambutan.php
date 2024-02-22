<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kemahasiswaan - Sambutan</title>

  <!-- Slider Title -->
  <script language="JavaScript">
  var txt=" Kemahasiswaan - Sambutan |";
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
            <h2><a href="#"><span>|</span>Sambutan</a></h2>
            <h3>KA Staf Kemahasiswaan HUMAS & HUBIN STT Wastukancana</h3>
          </div>
        </div>

      </div>
    </section><!-- End Cta Title Section -->

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container"  data-aos="zoom-in">

        <ol>
          <li><a href="<?php echo base_url().'beranda'?>">Beranda</a></li>
          <li>Sambutan</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Cta Title Section ======= -->
    <section id="ctaa" class="ctaa">
      <div class="container" data-aos="zoom-in">
        <?php
          foreach ($sambutan->result_array() as $s) :
            $sambutan_id=$s['id_sambutan'];
            $sambutan_nama=$s['nama'];
            $sambutan_isi=$s['sambutan'];
            $sambutan_foto=$s['foto'];
            $sambutan_quotes=$s['tanggal'];
        ?>

        <div class="container">
          <div class="row">
            <div class="col-lg-8 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="400">
              <h5><?php echo $sambutan_isi;?></h5>
            </div>
            
            <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
              <center><img src="<?php echo base_url().'theme/assets/img/hero/'.$sambutan_foto;?>" class="img-fluid animated" alt="">
              <h6><?php echo $sambutan_nama;?>
              <br>(Kepala Staf Kemahasiswaan HUMAS & HUBIN)</h6></center>
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