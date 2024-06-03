<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Slider Title -->
  <script language="JavaScript">
  var txt=" Sistem Informasi Kemahasiswaan |";
  var kecepatan=500;var segarkan=null;function bergerak() { document.title=txt;
  txt=txt.substring(1,txt.length)+txt.charAt(0);
  segarkan=setTimeout("bergerak()",kecepatan);}bergerak();
  </script>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>theme/assets/vendor/admin/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="<?= base_url() ?>theme/assets/img/admin/stt.png">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url() ?>theme/assets/vendor/admin/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>theme/assets/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  <i class="fas fa-fw fa-spinner fa-2x" style="color: #fff;"></i><a class="navbar-brand mr-1" href="<?php echo base_url() ?>./dashboard">Kemahasiswaan</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">

<!-- Status Kemahasiswaan & Status Kaprodi -->
<?php if($this->session->userdata('status')=='kmhs'||'if'||'tm'||'ti'||'mi'||'teks'){?>
  <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="total"> 
        </a>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="<?php echo base_url() ?>./dashboard" id="">Beasiswa Terbaru</a>
      </li>

<?PHP } ?>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i><span> <?php echo $this->session->userdata('nama') ?> </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="<?php echo base_url() ?>admin/kemahasiswaan/masuk_bea_dsn/logout" onClick="return confirm('Apakah anda ingin Logout ?')"><i class="fas fa-fw fa-arrow-alt-circle-right"></i> Logout</a>
        </div>
      </li>

    </ul>
  </nav>

  <!-- Wrapper Sidebar -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url() ?>./dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
       
      <?php 
      if($this->session->userdata('status')=='kmhs'){ ?>

      <!-- Sidebar Menu Beasiswa -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>admin/kemahasiswaan/kategori/beasiswa">
          <i class="fas fa-fw fa-trophy"></i>
          <span>Kelola Beasiswa</span>
        </a>
      </li><!-- End Menu Beasiswa -->

      <!-- Sidebar Menu Unduhan -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>admin/kemahasiswaan/kategori/unduhan">
          <i class="fas fa-fw fa-download"></i>
          <span>Unduhan</span>
        </a>
      </li>
      <!-- End Menu Unduhan -->

      <!-- Sidebar Menu Pendaftar Beasiswa -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>admin/kemahasiswaan/beasiswa/pendaftar">
          <i class="fas fa-fw fa-cash-register"></i>
          <span>Pendaftar Beasiswa</span>
        </a>
      </li><!-- End Menu Pendaftar Beasiswa -->

      <!-- Sidebar Menu Penerima Beasiswa -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>admin/kemahasiswaan/beasiswa/penerima">
          <i class="fas fa-fw fa-book"></i>
          <span>Penerima Beasiswa</span>
        </a>
      </li><!-- End Menu Penerima Beasiswa -->

      <!-- Sidebar Menu FAQ -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>admin/kemahasiswaan/faq">
          <i class="fas fa-fw fa-assistive-listening-systems"></i>
          <span>FAQ</span>
        </a>
      </li> --><!-- End Menu FAQ -->

      <!-- Sidebar Menu Logout -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>admin/kemahasiswaan/masuk_bea_dsn/logout" onClick="return confirm('Apakah anda ingin Logout ?')">
          <i class="fas fa-fw fa-arrow-alt-circle-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Menu Logout -->



      <?php }
      elseif($this->session->userdata('status')=='if'||'tm'||'ti'||'mi'||'teks'){ ?>

      <!-- Sidebar Menu Pendaftar Beasiswa -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>admin/kemahasiswaan/beasiswa/pendaftar">
          <i class="fas fa-fw fa-cash-register"></i>
          <span>Pendaftar Beasiswa</span>
        </a>
      </li><!-- End Menu Pendaftar Beasiswa -->

      <!-- Sidebar Menu Penerima Beasiswa -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>admin/kemahasiswaan/beasiswa/penerima">
          <i class="fas fa-fw fa-book"></i>
          <span>Penerima Beasiswa</span>
        </a>
      </li><!-- End Menu Penerima Beasiswa -->

      <!-- Sidebar Menu Logout -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>admin/kemahasiswaan/masuk_bea_dsn/logout" onClick="return confirm('Apakah anda ingin Logout ?')">
          <i class="fas fa-fw fa-arrow-alt-circle-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Menu Logout -->

      <?php } ?>
    
    </ul><!-- End Sidebar -->

    <div id="content-wrapper">

      <div class="container-fluid">

<!-- continue to footer -->