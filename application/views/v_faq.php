<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kemahasiswaan - FAQ</title>

  <!-- Slider Title -->
  <script language="JavaScript">
  var txt=" Kemahasiswaan - FAQ |";
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
          <div class="col-lg-12 text-center text-lg-start">
            <h2><a href="#"><span>|</span>FAQ (Frequently Asked Questions)</a></h2>
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
          <li>FAQ</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= FAQ Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">
        <div class="row">

          <div class="col-lg-8 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>FAQ <strong>(Frequently Asked Questions)</strong></h3>
              <p>
                Pertanyaan yang sering ditanyakan oleh mahasiswa seputar kemahasiswaan
              </p>
            </div>

            <div class="accordion-list">
            <?php
              $list1=1;
              $list2=1;
              $no=1;
              foreach ($faq->result_array() as $f) :
                $faq_id=$f['id_faq'];
                $faq_pertanyaan=$f['pertanyaan'];
                $faq_jawaban=$f['jawaban'];
            ?>
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-<?php echo $list1++;?>"><span><?php echo $no++;?>.</span> <?php echo $faq_pertanyaan;?> ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-<?php echo $list2++;?>" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      <?php echo $faq_jawaban;?>.
                    </p>
                  </div>
                </li>
                <?php endforeach;?>

              </ul>
            </div>

          </div>

          <div class="col-lg-4 align-items-stretch order-1 order-lg-2 img" style='background-image: url("theme/assets/img/hero/faq.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>

        </div>

      </div>
    </section><!-- End FAQ Why Us Section -->

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