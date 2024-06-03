<?php
  if(isset($_GET['pesan']))
  { 
    if($_GET['pesan'] == "berhasil_input")
      { 
        echo "<div class='alert alert-success'>Data Berhasil ditambah.</div>"; 
      }else if($_GET['pesan'] == "berhasil_edit")
      { 
                          echo "<div class='alert alert-success'>Data Berhasil Diubah.</div>";
      }else if($_GET['pesan'] == "berhasil_hapus")
      { 
          echo "<div class='alert alert-danger'>Data Berhasil dihapus.</div>";
      } else { 
                      echo "<div class='alert alert-danger'>Data Gagal Disimpan.</div>";
                  }
  } 
?>

<?php
  error_reporting(0);
  function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
    }

?>

<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Data Penerima Beasiswa</div>
    <div class="card-body">

      <div class="float-right">
        <?php
            if($this->session->userdata('status')=='kmhs'){ ?>
            <a style="margin-bottom: 20px;" href="<?php echo base_url() ?>admin/kemahasiswaan/beasiswa/penerima/excel" class="btn btn-success"><i class="fas fa-file-download"> Unduh Data Penerima Beasiswa</i></a>
            <?php
            } 
            ?>
      </div>

    <div class="table-responsive">
    
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr align="center">
        <th>No</th>
        <th>Nama Mahasiswa</th>
        <th>NIM</th>
        <th>Prodi</th>
        <th>Beasiswa</th>
        <th>Pengajuan</th>
        <th>Nomor HP</th>
        <th>Status</th>
        <th>Action</th>

        </tr>
    </thead>
    <tbody>
            <?php $no=1; ?>
        <?php
            foreach ($user as $d){ 
        ?>
        <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $d->nama_mhs ?></td>
        <td><?php echo $d->nim ?></td>
        <td><?php 
              if ($d->prodi=='') {
                echo '<span class="badge badge-danger">Perlu diinput Prodi Mahasiswa</span>';
              }else if ($d->prodi=='mhs') {
                echo 'Mahasiswa';
              }else if ($d->prodi=='if') {
                echo 'Teknik Informatika';
              }else if ($d->prodi=='tm') {
                echo 'Teknik Mesin';
              }else if ($d->prodi=='ti') {
                echo 'Teknik Industri';
              }else if ($d->prodi=='mi') {
                echo 'Manajemen Industri';
              }else if ($d->prodi=='teks') {
                echo 'Teknik Tekstil';
              }
             ?></td>
        <td><?php echo limit_words($d->nama_bea,5).'...';?></td>
        <td><?php echo $d->tanggal ?></td>
        <td><?php echo $d->nomor_hp ?></td>
        <td><center><?php 
        if ($d->status==0) {
            echo '<span class="badge badge-secondary">Menunggu Persetujuan<br/> Kaprodi</span>';
        }else if ($d->status==1) {
            echo '<span class="badge badge-warning">Proses Seleksi</span>';
        }elseif ($d->status==2) {
            echo '<span class="badge badge-success">Disetujui Kaprodi</span>';
        }elseif ($d->status==3) {
            echo '<span class="badge badge-danger">Ditolak</span>';
        }
        
        ?></center>
        </td>
        <td width="150px">
          <center>
            <a href="<?php echo base_url() ?>admin/kemahasiswaan/beasiswa/pendaftar/detail_penerima/<?php echo $d->id_pendaftar ?>" class="btn btn-success">Detail</a>
          </center>
        </td>
        </tr>
        <?php
            } 
        ?>
    </tbody>
</table>
</div>
</div>
</div>