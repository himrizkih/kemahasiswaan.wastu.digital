<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kemahasiswaan - Berita</title>

  <!-- Slider Title -->
  <script language="JavaScript">
  var txt=" Kemahasiswaan - Berita |";
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

  <?php $this->load->view('layout/v_script1');?>

</head>

<body>

  <?php $this->load->view('layout/v_header');?>

    <!-- ======= Cta Section-//1266 ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h2><a href="#"><span>|</span>Berita</a></h2>
            <h3>Kemahasiswaan STT Wastukancana</h3>
          </div>
        </div>

      </div>
    </section>
    <!-- End Cta Section -->

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container"  data-aos="zoom-in">

        <ol>
          <li><a href="<?php echo base_url().'beranda'?>">Beranda</a></li>
          <li>Berita</li>
        </ol>

      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Blog Section-//1697 ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="section-titlee" data-aos="zoom-out">
          <h2>Berita</h2>
          <p>Terbaru</p>
        </div>
        
        <div class="row g-5">

          <div class="col-lg-8">

            <div class="row gy-4 posts-list">
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

              <div class="col-lg-6">
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img src="<?php echo base_url().'theme/assets/img/berita/'.$berita_gambar;?>" alt="" class="img-fluid">
                  </div>

                  <div class="title">
                    <a href="<?php echo base_url().'berita_detail/'.$berita_slug;?>"><?php echo limit_words($berita_judul,6).'...';?></a>
                  </div>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="<?php echo base_url().'berita_detail/'.$berita_slug;?>"><?php echo limit_words($berita_author,2).'...';?></a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="<?php echo base_url().'berita_detail/'.$berita_slug;?>"><time datetime="2022-01-01"><?php echo $berita_tanggal;?></time></a></li>
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      <?php echo limit_words($berita_redaksi,3).'...';?>
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="<?php echo base_url().'berita_detail/'.$berita_slug;?>">Selengkapnya</a>
                  </div>

                </article>
              </div><!-- End post list item -->

            <?php endforeach;?>
            </div><!-- End blog posts list -->

          </div>

          <div style="margin-bottom: -40px;" class="col-lg-4">
            
            <!-- Blog Sidebar-//1811 -->
            <div class="sidebar">

              <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form action="" class="mt-3">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Kategori</h3>
                <ul class="mt-3">
                  <li><a href="#">Internal <span>(...)</span></a></li>
                  <li><a href="#">Eksternal <span>(...)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Berita Terbaru</h3>

                <div class="mt-3">
                <?php
                  $no=" ";
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

                  <div class="post-item mt-3">
                    <img src="<?php echo base_url().'theme/assets/img/berita/'.$berita_gambar;?>" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="<?php echo base_url().'berita_detail/'.$berita_slug;?>"><?php echo limit_words($berita_judul,5).'...';?></a>
                      <time datetime="2020-01-01"><?php echo $berita_tanggal;?></time></h4>
                    </div>
                  </div><!-- End recent post item-->

                <?php endforeach;?>
                </div>

              </div><!-- End sidebar recent posts-->

            </div><!-- End Blog Sidebar -->

          </div>

        </div>

      </div>
    </section><!-- End Blog Section -->

<!-- ===================================================================== -->
    <!-- ======= Blog Section-//1697 ======= -->
    <section style="margin-top: -50px;" id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <!-- Post List Item Berita Internal -->
        <div class="section-titlee" data-aos="zoom-out">
          <h2>Berita</h2>
          <p>Internal</p>
        </div>
        
        <div class="row g-5">

          <div class="col-lg-8">

            <div class="row gy-4 posts-list">
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

              <div class="col-lg-6">
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img src="<?php echo base_url().'theme/assets/img/berita/'.$berita_gambar;?>" alt="" class="img-fluid">
                  </div>

                  <div class="title">
                    <a href="<?php echo base_url().'berita_detail/'.$berita_slug;?>"><?php echo limit_words($berita_judul,6).'...';?></a>
                  </div>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="<?php echo base_url().'berita_detail/'.$berita_slug;?>"><?php echo limit_words($berita_author,2).'...';?></a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="<?php echo base_url().'berita_detail/'.$berita_slug;?>"><time datetime="2022-01-01"><?php echo $berita_tanggal;?></time></a></li>
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      <?php echo limit_words($berita_redaksi,3).'...';?>
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="<?php echo base_url().'berita_detail/'.$berita_slug;?>">Selengkapnya</a>
                  </div>

                </article>
              </div><!-- End post list item -->

            <?php endforeach;?>
            </div><!-- End blog posts list -->

          </div>

        </div>
      </div>
    </section>

    <!-- ======= Blog Section-//1697 ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <!-- Post List Item Berita Eksternal -->
        <div class="section-titlee" data-aos="zoom-out">
          <h2>Berita</h2>
          <p>Eksternal</p>
        </div>
        
        <div class="row g-5">

          <div class="col-lg-8">

            <div class="row gy-4 posts-list">
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

              <div class="col-lg-6">
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img src="<?php echo base_url().'theme/assets/img/berita/'.$berita_gambar;?>" alt="" class="img-fluid">
                  </div>

                  <div class="title">
                    <a href="<?php echo base_url().'berita_detail/'.$berita_slug;?>"><?php echo limit_words($berita_judul,6).'...';?></a>
                  </div>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="<?php echo base_url().'berita_detail/'.$berita_slug;?>"><?php echo limit_words($berita_author,2).'...';?></a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="<?php echo base_url().'berita_detail/'.$berita_slug;?>"><time datetime="2022-01-01"><?php echo $berita_tanggal;?></time></a></li>
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      <?php echo limit_words($berita_redaksi,3).'...';?>
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="<?php echo base_url().'berita_detail/'.$berita_slug;?>">Selengkapnya</a>
                  </div>

                </article>
              </div><!-- End post list item -->

            <?php endforeach;?>
            </div><!-- End blog posts list -->

          </div>

        </div>
      </div>
    </section>
<!-- ===================================================================== -->


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
  <script src="<?php echo base_url().'theme/assets/js/main.js'?>"></script>

</body>

</html>