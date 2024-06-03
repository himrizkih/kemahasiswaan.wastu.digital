<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kemahasiswaan - Beasiswa - Pengajuan </title>

  <!-- Slider Title -->
  <script language="JavaScript">
  var txt=" Kemahasiswaan - Beasiswa - Pengajuan |";
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

  <?php $this->load->view('layout/v_header_bea');?>

    <!-- ======= Cta Title Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-12 text-center text-lg-start">
            <h2><a href="#"><span>|</span>Beasiswaku</a></h2>
            <h3>Sistem Informasi Pelayanan Beasiswa | Kemahasiswaan STT Wastukancana</h3>
          </div>
        </div>

      </div>
    </section><!-- End Cta Title Section -->

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container"  data-aos="zoom-in">

        <ol>
          <li><a href="<?php echo base_url().'beasiswa'?>">Beranda</a></li>
          <li>Beasiswaku</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Penerima Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Daftar Proses Pengajuan Beasiswa</h2>
          <p>Berikut Detail dari Proses Pengajuan Beasiswa</p>
        </div>

    <div class="col-xl-12 col-sm-12 mb-3">
      <div class="card">

<?php
  if(isset($_GET['pesan']))
  { 
    if($_GET['pesan'] == "berhasil_input")
      { 
        echo "<div class='alert alert-success'>Data Pengajuan Beasiswa Berhasil disubmit.</div>"; 
    }else if($_GET['pesan'] == "berhasil_edit")
      { 
        echo "<div class='alert alert-success'>Data Pengajuan Beasiswa Berhasil diubah.</div>";
    }else if($_GET['pesan'] == "upload_gagal")
      { 
        echo "<div class='alert alert-danger'>Maaf Data Gagal disubmit! Periksa Kembali Data yang akan disubmit</div>";
        echo "<div class='alert alert-info'>Berkas Persyaratan. Hanya dapat dilampirkan dalam 1 (satu) file PDF.<br/>Selengkapnya lihat ketentuan file pada kolom isian Berkas Persyaratan. Semangaaat!</div>";
    }else if($_GET['pesan'] == "input_duplikat")
      { 
        echo "<div class='alert alert-danger'>Maaf Data Gagal disubmit! Data Telah Terdaftar dalam Jenis Beasiswa yang sama.</div>";
    } else { 
        echo "<div class='alert alert-danger'>Data Gagal disimpan.</div>";
      }
  } 
