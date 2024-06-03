<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kemahasiswaan | STT Wastukancana Purwakarta</title>

  <!-- Slider Title -->
  <script language="JavaScript">
    var txt=" Kemahasiswaan | STT Wastukancana Purwakarta |";
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
  <!--End Slider Title -->

  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php $this->load->view('layout/v_script1');?>
</head>

<body>
  <?php $this->load->view('layout/v_header');?>

<!-- ======= carousel-inner-//698 ======= -->
<div class="carousel-inner" role="listbox">
  <!-- ======= Hero Section-//787 ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators">
        </ol>

          <div class="carousel-item active" style="background-image: url(theme/assets/img/slider/slider-1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Kemahasiswaan STT Wastukancana Purwakarta</h2>
                <h2 class="animate__animated animate__fadeInUp">Departemen Kemahasiswaan HUMAS & HUBIN</h2>
                
                <a href="#breadcrumbs" class="btn-get-started scrollto animate__animated animate__fadeInUp">Pengumuman</a>

                <a href="<?php echo base_url().'unduhan'?>" class="btn-get-started scrollto animate__animated animate__fadeInUp" target='_blank'>Unduhan</a>

                <a href="#recent-blog-posts" class="btn-get-started scrollto animate__animated animate__fadeInUp">Berita Terbaru</a>

                <center><a href="#breadcrumbs" class="btn-get-starteds scrollto animate__animated animate__fadeInDown"><i class="bx bx-chevrons-down"></i></a></center>
              </div>
            </div>
          </div>
          
        <?php
            foreach ($home->result_array() as $h) :
              $next='';
              $active='active';
              $home_id=$h['id_slider'];
              $home_deskripsi=$h['deskripsi'];              
              $home_gambar=$h['gambar'];
        ?>

          <div class="carousel-item" style='background-image: url("<?php echo base_url().'theme/assets/img/slider/'.$home_gambar;?>");'>
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown"><?php echo $home_deskripsi;?></h2>
                <!-- <p class="animate__animated animate__fadeInUp">Bagian Kemahasiswaan Humas & Hubin</p> -->
                <center><a href="#breadcrumbs" class="btn-get-starteds scrollto"><i class="bx bx-chevrons-down"></i></a></center>
              </div>
            </div>
          </div>
          <?php endforeach;?> 
          
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
  
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

  <!-- Card-//704 -->
  <div class="card">
    <div class="alert alert-success bg-primary border-0 alert-dismissible fade show" role="alert">A simple info alert with solid color — check it out!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
  <!-- End Card -->

</div>
<!-- End carousel-inner -->


<!-- breadcrumbs-//1325 -->
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
            foreach ($pengumuman->result_array() as $p) :
              $pengumuman_id=$p['id_pengumuman'];
              $pengumuman_pengumuman=$p['pengumuman'];
              $pengumuman_status=$p['status'];
        ?>

        <div class="col-md-4" data-aos="zoom-out" data-aos-delay="200"><?php echo $no++;?>
          <div class="feature-box d-flex align-items-center">
            <i class="bi bi-megaphone-fill"></i>
              <h3><?php echo limit_words($pengumuman_pengumuman,7).'...';?></h3>
          </div>
        </div>

        <?php endforeach;?>
      </div>
    </div>

    <center>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="single-blog">
          <span>
            <a href="<?php echo base_url().'pengumuman/';?>" class="ready-btn">Pengumuman Lainnya...</a>
          </span>
        </div>
      </div>
    </center>

  </div>
</section>
<!-- End Breadcrumbs -->


<!-- main -->
<main id="main">

