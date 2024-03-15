<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kemahasiswaan - Visi-Misi</title>

  <!-- Slider Title -->
  <script language="JavaScript">
  var txt=" Kemahasiswaan - Visi-Misi |";
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
            <h2><a href="#"><span>|</span>Visi-Misi</a></h2>
            <h3>Bidang Kemahasiswaan HUMAS & HUBIN STT Wastukancana</h3>
          </div>
        </div>

      </div>
    </section><!-- End Cta Title Section -->

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container"  data-aos="zoom-in">

        <ol>
          <li><a href="<?php echo base_url().'beranda'?>">Beranda</a></li>
          <li>Visi-Misi</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

   <!-- ======= Cta Title Section ======= -->
    <section id="ctaa" class="ctaa">
      <div class="container" data-aos="zoom-in">

        <!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">
          <div class="col-lg-1">
          </div>
          <div class="col-lg-4">
            <center><img style="margin-top: 50px;" src="<?php echo base_url().'theme/assets/img/hero/logo-navbar.png'?>" class="img-fluid" alt=""></center>
          </div>

        <?php
          foreach ($visimisi->result_array() as $vs) :
            $visimisi_id=$vs['id_visimisi'];
            $visimisi_visi=$vs['visi'];
            $visimisi_misi=$vs['misi'];
            $visimisi_tanggal=$vs['tanggal'];
        ?>

          <div class="col-lg-6">
            <h3>Visi dan Misi
              <br>Bidang Kemahasiswaan HUMAS & HUBIN 
              <br>STT Wastukancana</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Visi</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab2">Misi</a>
              </li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">
                <p>Deskripsi Visi</p>
                <div class="d-flex align-items-center mb-2">
                  <!-- <i class="bi bi-check2"></i> -->
                  <h4><?php echo $visimisi_visi;?></h4>
                </div>
              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade show" id="tab2">
                <p>Deskripsi Misi</p>
                <div class="d-flex align-items-center mb-2">
                  <!-- <i class="bi bi-check2"></i> -->
                  <h4><?php echo $visimisi_misi;?></h4>
                </div>
              </div><!-- End Tab 2 Content -->

            </div>

          <?php endforeach;?>
          </div>
          <div class="col-lg-1">
          </div>

        </div><!-- End Feature Tabs -->

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