?>
    
        <div style="margin-bottom: 20px; font-weight: bold; font-size: 16px;" class="card-header">
          <center><strong>Tabel Proses Pengajuan Beasiswa</strong></center>
        </div>
          
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="10" border="2">
              <thead>
               <tr style="text-align:center;">
                <th scope="col">No</th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">NIM</th>
                <th scope="col">Program Studi</th>
                <th scope="col">Jenis Beasiswa</th>
                <th scope="col">Tanggal Pengajuan</th>
                <th scope="col">Status Pengajuan</th>
                <th scope="col">Action</th>
               </tr>
              </thead>
            <tbody>
              <?php
                $no=1;
                foreach ($pendaftar->result_array() as $b) :
                  $pendaftar_id=$b['id_pendaftar'];
                  $pendaftar_id_mhs=$b['id_mhs'];
                  $pendaftar_nama_mhs=$b['nama_mhs'];
                  $pendaftar_nim=$b['nim'];
                  $pendaftar_prodi=$b['prodi'];
                  $pendaftar_nomor_hp=$b['nomor_hp'];
                  $pendaftar_status=$b['status'];
                  $pendaftar_status_baca=$b['status_baca'];
                  $pendaftar_nama_bea=$b['nama_bea'];
                  $pendaftar_kategori=$b['kategori'];
                  $pendaftar_tanggal=$b['tanggal'];
              ?>
              <tr style="text-align:center;">
                <td><?php echo $no++;?></td>
                <td><?php echo $pendaftar_nama_mhs;?></td>
                <td><?php echo $pendaftar_nim;?></td>
                <td><?php 
                      if ($pendaftar_prodi=='') {
                        echo '<span class="badge badge-danger">Perlu diinput Prodi Mahasiswa</span>';
                      }else if ($pendaftar_prodi=='mhs') {
                        echo 'Mahasiswa';
                      }else if ($pendaftar_prodi=='if') {
                        echo 'Teknik Informatika';
                      }else if ($pendaftar_prodi=='tm') {
                        echo 'Teknik Mesin';
                      }else if ($pendaftar_prodi=='ti') {
                        echo 'Teknik Industri';
                      }else if ($pendaftar_prodi=='mi') {
                        echo 'Manajemen Industri';
                      }else if ($pendaftar_prodi=='teks') {
                        echo 'Teknik Tekstil';
                      }
                    ?>
                </td>
                <td><?php echo $pendaftar_nama_bea?></td>
                <td><?php echo $pendaftar_tanggal;?></td>
                <td><?php
                    if ($pendaftar_status==1) {
                        echo '<span class="badge bg-warning">Proses Seleksi</span>';
                    }else if ($pendaftar_status==2) {
                        echo '<span class="badge bg-success">Disetujui Kaprodi</span>';
                    }else if ($pendaftar_status==3) {
                        echo '<span class="badge bg-danger">Ditolak</span>';
                    }else if ($pendaftar_status_baca==0) {
                        echo '<span class="badge bg-secondary">Menunggu Persetujuan<br/> Kaprodi</span>';
                    }else if ($pendaftar_status_baca==1) {
                        echo '<span class="badge bg-warning">Proses Seleksi</span>';
                    }
                    ?>
                </td>
                <td width="200px">
                <?php if ($pendaftar_status==3) { ?>
                	<a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#ModalUbah<?php echo $pendaftar_id;?>" href=""> Ubah
                	</a>
                	<a class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalDetail<?php echo $pendaftar_id;?>" href=""> Detail
                	</a>
                <?php }else{?>
                  <a class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalDetail<?php echo $pendaftar_id;?>" href=""> Detail
                  </a>
                	<!-- <a class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalDetail<?php echo $pendaftar_id;?>" href="<?php echo base_url() ?>beasiswa_daftar/detail/<?php echo $pendaftar_id ?>"> Detail
                	</a> -->
                <?php } ?>
             	</td>
              </tr>
              <?php endforeach;?>
            </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  
  </div>
</section><!-- ======= End Penerima Section ======= -->

<!-- ======== Modal Detail Pengajuan Beasiswa ======= -->            
<?php
  $no=1;
  foreach ($pendaftar->result_array() as $b) :
    $pendaftar_id=$b['id_pendaftar'];
    $pendaftar_id_mhs=$b['id_mhs'];
    $pendaftar_nama_mhs=$b['nama_mhs'];
    $pendaftar_nim=$b['nim'];
    $pendaftar_prodi=$b['prodi'];
    $pendaftar_nomor_hp=$b['nomor_hp'];
    $pendaftar_status=$b['status'];
    $pendaftar_status_baca=$b['status_baca'];
    $pendaftar_nama_bea=$b['nama_bea'];
    $pendaftar_kategori=$b['kategori'];
    $pendaftar_tanggal=$b['tanggal'];
