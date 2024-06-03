<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kemahasiswaan - Beasiswa - Penerima</title>

  <!-- Slider Title -->
  <script language="JavaScript">
  var txt=" Kemahasiswaan - Beasiswa - Penerima |";
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
            <h2><a href="#"><span>|</span>Penerima Beasiswa</a></h2>
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
          <li>Beasiswa-Penerima</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    

    <section class="section profile">
      <div class="row">

        <div class="section-title" data-aos="fade-up">
          <h2>Daftar Penerima Beasiswa</h2>
          <p>Berikut Detail dari Daftar Final Penerima Beasiswa</p>
        </div>

        <?php
            foreach ($pendaftar->result_array() as $b) :
              $pendaftar_id=$b['id_pendaftar'];
              $pendaftar_id=$b['id_mhs'];
              $pendaftar_nama_mhs=$b['nama_mhs'];
              $pendaftar_nim=$b['nim'];
              $pendaftar_prodi=$b['prodi'];
              $pendaftar_nomor_hp=$b['nomor_hp'];
              $pendaftar_status=$b['status'];
              $pendaftar_status_baca=$b['status_baca'];
              $pendaftar_nama_bea=$b['nama_bea'];
              $pendaftar_kategori=$b['kategori'];
              $pendaftar_tanggal=$b['tanggal'];
          ?>

        <div class="col-md-2">
        </div>
        <div class="col-md-8">
          <table class="table table-striped" id="display">
          <tbody>
            <tr>
                <td width="200px" scope="row"><strong>Nama Mahasiswa</strong></td>
                <td>:</td>
                <td><?php echo $pendaftar_nama_mhs;?></td>
            </tr>
            <tr>
                <td width="200px" scope="row"><strong>NIM</strong></td>
                <td>:</td>
                <td><?php echo $pendaftar_nim;?></td>
            </tr>
            <tr>
                <td width="200px" scope="row"><strong>Program Studi</strong></td>
                <td>:</td>
                <td><?php 
                      if ($pendaftar_prodi=='') {
                        echo '<span class="badge badge-danger">Perlu diinput Prodi Mahasiswa</span>';
                      }else if ($pendaftar_prodi=='mhs') {
                        echo 'Mahasiswa';
                      }else if ($pendaftar_prodi=='if') {
                        echo 'Teknik Informatika';
                      }else if ($pendaftar_prodi=='tm') {
                        echo 'Teknik Mesin';
                      }else if ($pendaftar_prodi=='ti') {
                        echo 'Teknik Industri';
                      }else if ($pendaftar_prodi=='mi') {
                        echo 'Manajemen Industri';
                      }else if ($pendaftar_prodi=='teks') {
                        echo 'Teknik Tekstil';
                      }
                    ?>
                </td>
            </tr>
            <tr>
              <td width="200px" scope="row"><strong>Nomor HP</strong></td>
              <td>:</td>
              <td><?php echo $pendaftar_nomor_hp;?></td>
            </tr>
            <tr>
              <td width="200px" scope="row"><strong>Status Pengajuan</strong></td>
              <td>:</td>
              <td><?php 
                    if ($pendaftar_status==0) {
                        echo '<span class="badge bg-secondary">Menunggu Persetujuan<br/> Kaprodi</span>';
                    }else if ($pendaftar_status==0) {
                        echo '<span class="badge bg-secondary">Menunggu Persetujuan<br/> Kaprodi</span>';
                    }else if ($pendaftar_status==1) {
                        echo '<span class="badge bg-warning">Proses Seleksi</span>';
                    }else if ($pendaftar_status==2) {
                        echo '<span class="badge bg-success">Disetujui Kaprodi</span>';
                    }else if ($pendaftar_status==3) {
                        echo '<span class="badge bg-danger">Ditolak</span>';
                    }
                    ?>    
              </td>
            </tr>
            <tr>
                <td width="200px" scope="row"><strong>Jenis Beasiswa</strong></td>
                <td>:</td>
                <td><?php echo $pendaftar_nama_bea?></td>
            </tr>
            <tr>
                <td width="200px" scope="row"><strong>Kategori Beasiswa</strong></td>
                <td>:</td>
                <td><?php 
                      if ($pendaftar_kategori=='') {
                        echo '<span class="badge badge-danger">Perlu diinput Kategori Beasiswa</span>';
                      }else if ($pendaftar_kategori=='lokal') {
                        echo 'Beasiswa Lokal';
                      }else if ($pendaftar_kategori=='wilayah') {
                        echo 'Beasiswa Wilayah';
                      }else if ($pendaftar_kategori=='nasional') {
                        echo 'Beasiswa Nasional';
                      }else if ($pendaftar_kategori=='internasional') {
                        echo 'Beasiswa Internasional';
                      }
                    ?>
                </td>
            </tr>
            <tr>
                <td width="200px" scope="row"><strong>Tanggal Pengajuan</strong></td>
                <td>:</td>
                <td><?php echo $pendaftar_tanggal;?></td>
            </tr>
            <tr>
              <td><hr></td>
              <td><hr></td>
              <td><hr></td>
            </tr>
        </tbody>
        </table>
      </div>
      <div class="col-md-2">
      </div>
      <?php endforeach;?>

      </div>
    </section>

    <!-- ======= Testimonials Section ======= -->
    <div id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper-container">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?php echo base_url().'theme/assets/img/quotes/quotes-1.png'?>" class="testimonial-img" alt="">
                <h3>Nama
                <h4>Mahasiswa</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Testimonials.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?php echo base_url().'theme/assets/img/quotes/quotes-1.png'?>" class="testimonial-img" alt="">
                <h3>Nama
                <h4>Mahasiswa</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Testimonials.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <!-- <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g> -->
    </svg>

    </div><!-- End Testimonials Section -->

  </main><!-- End #main -->

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