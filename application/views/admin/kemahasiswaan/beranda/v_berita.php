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

<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i> Data Berita
    </div>
        <div class="card-body">
            <?php
            if($this->session->userdata('departemen')!='Kemahasiswaan'){
            
            } else{ ?>
                <a href="<?php echo base_url() ?>admin/kemahasiswaan/beranda/berita/add" class="btn btn-sm btn-primary"><i class="fas fa-plus-square"></i> Tambah Data</a><br>
            <?php }
            ?>
        <br> 
    
        <div class="table-responsive">
    
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
             <tr>
              <th>No</th>
              <th>Gambar</th>
              <th>Judul Berita</th>
              <th>Tanggal</th>
              <th>Kategori</th>
              <th>Author</th>
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
             <td><img src="<?php echo base_url().'theme/assets/img/berita/'.$d->gambar;?>" style="width:50px;"></td>
             <td><?php echo $d->judul ?></td>
             <td><?php echo $d->tanggal ?></td>
             <td><?php 
              if ($d->kategori=='') {
                echo 'Perlu diinput Kategori';
              }else if ($d->kategori=='internal') {
                echo '<span class="badge badge-success">Internal</span>';
              }else if ($d->kategori=='eksternal') {
                echo '<span class="badge badge-warning">Eksternal</span>';
              }
             ?></td>
             <td><?php echo $d->author ?></td>

             <td width="200px">
                <a href="<?php echo base_url() ?>admin/kemahasiswaan/beranda/berita/edit/<?php echo $d->id_berita ?>" class="btn btn-sm btn-primary"> Ubah
                </a>
                <a href="<?php echo base_url() ?>admin/kemahasiswaan/beranda/berita/delete/<?php echo $d->id_berita ?>" onclick="return confirm('Apakah anda yakin ingin menghapus Berita \nJudul Berita: <?php echo $d->judul ?>?')" class="btn btn-sm btn-danger">  Hapus
                </a>
                <a href="<?php echo base_url() ?>beranda" class="btn btn-sm btn-success" target="_blank"> Review</a>
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