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
        <i class="fas fa-table"></i> Data Kegiatan
    </div>
        <div class="card-body">
            <?php
            if($this->session->userdata('departemen')=='Kemahasiswaan'||'BEM'||'HMJ'||'UKM'){ ?>
                <a href="<?php echo base_url() ?>admin/kemahasiswaan/kegiatan/add" class="btn btn-sm btn-primary"><i class="fas fa-plus-square"></i> Tambah Data</a><br>
            <?php
            } 
            ?>

        <br> 
    
        <div class="table-responsive">
    
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
             <tr>
              <th>No</th>
              <th>Nama Kegiatan</th>
              <th>Foto</th>
              <th>Kategori</th>
              <th>Organisasi</th>
              <th>Status</th>
              <th>Action</th>
             </tr>
            </thead>
        <tbody>
            <?php $no=1; ?>
            <?php
                foreach ($user as $d){ 
                  // $id_user=$this->session->userdata('id_user');
                  // $d=$this->db->query("SELECT * FROM kegiatan WHERE id_kegiatan='$id_kegiatan'");
                  // $d->row_array();
            ?>
            <tr>
             <td><?php echo $no++;?></td>
             <td><?php echo $d->nama ?></td>
             <td><img src="<?php echo base_url().'theme/assets/img/kegiatan/'.$d->gambar;?>" style="width:50px;"></td>
             <td><?php 
              if ($d->kategori=='') {
                echo '<span class="badge badge-danger">Perlu diinput Kategori Kegiatan</span>';
              }else if ($d->kategori=='pendpenga') {
                echo 'Pendidikan dan Pengajaran';
              }else if ($d->kategori=='penlpenge') {
                echo 'Penelitian dan Pengembangan';
              }else if ($d->kategori=='pkm') {
                echo 'Pengabdian Kepada Masyarakat';
              }
             ?></td>
             <td><?php echo $d->ormawa ?></td>
             <td><?php 
              if ($d->status=='') {
                echo 'Perlu diinput Status';
              }else if ($d->status=='terpublikasi') {
                echo '<span class="badge badge-success">Terpublikasi</span>';
              }else if ($d->status=='tersimpan') {
                echo '<span class="badge badge-warning">Tersimpan</span>';
              }
             ?></td>

             <td width="200px">
                <a href="<?php echo base_url() ?>admin/kemahasiswaan/kegiatan/edit/<?php echo $d->id_kegiatan ?>" class="btn btn-sm btn-primary"> Ubah
                </a>
                <a href="<?php echo base_url() ?>admin/kemahasiswaan/kegiatan/delete/<?php echo $d->id_kegiatan ?>" onclick="return confirm('Apakah anda yakin ingin menghapus Kegiatan \nNama Kegiatan: <?php echo $d->nama ?>?')" class="btn btn-sm btn-danger">  Hapus
                </a>
                <a href="<?php echo base_url() ?>kegiatan" class="btn btn-sm btn-success" target="_blank"> Review</a>
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