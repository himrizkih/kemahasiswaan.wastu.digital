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

  <i class="fas fa-fw fa-spinner fa-2x" style="color: #fff;"></i><a class="navbar-brand mr-1" href="<?php echo base_url() ?>admin/kemahasiswaan/dashboard">Kemahasiswaan</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">

      <!-- departemen Kemahasiswaan organisasi Departemen Kemahasiswaan HUMAS & HUBIN -->
<?php if($this->session->userdata('departemen')=='Kemahasiswaan'&&$this->session->userdata('organisasi')=='Departemen Kemahasiswaan HUMAS & HUBIN'){?>
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
          <a class="dropdown-item" href="<?php echo base_url() ?>admin/kemahasiswaan/dashboard" id="Staf">Kegiatan Terbaru</a>
      </li>

<?PHP } ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i><span> <?php echo $this->session->userdata('nama') ?> </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="<?php echo base_url() ?>admin/kemahasiswaan/masuk/password"><i class="fas fa-fw fa-key"></i> Ganti Password</a>
          <!-- <a class="dropdown-item" href="#">Activity Log</a> -->
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url() ?>admin/kemahasiswaan/masuk/logout" onClick="return confirm('Apakah anda ingin Logout?')"><i class="fas fa-fw fa-arrow-alt-circle-right"></i> Logout</a>
        </div>
      </li>

    </ul>
  </nav>

  <!-- Wrapper Sidebar -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url() ?>admin/kemahasiswaan/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
       
      <?php 
      if($this->session->userdata('departemen')=='Kemahasiswaan'){ ?>
      
      <!-- Sidebar Menu Master Data -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>admin/user">
          <i class="fas fa-fw fa-users"></i>
          <span>Master Data</span>
        </a>
      </li>
      <!-- End Menu Master Data -->

      <!-- Sidebar Menu Beranda -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-archway"></i>
          <span>Beranda</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo base_url() ?>admin/kemahasiswaan/beranda/slider"><i class="fas fa-fw fa-home"></i> Home</a>
          <a class="dropdown-item" href="<?php echo base_url() ?>admin/kemahasiswaan/beranda/quotes"><i class="fas fa-fw fa-heart"></i> Quotes</a>
          <a class="dropdown-item" href="<?php echo base_url() ?>admin/kemahasiswaan/beranda/pengumuman"><i class="fas fa-fw fa-bell"></i> Pengumuman</a>
          <a class="dropdown-item" href="<?php echo base_url() ?>admin/kemahasiswaan/beranda/berita"><i class="fas fa-fw fa-bullhorn"></i> Berita</a>
        </div>
      </li><!-- End Menu Beranda -->

      <!-- Sidebar Menu Profil -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-address-card"></i>
          <span>Profil</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo base_url() ?>admin/kemahasiswaan/profil/sambutan"><i class="fas fa-fw fa-microphone"></i> Sambutan</a>
          <a class="dropdown-item" href="<?php echo base_url() ?>admin/kemahasiswaan/profil/visimisi"><i class="fas fa-fw fa-rocket"></i> Visi dan Misi</a>
          <a class="dropdown-item" href="<?php echo base_url() ?>admin/kemahasiswaan/profil/strukturorganisasi"><i class="fas fa-fw fa-sitemap"></i> Struktur Organisasi</a>
        </div>
      </li><!-- End Menu Profil -->

      <!-- Sidebar Menu Pengajuan -->
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onClick="alert('Under Maintenance.')">
        <i class="fas fa-cash-register"></i>
          <span>Pengajuan</span>
        </a>
        <!-- <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo base_url() ?>admin/approval/proposal">Proposal</a>
          <a class="dropdown-item" href="<?php echo base_url() ?>admin/approval/lpj">LPJ</a>
        </div> -->
      </li><!-- End Menu Pengajuan -->

      <!-- Sidebar Menu Arsip -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onClick="alert('Under Maintenance.')">
        <i class="fas fa-fw fa-book"></i>
          <span>Arsip</span>
        </a>
        <!-- <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo base_url() ?>admin/approval/proposal/arsipProposal">Arsip Proposal</a>
          <a class="dropdown-item" href="<?php echo base_url() ?>admin/approval/lpj/arsipLPJ">Arsip LPJ</a>
        </div> -->
      </li><!-- End Menu Arsip -->

      <!-- Sidebar Menu Kegiatan -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>admin/kemahasiswaan/kegiatan">
          <i class="fas fa-fw fa-archive"></i>
          <span>Kegiatan</span>
        </a>
      </li><!-- End Menu Kegiatan -->

      <!-- Sidebar Menu Unduhan -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>admin/kemahasiswaan/kategori/unduhan_kmhs">
          <i class="fas fa-fw fa-download"></i>
          <span> Unduhan</span>
        </a>
      </li><!-- End Menu Unduhan -->      

      <!-- Sidebar Menu FAQ -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>admin/kemahasiswaan/faq">
          <i class="fas fa-fw fa-assistive-listening-systems"></i>
          <span>FAQ</span>
        </a>
      </li><!-- End Menu FAQ -->

      <!-- Sidebar Menu Logout -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>admin/kemahasiswaan/masuk/logout" onClick="return confirm('Apakah anda ingin Logout?')">
          <i class="fas fa-fw fa-arrow-alt-circle-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Menu Logout -->



      <?php }
      elseif($this->session->userdata('departemen')=='BEM'||'HMJ'||'UKM'){ ?>

        <!-- Sidebar Menu Pengajuan -->
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onClick="alert('Under Maintenance.')">
        <i class="fas fa-cash-register"></i>
          <span>Pengajuan</span>
        </a>
        <!-- <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo base_url() ?>admin/approval/proposal">Proposal</a>
          <a class="dropdown-item" href="<?php echo base_url() ?>admin/approval/lpj">LPJ</a>
        </div> -->
      </li><!-- End Menu Pengajuan -->

      <!-- Sidebar Menu Kegiatan -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>admin/kemahasiswaan/kegiatan">
          <i class="fas fa-fw fa-archive"></i>
          <span>Kegiatan</span>
        </a>
      </li><!-- End Menu Kegiatan -->


      <!-- Sidebar Menu Arsip -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onClick="alert('Under Maintenance.')">
        <i class="fas fa-fw fa-book"></i>
          <span>Arsip</span>
        </a>
        <!-- <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo base_url() ?>admin/approval/proposal/arsipProposal">Arsip Proposal</a>
          <a class="dropdown-item" href="<?php echo base_url() ?>admin/approval/lpj/arsipLPJ">Arsip LPJ</a>
        </div> -->
      </li><!-- End Menu Arsip -->

      <!-- Sidebar Menu Logout -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>admin/kemahasiswaan/masuk/logout" onClick="return confirm('Apakah anda ingin Logout?')">
          <i class="fas fa-fw fa-arrow-alt-circle-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Menu Logout -->

      <?php } ?>
    
    </ul><!-- End Sidebar -->

    <div id="content-wrapper">

      <div class="container-fluid">

<!-- continue to footer -->