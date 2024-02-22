<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kemahasiswaan - Unduhan</title>

  <!-- Slider Title -->
  <script language="JavaScript">
  var txt=" Kemahasiswaan - Unduhan |";
  var kecepatan=500;var segarkan=null;function bergerak() { document.title=txt;
  txt=txt.substring(1,txt.length)+txt.charAt(0);
  segarkan=setTimeout("bergerak()",kecepatan);}bergerak();
  </script>

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>theme/assets/css/sb-admin.css" rel="stylesheet">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url() ?>theme/assets/vendor/admin/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <?php $this->load->view('layout/v_script');?>
  
</head>

<body>

  <?php $this->load->view('layout/v_header');?>

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h2><a href="#"><span>|</span>Unduhan</a></h2>
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
          <li>Unduhan</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Download Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Unduhan</h2>
          <p>Kemahasiswaan STT Wastukancana</p>
        </div>

    <div class="col-xl-12 col-sm-12 mb-3">
      <div class="card">
    
        <div style="margin-bottom: 20px; font-weight: bold; font-size: 16px;" class="card-header">
          <center><strong>Tabel Data Unduhan</strong></center>
        </div>
          
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="10" border="2">
              <thead>
               <tr style="text-align:center;">
                  <th>No</th>
                  <th>Nama File</th>
                  <th>Tanggal Unggah</th>
                  <th>Aksi</th>
               </tr>
              </thead>
            <tbody>
              <?php
                $no=1;
                foreach ($unduhan->result() as $row):
              ?>
                <tr style="text-align:center;">
                  <td><?php echo $no++;?></td>
                  <td><?php echo $row->nama;?></td>
                  <td><?php echo $row->tanggal;?></td>
                  <td><a href="<?php echo site_url('unduhan/get_file/'.$row->id_unduhan);?>" onclick="return confirm('Apakah anda ingin mengunduh File <?php echo $row->nama;?> ?')" class="btn btn-sm btn-info" style="color: white;" >Unduh</a></td>
                </tr>
              <?php endforeach;?>
            </tbody>
            </table>
          </div>
        </div>

      </div>
    </div><!-- ======= End Penerima Section ======= -->

      </div>
    </section><!-- End Download Section -->

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


  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>theme/assets/vendor/admin/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>theme/assets/vendor/admin/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>theme/assets/vendor/admin/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url() ?>theme/assets/vendor/admin/chart.js/Chart.min.js"></script>
  <script src="<?php echo base_url() ?>theme/assets/vendor/admin/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo base_url() ?>theme/assets/vendor/admin/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>theme/assets/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url() ?>theme/assets/js/demo/datatables-demo.js"></script>
  <script src="<?php echo base_url() ?>theme/assets/js/demo/chart-area-demo.js"></script>

</body>

</html>