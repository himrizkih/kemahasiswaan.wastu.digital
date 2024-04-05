<!-- ======= Header-//135 ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="<?php echo base_url().''?>"><img src ="<?php echo base_url().'theme/assets/img/hero/logo-navbar.png'?>"><span>|</span>Kemahasiswaan</h1>
        <h4>Sekolah Tinggi Teknologi Wastukancana</h4></a>
      </div>

      <!-- navbar-//428 -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?php echo base_url().'beranda'?>">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo base_url().'sambutan'?>">Sambutan Ka. STAF KMH HUMAS & HUBIN </a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a href="<?php echo base_url().'visi_misi'?>">Visi dan Misi</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a href="<?php echo base_url().'struktur'?>">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url().'beasiswa'?>" target='_blank'>Beasiswa</a></li>

          <!-- for 3 levels navbar -->
          <!-- <li class="dropdown"><a href="#"><span>Kategori</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo base_url().'beasiswa'?>">Beasiswa</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a href="<?php echo base_url().'unduhan'?>">Unduhan</a></li> -->
              <!-- <li class="dropdown"><a href="#"><span>Kategori 2</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Kategori 2.1</a></li>
                  <li><a href="#">Kategori 2.2</a></li>
                </ul>
              </li>
              <li><a href="#">Kategori 3</a></li> -->
            <!-- </ul>
          </li> -->

          <li><a href="" onClick="alert('Comingsoon!')">Ormawa</a></li>
          <li><a href="<?php echo base_url().'kegiatan'?>">Kegiatan</a></li>
          <li><a href="<?php echo base_url().'galeri'?>">Galeri</a></li>
          <!-- <li><a href="<?php echo base_url().'unduhan'?>">Unduhan</a></li> -->
          <li><a href="<?php echo base_url().'kontak'?>">Kontak</a></li>
          <li><a href="<?php echo base_url().'faq'?>">FAQ</a></li>
          <li><a href="<?php echo base_url().'pengguna'?>" class="getstarted" >Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- End navbar -->

    </div>
  </header>
<!-- End Header -->