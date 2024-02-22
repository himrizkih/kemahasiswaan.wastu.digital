<?php
  $no=1;
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
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kemahasiswaan - Berita Detail</title>

  <!-- Slider Title -->
  <script language="JavaScript">
  var txt=" Kemahasiswaan - Berita Detail |";
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

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h2><a href="#"><span>|</span>Berita Detail</a></h2>
            <h3>Kemahasiswaan STT Wastukancana</h3>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container"  data-aos="zoom-in">

        <ol>
          <li><a href="<?php echo base_url().'beranda'?>">Beranda</a></li>
          <li><a href="<?php echo base_url().'berita'?>">Berita</a></li><li>Detail</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

  <main id="main">
  
   <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img">
                <img src="<?php echo base_url().'theme/assets/img/berita/'.$berita_gambar;?>" alt="" class="img-fluid">
              </div>

              <h2 class="title"><?php echo $berita_judul;?></h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="<?php echo base_url().'berita_detail/'.$berita_slug;?>"><?php echo $berita_author;?></a></li>
                  
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="<?php echo base_url().'berita_detail/'.$berita_slug;?>"><time datetime="2020-01-01"><?php echo $berita_tanggal;?></time></a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <?php echo $berita_redaksi;?>

              </div><!-- End post content -->

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#"></a><?php echo $berita_kategori;?></li>
                </ul>
              </div><!-- End meta bottom -->

            </article><!-- End blog post -->

          </div>

          <div class="col-lg-4">

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
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->
  <?php endforeach;?>

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