<!-- ======= Recent Blog Posts Section-//1014 ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">
  <div class="container" data-aos="fade-up">
    <div style="margin-bottom: -80px;" class="section-title">
      <h2>Berita</h2>
    </div>

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
        
        <ul class="nav nav-tabs row gy-4 d-flex">
          <li class="nav-item col-6 col-md-4 col-lg-4">
              <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                <i class="bi bi-globe color-cyan"></i>
                <h4>Berita Terbaru</h4>
              </a>
          </li><!-- End Tab 1 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-4">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <i class="bi bi-box-arrow-in-down-left color-indigo"></i>
              <h4>Internal</h4>
            </a>
          </li><!-- End Tab 2 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-4">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <i class="bi bi-box-arrow-up-right color-teal"></i>
              <h4>Eksternal</h4>
            </a>
          </li><!-- End Tab 3 Nav -->
        </ul>

        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row gy-4">
              <div class="col-lg-12 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                <h3>Berita Terbaru</h3>
                
                <section id="more-services" class="more-services">
                  <div class="container">

                    <div class="row">
                      <?php
                        foreach ($berita->result_array() as $b) :
                          $berita_id=$b['id_berita'];
                          $berita_judul=$b['judul'];
                          $berita_redaksi=$b['redaksi'];
                          $berita_tanggal=$b['tanggal'];
                          $berita_gambar=$b['gambar'];
                          $berita_kategori=$b['kategori'];
                          $berita_berita_id_user=$b['berita_id_user'];
                          $berita_author=$b['author'];
                          $berita_slug=$b['berita_slug'];
                      ?>

                      <div class="col-lg-3">
                        <div class="post-box">
                          <div class="post-img"><img src="<?php echo base_url().'theme/assets/img/berita/'.$berita_gambar;?>" class="img-fluid" alt=""></div>
                          <span class="post-date"><?php echo $berita_tanggal;?></span>
                            <h4 class="post-title"><?php echo limit_words($berita_judul,6).'...';?></h4>
                            <h5 class="post"><?php echo limit_words($berita_redaksi,5).'...';?></h5>
                            <h5><a class="readmore stretched-link mt-auto" href="<?php echo base_url().'berita'?>"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a></h5>
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
              <div class="col-lg-12 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                <h3>Berita Internal</h3>
                
                <section id="more-services" class="more-services">
                  <div class="container">

                    <div class="row">
                      <?php
                        foreach ($internal->result_array() as $i) :
                          $berita_id=$i['id_berita'];
                          $berita_judul=$i['judul'];
                          $berita_redaksi=$i['redaksi'];
                          $berita_tanggal=$i['tanggal'];
                          $berita_gambar=$i['gambar'];
                          $berita_kategori=$i['kategori'];
                          $berita_berita_id_user=$i['berita_id_user'];
                          $berita_author=$i['author'];
                          $berita_slug=$i['berita_slug'];
                      ?>

                      <div class="col-lg-3">
                        <div class="post-box">
                          <div class="post-img"><img src="<?php echo base_url().'theme/assets/img/berita/'.$berita_gambar;?>" class="img-fluid" alt=""></div>
                          <span class="post-date"><?php echo $berita_tanggal;?></span>
                            <h4 class="post-title"><?php echo limit_words($berita_judul,6).'...';?></h4>
                            <h5 class="post"><?php echo limit_words($berita_redaksi,5).'...';?></h5>
                            <h5><a class="readmore stretched-link mt-auto" href="<?php echo base_url().'berita'?>"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a></h5>
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
              <div class="col-lg-12 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                <h3>Berita Eksternal</h3>
                
                <section id="more-services" class="more-services">
                  <div class="container">

                    <div class="row">
                      <?php
                        foreach ($eksternal->result_array() as $e) :
                          $berita_id=$e['id_berita'];
                          $berita_judul=$e['judul'];
                          $berita_redaksi=$e['redaksi'];
                          $berita_tanggal=$e['tanggal'];
                          $berita_gambar=$e['gambar'];
                          $berita_kategori=$e['kategori'];
                          $berita_berita_id_user=$e['berita_id_user'];
                          $berita_author=$e['author'];
                          $berita_slug=$e['berita_slug'];
                      ?>

                      <div class="col-lg-3">
                        <div class="post-box">
                          <div class="post-img"><img src="<?php echo base_url().'theme/assets/img/berita/'.$berita_gambar;?>" class="img-fluid" alt=""></div>
                          <span class="post-date"><?php echo $berita_tanggal;?></span>
                            <h4 class="post-title"><?php echo limit_words($berita_judul,6).'...';?></h4>
                            <h5 class="post"><?php echo limit_words($berita_redaksi,5).'...';?></h5>
                            <h5><a class="readmore stretched-link mt-auto" href="<?php echo base_url().'berita'?>"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a></h5>
                        </div>
                      </div>

                      <?php endforeach;?>
                    </div>

                  </div>
                </section><!-- End More Services Section -->
              
              </div>
            </div>
          </div><!---------- End Tab Content 3 ---------->

          <center>
          <div style="margin-bottom: -60px;" class="col-md-12 col-sm-12 col-xs-12">
            <div class="single-blog">
              <span>
                <a href="<?php echo base_url().'berita/';?>" class="ready-btn">Berita Lainnya...</a>
              </span>
            </div>
          </div>
          </center>

        </div>
    </section><!-- End Recent Blog Posts Section -->

  </div>
</section>
<!-- End Features Section -->


<!-- ======= Testimonials Section-//1174 ======= -->
<div id="testimonials" class="testimonials">
  <div class="container">

    <div class="testimonials-slider swiper-container">
      <div class="swiper-wrapper">
        <?php
          $no=" ";
            foreach ($quotes->result_array() as $q) :
              $quotes_id=$q['id_quotes'];
              $quotes_nama=$q['nama'];
              $quotes_status=$q['status'];
              $quotes_quotes=$q['quotes'];
        ?>

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="<?php echo base_url().'theme/assets/img/quotes/quotes-1.png'?>" class="testimonial-img" alt="">
            <h3><?php echo $quotes_nama;?></h3>
            <h4>
              <?php
                if ($quotes_status=='mahasiswa') {
                  echo 'Mahasiswa';
                }elseif ($quotes_status=='dosen') {
                  echo 'Dosen';
                }elseif ($quotes_status=='karyawan') {
                  echo 'Karyawan';
                }
              ?>
            </h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?php echo $quotes_quotes;?>.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div>

        <?php endforeach;?>
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

</div>
<!-- End Testimonials Section -->

</main>
<!-- End #main -->

<?php $this->load->view('layout/v_footer');?>

<div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url().'theme/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
  <script src="<?php echo base_url().'theme/assets/vendor/glightbox/js/glightbox.min.js'?>"></script>
  <script src="<?php echo base_url().'theme/assets/vendor/isotope-layout/isotope.pkgd.min.js'?>"></script>
  <script src="<?php echo base_url().'theme/assets/vendor/php-email-form/validate.js'?>"></script>
  <script src="<?php echo base_url().'theme/assets/vendor/swiper/swiper-bundle.min.js'?>"></script>

  <!-- Main JS File -->
  <script src="<?php echo base_url().'theme/assets/js/main1.js'?>"></script>
  
</body>
</html>