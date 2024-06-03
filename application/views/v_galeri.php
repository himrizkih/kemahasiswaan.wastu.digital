<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kemahasiswaan - Galeri</title>

  <!-- Slider Title -->
  <script language="JavaScript">
  var txt=" Kemahasiswaan - Galeri |";
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
            <h2><a href="#"><span>|</span>Galeri</a></h2>
            <h3>Kemahasiswaan STT Wastukancana</h3>
          </div>
        </div>

      </div>
    </section><!-- End Cta Title Section -->

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container"  data-aos="zoom-in">

        <ol>
          <li><a href="<?php echo base_url().'beranda'?>">Beranda</a></li>
          <li>Galeri</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section//2534 ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeri</h2>
          <p>Kemahasiswaan STT Wastukancana</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Tri Dharma Perguruan Tinggi</li>
              <li data-filter=".filter-pendpenga">Pendidikan</li>
              <li data-filter=".filter-penlpenge">Penelitian</li>
              <li data-filter=".filter-pkm">Pengabdian Kepada Masyarakat</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php
            foreach ($galeri->result_array() as $g) :
              $galeri_id=$g['id_kegiatan'];
              $galeri_nama=$g['nama'];
              $galeri_kategori=$g['kategori'];
              $galeri_peserta=$g['peserta'];
              $galeri_jumlah_peserta=$g['jumlah_peserta'];
              $galeri_tanggal=$g['tanggal'];
              $galeri_kegiatan_id_user=$g['kegiatan_id_user'];
              $galeri_ormawa=$g['ormawa'];
              $galeri_deskripsi=$g['deskripsi'];
              $galeri_status=$g['status'];
              $galeri_gambar=$g['gambar'];
          ?>

          <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $galeri_kategori;?>">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url().'theme/assets/img/kegiatan/'.$galeri_gambar;?>" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?php echo base_url().'theme/assets/img/kegiatan/'.$galeri_gambar;?>" data-galleryery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $galeri_nama;?>"><i class="bi bi-plus"></i></a>
                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4><?php echo $galeri_ormawa;?></h4>
                <p><?php echo $galeri_nama;?></p>
              </div>
            </div>
          </div>

          <?php endforeach;?>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

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