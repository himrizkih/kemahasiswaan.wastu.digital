<!-- ======= Header-//135 ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="<?php echo base_url().''?>"><img src ="<?php echo base_url().'theme/assets/img/hero/logo-navbar.png'?>"><span>|</span>Kemahasiswaan</a></h1>
        <h4>Sekolah Tinggi Teknologi Wastukancana</h4>
      </div>

      <?php 
      if($this->session->userdata('status')=='mhs'){ ?>
      <!-- navbar-//428 -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?php echo base_url().'beasiswa'?>">Beranda</a></li>

          <!-- <li><a href="<?php echo base_url().'beasiswa'?>">Beasiswa</a></li> -->

          <li class="dropdown"><a href="#"><span>Beasiswa</span><i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo base_url().'./beasiswa/lokal'?>">Lokal</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a href="<?php echo base_url().'./beasiswa/wilayah'?>">Wilayah</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a href="<?php echo base_url().'./beasiswa/nasional'?>">Nasional</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a href="<?php echo base_url().'./beasiswa/internasional'?>">Internasional</a></li>
            </ul>
          </li>

          <li><a href="<?php echo base_url().'./beasiswa/beasiswa_penerima'?>">Penerima</a></li>

          <!-- <li><a href="<?php echo base_url().'./beasiswa/beasiswa_faq'?>">FAQ</a></li> -->

          <!-- <li><a href="<?php echo base_url().'./notifikasi'?>">Notifikasi</a></li> -->

          <li class="dropdown"><a href="#"><img src="<?php echo base_url().'theme/assets/img/beasiswa/user.jpg'?>" class="rounded-circle"><span><?php echo $this->session->userdata('nama') ?></span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li><a href="<?php echo base_url().'./profil'?>"><b>Akun</b></a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a href="<?php echo base_url().'./profil/beasiswa'?>"><b>Beasiswaku</b></a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a href="<?php echo base_url().'admin/kemahasiswaan/masuk_bea_mhs/logout'?>" onClick="return confirm('Apakah anda ingin Logout ?')">Keluar</a></li>
            </ul>
          </li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- End navbar -->

      <?php }
      else{ ?>
      <!-- navbar -->
      <nav style="font-weight: 700px;" id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?php echo base_url().'beasiswa'?>">Beranda</a></li>

          <!-- <li><a href="<?php echo base_url().'beasiswa'?>">Beasiswa</a></li> -->

          <li class="dropdown"><a href="#"><span>Beasiswa</span><i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo base_url().'./beasiswa/lokal'?>">Lokal</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a href="<?php echo base_url().'./beasiswa/wilayah'?>">Wilayah</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a href="<?php echo base_url().'./beasiswa/nasional'?>">Nasional</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a href="<?php echo base_url().'./beasiswa/internasional'?>">Internasional</a></li>
            </ul>
          </li>

          <li><a href="<?php echo base_url().'./beasiswa/beasiswa_penerima'?>">Penerima</a></li>

          <!-- <li><a href="<?php echo base_url().'./beasiswa/beasiswa_faq'?>">FAQ</a></li> -->

          <li><a class="getstarted" href="<?php echo base_url().'beasiswa/masuk'?>"><img src="<?php echo base_url().'theme/assets/img/beasiswa/user.jpg'?>" class="rounded-circle"> Masuk</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- End navbar -->

      <?php } ?>

    </div>
  </header>
<!-- End Header -->