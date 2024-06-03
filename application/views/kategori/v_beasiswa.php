<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kemahasiswaan - Beasiswa</title>

  <!-- Slider Title -->
  <script language="JavaScript">
  var txt=" Kemahasiswaan - Beasiswa |";
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

   <!-- ======= Heroo Section ======= -->
  <section id="heroo" class="heroo d-flex align-items-center" style="background: url(theme/assets/img/hero/hero-bg.png) top center no-repeat;">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Sistem Informasi Pelayanan Beasiswa STT Wastukancana</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Beasiswa Lokal, Wilayah, Nasional, dan Internasional</h2>

          <!-- <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p> -->

          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#values" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Telusuri Beasiswa</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 heroo-img" data-aos="fade-left" data-aos-delay="200">
          <img src="theme/assets/img/hero/hero-img.png" class="img-fluid animated" alt="">
        </div>
        <center><a href="#featuress" class="btn-get-starteds scrollto" data-aos="zoom-in" data-aos-delay="800"><i class="bx bx-chevrons-down"></i></a></center>
      </div>
    </div>

  </section><!-- End Hero -->

    <!-- ======= Featuress Section ======= -->
    <section style="margin-top: -50px;" id="featuress" class="featuress">

      <div class="container" data-aos="fade-up">

      <!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">

          <div class="col-lg-6">
            <img src="theme/assets/img/hero/features.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6">
            <h3>Hi! Kamu mendapatkan kesempatan untuk meraih masa depanmu dengan beasiswa yang kami sediakan</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Lokal</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab2">Wilayah</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab3">Nasional</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab4">Internasional</a>
              </li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">
                <p>Beasiswa Lokal</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Deskripsi Beasiswa Lokal</h4>
                </div>
                <p>Deskripsi</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Macam-macam Beasiswa Lokal</h4>
                </div>
                <p>Daftar Beasiswa Lokal</p>
                <a href="beasiswa/lokal">Selengkapnya...</a>
              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade show" id="tab2">
                <p>Beasiswa Wilayah</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Deskripsi Beasiswa Wilayah</h4>
                </div>
                <p>Deskripsi</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Macam-macam Beasiswa Wilayah</h4>
                </div>
                <p>Daftar Beasiswa Wilayah</p>
                <a href="beasiswa/wilayah">Selengkapnya...</a>
              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade show" id="tab3">
                <p>Beasiswa Nasional</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Deskripsi Beasiswa Nasional</h4>
                </div>
                <p>Deskripsi</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Macam-macam Beasiswa Nasional</h4>
                </div>
                <p>Daftar Beasiswa Nasional</p>
                <a href="beasiswa/nasional">Selengkapnya...</a>
              </div><!-- End Tab 3 Content -->

              <div class="tab-pane fade show" id="tab4">
                <p>Beasiswa Internasional</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Deskripsi Beasiswa Internasional</h4>
                </div>
                <p>Deskripsi</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Macam-macam Beasiswa Internasional</h4>
                </div>
                <p>Daftar Beasiswa Internasional</p>
                <a href="beasiswa/internasional">Selengkapnya...</a>
              </div><!-- End Tab 4 Content -->

            </div>

          </div>

        </div><!-- End Feature Tabs -->

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <div class="section-title" data-aos="fade-up">
          <h2>Beasiswa Terkini</h2>
          <p>Beasiswa yang sedang dibuka </p>
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
  <!-- <script src="<?php echo base_url().'theme/assets/vendor/typed.js/typed.min.js'?>"></script> -->

  <!-- Main JS File -->
  <script src="<?php echo base_url().'theme/assets/js/main.js'?>"></script>


</body>

</html>