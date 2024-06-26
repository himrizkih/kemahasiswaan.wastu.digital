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
  var txt=" Kemahasiswaan | Login Sistem Informasi Kemahasiswaan | Beasiswa |";
  var kecepatan=500;var segarkan=null;function bergerak() { document.title=txt;
  txt=txt.substring(1,txt.length)+txt.charAt(0);
  segarkan=setTimeout("bergerak()",kecepatan);}bergerak();
  </script>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>theme/assets/vendor/admin/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="<?= base_url() ?>theme/assets/img/admin/stt.png">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>theme/assets/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
  
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"><center>Login Mahasiswa</center></div>
      <div class="card-body">

      <?php 
  if(isset($_GET['pesan']))
  { 
    if($_GET['pesan'] == "salah")
      { 
        echo "<div class='alert alert-danger'>Maaf periksa kembali Username dan Password anda</div>"; 
      }else if($_GET['pesan'] == "logout")
      { 
        echo "<div class='alert alert-success'>Anda telah Logout</div>";
      }else if($_GET['pesan'] == "sukses")
      { 
        echo "<div class='alert alert-success'>Password berhasil diubah</div>";
      }else if($_GET['pesan'] == "belumlogin")
      { 
        echo "<div class='alert alert-danger'>Maaf anda belum Login.<br/>Silahkan Login dengan Username...(NIM) dan Password anda.</div>";
      }else if($_GET['pesan'] == "berkaspersyaratan")
      { 
        echo "<div class='alert alert-info'><strong>Berkas Persyaratan |</strong>Hanya dapat dilampirkan dalam 1 (satu) file PDF</div>";
      } 
      // else { 
      //   echo "<div class='alert alert-danger'>Data Gagal Disimpan.</div>";
      // }
  } 
?>

        <form action="<?php echo base_url() ?>admin/kemahasiswaan/masuk_bea_mhs/proses" method="post">
          <div class="logo">
            <h1><a href=""><img src ="<?php echo base_url().'theme/assets/img/hero/logo-navbar.png'?>"><span>|</span>Kemahasiswaan</a></h1>
            <h4>Sekolah Tinggi Teknologi Wastukancana</h4>
          </div>
        <br>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="userName" class="form-control" name="username" placeholder="Username...(NIM)" required="required" autofocus="autofocus">
              <label for="useraName">Username...(NIM)</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password..." required="required">
              <label for="inputPassword">Password...</label>
            </div>
          </div>
         
          <button type="submit" class="btn btn-info btn-block">Login</button>

          <div class="link">
            <h5 style="margin-bottom: -20px;"><a href="<?php echo base_url().'beasiswa'?>">Kembali ke Beranda</a></h5>
            <h5><a href="<?php echo base_url().'beasiswa/masuk'?>">Masuk sebagai?</a></h5>
          </div>

        </form>

      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>theme/assets/vendor/admin/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>theme/assets/vendor/admin/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>theme/assets/vendor/admin/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