?>

  <div class="modal fade" id="ModalDetail<?php echo $pendaftar_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
          <h5 style="float: left;" class="modal-title" id="myModalLabel">Detail Pengajuan Beasiswa</h5>
        </div>

        <form class="form-horizontal" action="<?php echo base_url() ?>beasiswa_daftar/detail" method="post" enctype="multipart/form-data">
          <div class="modal-body">
                                
          <div class="form-group">
            <table class="table table-striped" id="display">
              <tbody>
                <tr>
                  <td width="200px"><strong>Nama Mahasiswa</strong></td>
                  <td>: </td>
                  <td> <?php echo $pendaftar_nama_mhs;?></td>
                </tr>
                <tr>
                  <td width="200px"><strong>NIM</strong></td>
                  <td>: </td>
                  <td> <?php echo $pendaftar_nim;?></td>
                </tr>
                <tr>
                  <td><strong>Program Studi</strong></td>
                  <td>: </td>
                  <td><?php 
                      if ($pendaftar_prodi=='') {
                        echo '<span class="badge badge-danger">Perlu diinput Prodi Mahasiswa</span>';
                      }else if ($pendaftar_prodi=='mhs') {
                        echo 'Mahasiswa';
                      }else if ($pendaftar_prodi=='if') {
                        echo 'Teknik Informatika';
                      }else if ($pendaftar_prodi=='tm') {
                        echo 'Teknik Mesin';
                      }else if ($pendaftar_prodi=='ti') {
                        echo 'Teknik Industri';
                      }else if ($pendaftar_prodi=='mi') {
                        echo 'Manajemen Industri';
                      }else if ($pendaftar_prodi=='teks') {
                        echo 'Teknik Tekstil';
                      }
                    ?>
                  </td>
                </tr>
                <tr>
                  <td width="200px"><strong>Nomor HP</strong></td>
                  <td>: </td>
                  <td> <?php echo $pendaftar_nomor_hp;?></td>
                </tr>
                <tr>
                  <td><strong>Status Pengajuan</strong></td>
                  <td>: </td>
                  <td><?php
                    if ($pendaftar_status==1) {
                        echo '<span class="badge bg-warning">Proses Seleksi</span>';
                    }else if ($pendaftar_status==2) {
                        echo '<span class="badge bg-success">Disetujui Kaprodi</span>';
                    }else if ($pendaftar_status==3) {
                        echo '<span class="badge bg-danger">Ditolak</span>';
                    }else if ($pendaftar_status_baca==0) {
                        echo '<span class="badge bg-secondary">Menunggu Persetujuan<br/> Kaprodi</span>';
                    }else if ($pendaftar_status_baca==1) {
                        echo '<span class="badge bg-warning">Proses Seleksi</span>';
                    }
                    ?>    
                  </td>
                </tr>
                <tr>
                  <td width="200px"><strong>Jenis Beasiswa</strong></td>
                  <td>: </td>
                  <td> <?php echo $pendaftar_nama_bea?></td>
                </tr>
                <tr>
                  <td><strong>Kategori Beasiswa</strong></td>
                  <td>: </td>
                  <td><?php 
                      if ($pendaftar_kategori=='') {
                        echo '<span class="badge badge-danger">Perlu diinput Kategori Beasiswa</span>';
                      }else if ($pendaftar_kategori=='lokal') {
                        echo 'Beasiswa Lokal';
                      }else if ($pendaftar_kategori=='wilayah') {
                        echo 'Beasiswa Wilayah';
                      }else if ($pendaftar_kategori=='nasional') {
                        echo 'Beasiswa Nasional';
                      }else if ($pendaftar_kategori=='internasional') {
                        echo 'Beasiswa Internasional';
                      }
                    ?>
                  </td>
                </tr>
                <tr>
                  <td width="200px"><strong>Tanggal Pengajuan</strong></td>
                  <td>: </td>
                  <td> <?php echo $pendaftar_tanggal;?></td>
                </tr>
              </tbody>
            </table>
          </div>

          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach;?>
<!-- ======== Modal Detail Pengajuan Beasiswa ======= -->

<!-- ======== Modal Ubah Pengajuan Beasiswa ======= -->            
<?php
  $no=1;
  foreach ($pendaftar->result_array() as $b) :
    $pendaftar_id=$b['id_pendaftar'];
    $pendaftar_id_mhs=$b['id_mhs'];
    $pendaftar_nama_mhs=$b['nama_mhs'];
    $pendaftar_nim=$b['nim'];
    $pendaftar_prodi=$b['prodi'];
    $pendaftar_nomor_hp=$b['nomor_hp'];
    $pendaftar_status=$b['status'];
    $pendaftar_status_baca=$b['status_baca'];
    $pendaftar_nama_bea=$b['nama_bea'];
    $pendaftar_kategori=$b['kategori'];
    $pendaftar_tanggal=$b['tanggal'];
