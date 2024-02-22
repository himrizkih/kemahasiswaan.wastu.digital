<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kemahasiswaan - Beasiswa - Wilayah</title>

  <!-- Slider Title -->
  <script language="JavaScript">
  var txt=" Kemahasiswaan - Beasiswa - Wilayah |";
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
            <h2><a href="#"><span>|</span>Beasiswa Wilayah</a></h2>
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
          <li>Beasiswa-Wilayah</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <div class="section-title" data-aos="fade-up">
          <h2>Beasiswa Wilayah</h2>
        </div>

        <div class="row">
          <?php
            foreach ($beasiswa->result_array() as $b) :
              $beasiswa_id=$b['id_beasiswa'];
              $beasiswa_nama=$b['nama'];
              $beasiswa_persyaratan=$b['persyaratan'];
              $beasiswa_deskripsi=$b['deskripsi'];
              $beasiswa_keunggulan=$b['keunggulan'];
              $beasiswa_tanggal_penting=$b['tanggal_penting'];
              $beasiswa_kategori=$b['kategori'];
              $beasiswa_link_pendaftaran=$b['link_pendaftaran'];
              $beasiswa_gambar=$b['gambar'];
              $beasiswa_status=$b['status'];
              $beasiswa_slug=$b['beasiswa_slug'];
          ?>

          <div class="col-lg-4">
            <div class="box" data-aos="fade-up" data-aos-delay="200">
              <a href="<?php echo base_url().'beasiswa_detail/'.$beasiswa_slug;?>"><img src="<?php echo base_url().'theme/assets/img/beasiswa/'.$beasiswa_gambar;?>" class="img-fluid" alt="<?php echo $beasiswa_nama;?>">
              <h3><?php echo $beasiswa_nama;?></h3>
              <p><?php echo limit_words($beasiswa_deskripsi,3).'...';?>.</p></a>
            </div>
          </div>

          <?php endforeach;?>
        </div>

      </div>

    </section><!-- End Values Section -->

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