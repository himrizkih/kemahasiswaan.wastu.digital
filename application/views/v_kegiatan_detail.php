<?php
  foreach ($kegiatan->result_array() as $k) :
  $kegiatan_id=$k['id_kegiatan'];
  $kegiatan_nama=$k['nama'];
  $kegiatan_kategori=$k['kategori'];
  $kegiatan_peserta=$k['peserta'];
  $kegiatan_jumlah_peserta=$k['jumlah_peserta'];
  $kegiatan_tanggal=$k['tanggal'];
  $kegiatan_kegiatan_id_user=$k['kegiatan_id_user'];
  $kegiatan_ormawa=$k['ormawa'];
  $kegiatan_deskripsi=$k['deskripsi'];
  $kegiatan_status=$k['status'];
  $kegiatan_gambar=$k['gambar'];
  $kegiatan_slug=$k['kegiatan_slug'];
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kemahasiswaan - Kegiatan Detail</title>

  <!-- Slider Title -->
  <script language="JavaScript">
  var txt=" Kemahasiswaan - Kegiatan Detail |";
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
            <h2><a href="#"><span>|</span>Kegiatan Detail</a></h2>
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
          <li><a href="<?php echo base_url().'kegiatan'?>">Kegiatan</a></li><li>Detail</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section//2466 ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6"><!-- Start Kegiatan Detail -->
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">

                <!-- <div class="swiper-slide"> -->
                <div>
                  <img src="<?php echo base_url().'theme/assets/img/kegiatan/'.$kegiatan_gambar;?>" alt="kegiatan-detail">
                </div>

                <!-- <div class="swiper-slide">
                  <img src="<?php echo base_url().'theme/assets/img/galeri/galeri-2.jpg'?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?php echo base_url().'theme/assets/img/galeri/galeri-3.jpg'?>" alt="">
                </div> -->

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="portfolio-info">
              <h3>Informasi Kegiatan</h3>
              <ul>
                <li><strong>Nama Kegiatan</strong> : 
                  <br><?php echo $kegiatan_nama;?>
                </li>
                <li><strong>Kategori</strong> : 
                  <!-- <br><?php echo $kegiatan_kategori;?> -->
                  <br><?php 
                        if ($kegiatan_kategori=='') {
                          echo '<span class="badge badge-danger">Perlu diinput Kategori Kegiatan</span>';
                        }else if ($kegiatan_kategori=='pendpenga') {
                          echo 'Pendidikan dan Pengajaran';
                        }else if ($kegiatan_kategori=='penlpenge') {
                          echo 'Penelitian dan Pengembangan';
                        }else if ($kegiatan_kategori=='pkm') {
                          echo 'Pengabdian Kepada Masyarakat';
                        }
                      ?>
                </li>
                <li><strong>Peserta</strong> : 
                  <br><?php echo $kegiatan_peserta;?>
                </li>
                <li><strong>Jumlah Peserta</strong> : 
                  <br><?php echo $kegiatan_jumlah_peserta;?>
                </li>
                <li><strong>Tanggal Kegiatan</strong> : 
                  <br><?php echo $kegiatan_tanggal;?>
                </li>
                <li><strong>Ormawa</strong> : 
                  <br><?php echo $kegiatan_ormawa;?>
                </li>
              </ul>
            </div>

          </div>

          <div class="col-lg-12">
            <div class="portfolio-info">
              <h3>Redaksi Kegiatan</h3>
              <ul>
                <li>
                  <?php echo $kegiatan_deskripsi;?>
                </li>
              </ul>
            </div>
          </div>

            <!-- <div class="portfolio-description">
              <h2>Redaksi Kegiatan</h2>
              <p>
                <?php echo $kegiatan_deskripsi;?>
              </p>
            </div> -->

        </div><!-- End Kegiatan Detail -->

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