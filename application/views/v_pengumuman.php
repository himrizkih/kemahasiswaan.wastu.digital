<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kemahasiswaan - Pengumuman</title>

  <!-- Slider Title -->
  <script language="JavaScript">
  var txt=" Kemahasiswaan - Pengumuman |";
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

    <!-- ======= Cta Title Section-//1266 ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h2><a href="#"><span>|</span>Pengumuman</a></h2>
            <h3>Kemahasiswaan STT Wastukancana</h3>
          </div>
        </div>

      </div>
    </section>
    <!-- End Cta Title Section -->

    <!-- Breadcrumbs-//1325 -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container"  data-aos="zoom-in">

        <ol>
          <li><a href="<?php echo base_url().'beranda'?>">Beranda</a></li>
          <li>Pengumuman</li>
        </ol>
        <br>

        <div class="col-lg-12 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">
              <?php
                $no=" ";
                setlocale(LC_TIME, 'ind.UTF-8');
                foreach ($pengumuman->result_array() as $p) :
                  $pengumuman_id=$p['id_pengumuman'];
                  $pengumuman_pengumuman=$p['pengumuman'];
                  $pengumuman_status=$p['status'];
                  $pengumuman_tanggal=$p['tanggal'];
                  $date = new DateTime($pengumuman_tanggal);
                  $formatted_date = strftime("%A, %d %B %Y", $date->getTimestamp());
              ?>

              <div class="col-md-4" data-aos="zoom-out" data-aos-delay="200"><?php echo $no++;?>
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-megaphone-fill"></i>
                  <h3><?php echo ucfirst($formatted_date);?><br>
                  <?php echo $pengumuman_pengumuman;?></h3>
                </div>
              </div>

              <?php endforeach;?>
            </div>
          </div>


      </div>
    </section>
    <!-- End Breadcrumbs -->

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