?>

  <div class="modal fade" id="ModalUbah<?php echo $pendaftar_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
          <h5 style="float: left;" class="modal-title" id="myModalLabel">Ubah Pengajuan Beasiswa</h5>
        </div>

        <form class="form-horizontal" action="<?php echo base_url() ?>beasiswa_daftar/edit" method="post" enctype="multipart/form-data">
          <div class="modal-body">

            <input type="hidden" name="id" value="<?php echo $pendaftar_id;?>"/>
            <input type="hidden" name="pendaftar_id_mhs" value="<?php echo $pendaftar_id_mhs;?>"/>

            <div class="form-group">
              <label for="inputNama" class="col-sm-6 control-label">Nama</label>
              <div class="col-sm-12">
                <input name="pendaftar_nama_mhs" class="form-control" value="<?php echo $pendaftar_nama_mhs;?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label for="inputNim" class="col-sm-6 control-label">NIM</label>
              <div class="col-sm-12">
                <input name="pendaftar_nim" class="form-control" value="<?php echo $pendaftar_nim;?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label for="inputProdi" class="col-sm-4 control-label">Program Studi</label>
              <div class="col-sm-12">
                <input type="hidden" class="form-control" name="pendaftar_prodi" value="<?php 
                    if ($pendaftar_prodi=='mhs') {
                      echo 'mhs';
                    }else if ($pendaftar_prodi=='if') {
                      echo 'if';
                    }else if ($pendaftar_prodi=='tm') {
                      echo 'tm';
                    }else if ($pendaftar_prodi=='ti') {
                      echo 'ti';
                    }else if ($pendaftar_prodi=='mi') {
                      echo 'mi';
                    }else if ($pendaftar_prodi=='teks') {
                      echo 'teks';
                    }?>" readonly>
                <input type="text" class="form-control" name="" value="<?php 
                    if ($pendaftar_prodi=='mhs') {
                      echo 'Mahasiswa';
                    }else if ($pendaftar_prodi=='if') {
                      echo 'Teknik Informatika';
                    }else if ($pendaftar_prodi=='tm') {
                      echo 'Teknik Mesin';
                    }else if ($pendaftar_prodi=='ti') {
                      echo 'Teknik Industri';
                    }else if ($pendaftar_prodi=='mi') {
                      echo 'Manajemen Industri';
                    }else if ($pendaftar_prodi=='teks') {
                      echo 'Teknik Tekstil';
                    }?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label for="inputBeasiswa" class="col-sm-6 control-label"> Beasiswa</label>
              <div class="col-sm-12">
                <textarea name="pendaftar_nama_bea" class="form-control" readonly><?php echo $pendaftar_nama_bea;?>
                </textarea>
              </div>
            </div>

            <input hidden="hidden" type="text" class="form-control" name="pendaftar_kategori" placeholder="kategori" value="<?php echo $pendaftar_kategori;?>" required>
              <input hidden="hidden" type="text" class="form-control" name="pendaftar_tanggal" placeholder="tanggal" value="<?php echo date('d-m-Y');?>" required>
              <input hidden="hidden" type="text" class="form-control" name="pendaftar_status" placeholder="status" value="0" required>
              <input hidden="hidden" type="text" class="form-control" name="pendaftar_status_baca" placeholder="status_baca" value="0" required>

            <div class="form-group">
              <label for="inputNohp" class="col-sm-6 control-label">Nomor HP</label>
              <div class="col-sm-12">
                <input name="pendaftar_nomor_hp" class="form-control" value="<?php echo $pendaftar_nomor_hp;?>" readonly>
              </div>
            </div>
                                   
            <div class="form-group">
              <label class="col-sm-12">Berkas Persyaratan<label style="color: red;">*</label></label>
              <div class="col-sm-12">
                <input type="file" class="form-control" name="lampiran" required>
                <label style="font-size: 12px;" class="form-label">
                    File number limit: 1, Max size : 10MB, file type: PDF<br/></label>
              </div>
            </div>

            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" required>
                  <label style="color: red;font-size: 12px;: " class="form-check-label">
                    SAYA MENYATAKAN DENGAN SEBENARNYA DATA YANG SAYA ISI ADALAH BENAR. SEGALA KEKURANGAN DAN KELENGKAPAN DATA ADALAH TANGGUNG JAWAB PENDAFTAR.<br/>
                  </label>
                  <div class="invalid-feedback">
                    You must agree before submitting.
                  </div>
              </div>
            </div>

          </div>
          
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" name="update" href="<?php echo base_url() ?>beasiswa_daftar/edit/<?php echo $pendaftar_id;?>">Submit</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach;?>
<!-- ======== Modal Detail Pengajuan Beasiswa ======= -->


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