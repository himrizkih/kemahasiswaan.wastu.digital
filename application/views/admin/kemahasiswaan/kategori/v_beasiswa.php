<?php
  if(isset($_GET['pesan']))
  { 
    if($_GET['pesan'] == "berhasil_input")
      { 
        echo "<div class='alert alert-success'>Data Berhasil ditambah.</div>"; 
      }else if($_GET['pesan'] == "berhasil_edit")
      { 
        echo "<div class='alert alert-success'>Data Berhasil diubah.</div>";
      }else if($_GET['pesan'] == "berhasil_hapus")
      { 
        echo "<div class='alert alert-danger'>Data Berhasil dihapus.</div>";
      }else if($_GET['pesan'] == "upload_gagal")
      { 
        echo "<div class='alert alert-danger'>Maaf Data Gagal disimpan! Periksa Kembali Data yang akan disimpan</div>";
      } else { 
        echo "<div class='alert alert-danger'>Data Gagal disimpan.</div>";
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
        <i class="fas fa-table"></i> Data Beasiswa
    </div>
        <div class="card-body">
            <?php
            if($this->session->userdata('departemen')!='Kemahasiswaan'){
            
            } else{ ?>
                <a href="<?php echo base_url() ?>admin/kemahasiswaan/kategori/beasiswa/add" class="btn btn-sm btn-primary"><i class="fas fa-plus-square"></i> Tambah Data</a><br>
            <?php }
            if($this->session->userdata('status')!='kmhs'){
            
            } else{ ?>
                <a href="<?php echo base_url() ?>admin/kemahasiswaan/kategori/beasiswa/add" class="btn btn-sm btn-primary"><i class="fas fa-plus-square"></i> Tambah Data</a><br>
            <?php }
            ?>
        <br> 
    
        <div class="table-responsive">
    
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
             <tr>
              <th>No</th>
              <th>Gambar</th>
              <th>Beasiswa</th>
              <th>Deskripsi</th>
              <!-- <th>Persyaratan</th>
              <th>Keunggulan</th>
              <th>Tanggal Penting</th> -->
              <th>Kategori</th>
              <th>Link Pendaftaran</th>
              <th>Status</th>
              <th>Tanggal Unggah</th>
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
             <td><img src="<?php echo base_url().'theme/assets/img/beasiswa/'.$d->gambar;?>" style="width:50px;"></td>
             <td><?php echo $d->nama ?></td>
             <td><?php echo limit_words($d->deskripsi,5).'...';?></td>
             <!-- <td><?php echo limit_words($d->persyaratan,5).'...';?></td>
             <td><?php echo limit_words($d->keunggulan,5).'...';?></td>
             <td><?php echo limit_words($d->tanggal_penting,5).'...';?></td> -->
             <td><?php 
              if ($d->kategori=='') {
                echo '<span class="badge badge-danger">Perlu diinput Kategori Beasiswa</span>';
              }else if ($d->kategori=='lokal') {
                echo 'Beasiswa Lokal';
              }else if ($d->kategori=='wilayah') {
                echo 'Beasiswa Wilayah';
              }else if ($d->kategori=='nasional') {
                echo 'Beasiswa Nasional';
              }else if ($d->kategori=='internasional') {
                echo 'Beasiswa Internasional';
              }
             ?></td>
             <td><?php echo $d->link_pendaftaran ?></td>
             <td><?php 
              if ($d->status=='') {
                echo '<span class="badge badge-danger">Perlu diinput';
                echo '<br>status upload';
              }else if ($d->status=='terpublikasi') {
                echo '<span class="badge badge-success">Terpublikasi</span>';
              }else if ($d->status=='tersimpan') {
                echo '<span class="badge badge-warning">Tersimpan</span>';
              }
             ?></td>
             <td><?php echo $d->tanggal ?></td>

             <td width="200px">
                <a href="<?php echo base_url() ?>admin/kemahasiswaan/kategori/beasiswa/edit/<?php echo $d->id_beasiswa ?>" class="btn btn-sm btn-primary"> Ubah
                </a>
                <a href="<?php echo base_url() ?>admin/kemahasiswaan/kategori/beasiswa/delete/<?php echo $d->id_beasiswa ?>" onclick="return confirm('Apakah anda yakin ingin menghapus Beasiswa <?php echo $d->nama ?> ?')" class="btn btn-sm btn-danger">  Hapus
                </a>
                <a href="<?php echo base_url() ?>beasiswa" class="btn btn-sm btn-success" target="_blank"> Review</a>
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