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
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kemahasiswaan - Beasiswa Detail</title>

  <!-- Slider Title -->
  <script language="JavaScript">
  var txt=" Kemahasiswaan - Beasiswa Detail |";
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
          <div class="col-lg-9 text-center text-lg-start">
            <h2><a href="#"><span>|</span>Beasiswa Detail</a></h2>
            <h3>Sistem Informasi Pelayanan Beasiswa | Kemahasiswaan STT Wastukancana</h3>
          </div>
        </div>

      </div>
    </section><!-- End Cta Title Section -->

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container"  data-aos="zoom-in">

        <ol>
          <li><a href="<?php echo base_url().'beasiswa'?>">Beranda</a></li>
          <li>Beasiswa-Detail</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">

                <!-- <div class="swiper-slide"> -->
                  <img src="<?php echo base_url().'theme/assets/img/beasiswa/'.$beasiswa_gambar;?>" alt="kegiatan-detail">
                <!-- </div> -->

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="portfolio-info">
              <h3>Beasiswa</h3>
              <p>
                <strong><?php echo $beasiswa_nama;?></strong>
              </p>
            </div>
            <br>

            <div class="portfolio-info">
              <h3>Kategori Beasiswa</h3>
              <p>
                <?php 
                  if ($beasiswa_kategori=='') {
                    echo '<span class="badge badge-danger">Perlu diinput Kategori Beasiswa</span>';
                  }else if ($beasiswa_kategori=='lokal') {
                    echo 'Beasiswa Lokal';
                  }else if ($beasiswa_kategori=='wilayah') {
                    echo 'Beasiswa Wilayah';
                  }else if ($beasiswa_kategori=='nasional') {
                    echo 'Beasiswa Nasional';
                  }else if ($beasiswa_kategori=='internasional') {
                    echo 'Beasiswa Internasional';
                  }
                ?>
              </p>
            </div>
            <br>
          </div>

          <div class="col-lg-12">
            <div class="portfolio-info">
              <h3>Informasi Beasiswa</h3>
              <p>
                <?php echo $beasiswa_deskripsi;?>
              </p>
            </div>
            <br>

            <div class="portfolio-info">
              <h3>Persyaratan Beasiswa</h3>
              <ul>
                <li><?php echo $beasiswa_persyaratan;?></li>
              </ul>
            </div>
            <br>

            <div class="portfolio-info">
              <h3>Keunggulan Beasiswa</h3>
              <ul>
                <li><?php echo $beasiswa_keunggulan;?></li>
              </ul>
            </div>
            <br>

            <div class="portfolio-info">
              <h3>Tanggal Penting</h3>
              <ul>
                <li><?php echo $beasiswa_tanggal_penting;?></li>
              </ul>
            </div>
            <br>

            <div class="portfolio-info">
              <h3>Unduh Pedoman Pengajuan Beasiswa <?php echo $beasiswa_nama;?></h3>
              <p>
                <a href="<?php echo site_url('unduhan');?>" class="btn btn-sm btn-info" style="color: white;" target='_blank'>Unduh</a>
              </p>
            </div>
            <br>

            <div class="portfolio-info">
              <h3>Link Pengajuan Beasiswa</h3>
              <p>
                <!-- <a href="<?php echo $beasiswa_link_pendaftaran;?>" target='_blank'>Daftar Beasiswa <?php echo $beasiswa_nama;?></a> -->
                <a href="<?php echo $beasiswa_link_pendaftaran;?>" class="btn btn-sm btn-info" style="color: white;" target='_blank'>Daftar Beasiswa <?php echo $beasiswa_nama;?></a>
              </p>
            </div>
            <br>

          </div>

        </div>
      </div>
    </section><!-- End Portfolio Details Section -->
    <?php endforeach;?>

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