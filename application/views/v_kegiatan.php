<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kemahasiswaan - Kegiatan</title>

  <!-- Slider Title -->
  <script language="JavaScript">
  var txt=" Kemahasiswaan - Kegiatan |";
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
            <h2><a href="#"><span>|</span>Kegiatan</a></h2>
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
          <li>Kegiatan</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Tri Dharma Perguruan Tinggi</h2>
          <!-- <p>Kemahasiswaan STT Wastukancana</p> -->
        </div>

        <div class="row">
        
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-filter="*" class="filter-active">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title">Tri Dharma Perguruan Tinggi</a></h4>
              <p class="description">Merupakan salah satu tujuan yang harus dicapai dan dilakukan oleh setiap perguruan tinggi di Indonesia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-filter=".filter-pendpenga">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title">Pendidikan dan Pengajaran</a></h4>
              <p class="description">Pendidikan secara aktif mengembangkan potensi diri, akhlak mulia serta keterampilan yang diperlukan dirinya, masyarakat, bangsa dan negara</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-filter=".filter-penlpenge">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title">Penelitian dan Pengembangan</a></h4>
              <p class="description">Melaksanakan penelitian dan pengembangan berdampak pada majunya ekonomi, pendidikan, sosial, dan sektor-sektor lainnya di masyarakat</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-filter=".filter-pkm">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title">Pengabdian Kepada Masyarakat</a></h4>
              <p class="description">Ilmu yang bermanfaat, ilmu yang diamalkan sesuai fungsinya dan memberikan manfaat untuk orang banyak</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Kegiatan</h2>
          <p>Kemahasiswaan STT Wastukancana</p>
        </div>
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row gy-4 d-flex">

          <li class="nav-item col-6 col-md-4 col-lg-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <i class="bi bi-bullseye color-cyan"></i>
              <h4>Tri Dharma Perguruan Tinggi</h4>
            </a>
          </li><!-- End Tab 1 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <i class="bi bi-file-earmark-text color-indigo"></i>
              <h4>Pendidikan dan Pengajaran</h4>
            </a>
          </li><!-- End Tab 2 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <i class="bi bi-speedometer2 color-teal"></i>
              <h4>Penelitian dan Pengembangan</h4>
            </a>
          </li><!-- End Tab 3 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <i class="bi bi-globe color-red"></i>
              <h4>Pengabdian Kepada Masyarakat</h4>
            </a>
          </li><!-- End Tab 4 Nav -->

        </ul>

        <div class="tab-content">

          <div class="tab-pane active show" id="tab-1">
            <div class="row gy-4">
              <div class="col-lg-12 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                <!-- <h3>Tri Dharma Perguruan Tinggi</h3> -->
                
                <section id="more-services" class="more-services">
                  <div class="container">

                    <div class="row">
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

          <div style="padding-bottom: 25px;" class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0 filter-<?php echo $kegiatan_kategori;?>">
            <div class="card" style='background-image: url("<?php echo base_url().'theme/assets/img/kegiatan/'.$kegiatan_gambar;?>");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href=""><?php echo $kegiatan_ormawa;?></a></h5>

                <p class="card-text"><?php echo $kegiatan_nama;?></p>

                  <div class="read-more"><a href="<?php echo base_url().'kegiatan_detail/'.$kegiatan_slug;?>"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>

              <?php endforeach;?>
            </div>

          </div>
          </section><!-- End More Services Section -->
              
              </div>
            </div>
          </div><!---------- End Tab Content 1 ---------->

          <div class="tab-pane" id="tab-2">
            <div class="row gy-4">
              <div class="col-lg-12 order-2 order-lg-1">
                <!-- <h3>Pendidikan dan Pengajaran</h3> -->

                <section id="more-services" class="more-services">
                  <div class="container">

                    <div class="row">
                    <?php
                      foreach ($pendpenga->result_array() as $pd) :
                      $kegiatan_id=$pd['id_kegiatan'];
                      $kegiatan_nama=$pd['nama'];
                      $kegiatan_kategori=$pd['kategori'];
                      $kegiatan_peserta=$pd['peserta'];
                      $kegiatan_jumlah_peserta=$pd['jumlah_peserta'];
                      $kegiatan_tanggal=$pd['tanggal'];
                      $kegiatan_kegiatan_id_user=$pd['kegiatan_id_user'];
                      $kegiatan_ormawa=$pd['ormawa'];
                      $kegiatan_deskripsi=$pd['deskripsi'];
                      $kegiatan_status=$pd['status'];
                      $kegiatan_gambar=$pd['gambar'];
                      $kegiatan_slug=$pd['kegiatan_slug'];
                    ?>

          <div style="padding-bottom: 25px;" class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0 filter-<?php echo $kegiatan_kategori;?>">
            <div class="card" style='background-image: url("<?php echo base_url().'theme/assets/img/kegiatan/'.$kegiatan_gambar;?>");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href=""><?php echo $kegiatan_ormawa;?></a></h5>

                <p class="card-text"><?php echo $kegiatan_nama;?></p>

                  <div class="read-more"><a href="<?php echo base_url().'kegiatan_detail/'.$kegiatan_slug;?>"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>

              <?php endforeach;?>
            </div>

          </div>
          </section><!-- End More Services Section -->

              </div>
            </div>
          </div><!---------- End Tab Content 2 ---------->

          <div class="tab-pane" id="tab-3">
            <div class="row gy-4">
              <div class="col-lg-12 order-2 order-lg-1">
                <!-- <h3>Penelitian dan Pengembangan</h3> -->
                
                <section id="more-services" class="more-services">
                  <div class="container">

                    <div class="row">
                    <?php
                      foreach ($penlpenge->result_array() as $pl) :
                      $kegiatan_id=$pl['id_kegiatan'];
                      $kegiatan_nama=$pl['nama'];
                      $kegiatan_kategori=$pl['kategori'];
                      $kegiatan_peserta=$pl['peserta'];
                      $kegiatan_jumlah_peserta=$pl['jumlah_peserta'];
                      $kegiatan_tanggal=$pl['tanggal'];
                      $kegiatan_kegiatan_id_user=$pl['kegiatan_id_user'];
                      $kegiatan_ormawa=$pl['ormawa'];
                      $kegiatan_deskripsi=$pl['deskripsi'];
                      $kegiatan_status=$pl['status'];
                      $kegiatan_gambar=$pl['gambar'];
                      $kegiatan_slug=$pl['kegiatan_slug'];
                    ?>

          <div style="padding-bottom: 25px;" class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0 filter-<?php echo $kegiatan_kategori;?>">
            <div class="card" style='background-image: url("<?php echo base_url().'theme/assets/img/kegiatan/'.$kegiatan_gambar;?>");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href=""><?php echo $kegiatan_ormawa;?></a></h5>

                <p class="card-text"><?php echo $kegiatan_nama;?></p>

                  <div class="read-more"><a href="<?php echo base_url().'kegiatan_detail/'.$kegiatan_slug;?>"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>

              <?php endforeach;?>
            </div>

          </div>
          </section><!-- End More Services Section -->

              </div>
            </div>
          </div><!---------- End Tab Content 3 ---------->

          <div class="tab-pane" id="tab-4">
            <div class="row gy-4">
              <div class="col-lg-12 order-2 order-lg-1">
                <!-- <h3>Pengabdian Kepada Masyarakat</h3> -->
                
                <section id="more-services" class="more-services">
                  <div class="container">

                    <div class="row">
                    <?php
                      foreach ($pkm->result_array() as $pkm) :
                      $kegiatan_id=$pkm['id_kegiatan'];
                      $kegiatan_nama=$pkm['nama'];
                      $kegiatan_kategori=$pkm['kategori'];
                      $kegiatan_peserta=$pkm['peserta'];
                      $kegiatan_jumlah_peserta=$pkm['jumlah_peserta'];
                      $kegiatan_tanggal=$pkm['tanggal'];
                      $kegiatan_kegiatan_id_user=$pkm['kegiatan_id_user'];
                      $kegiatan_ormawa=$pkm['ormawa'];
                      $kegiatan_deskripsi=$pkm['deskripsi'];
                      $kegiatan_status=$pkm['status'];
                      $kegiatan_gambar=$pkm['gambar'];
                      $kegiatan_slug=$pkm['kegiatan_slug'];
                    ?>

          <div style="padding-bottom: 25px;" class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0 filter-<?php echo $kegiatan_kategori;?>">
            <div class="card" style='background-image: url("<?php echo base_url().'theme/assets/img/kegiatan/'.$kegiatan_gambar;?>");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href=""><?php echo $kegiatan_ormawa;?></a></h5>

                <p class="card-text"><?php echo $kegiatan_nama;?></p>

                  <div class="read-more"><a href="<?php echo base_url().'kegiatan_detail/'.$kegiatan_slug;?>"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>

              <?php endforeach;?>
            </div>

          </div>
          </section><!-- End More Services Section -->

              </div>
            </div>
          </div><!---------- End Tab Content 4 ---------->

        </div>

      </div>
    </section><!-- End Features Section -->

      </div>
    </section><!-- End Services Section -->



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