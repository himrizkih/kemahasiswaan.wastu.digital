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

<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i> Data Quotes
    </div>
        <div class="card-body">
            <?php
            if($this->session->userdata('departemen')!='Kemahasiswaan'){

            } else{ ?>
                <a href="<?php echo base_url() ?>admin/kemahasiswaan/beranda/quotes/add" class="btn btn-sm btn-primary"><i class="fas fa-plus-square"></i> Tambah Data</a><br>
            <?php }
            ?>
        <br> 
    
        <div class="table-responsive">
    
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
             <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Status</th>
              <th>Quotes</th>
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
             <td><?php echo $d->nama ?></td>
             <td><?php 
              if ($d->status=='') {
                echo 'Perlu diinput Status';
              }else if ($d->status=='mahasiswa') {
                echo 'Mahasiswa';
              }elseif ($d->status=='dosen') {
                echo 'Dosen';
              }elseif ($d->status=='karyawan') {
                echo 'Karyawan';
              }
             ?></td>
             <td><?php echo $d->quotes ?></td>
             
             <td width="200px">
                <a href="<?php echo base_url() ?>admin/kemahasiswaan/beranda/quotes/edit/<?php echo $d->id_quotes ?>" class="btn btn-sm btn-primary"> Ubah
                </a>
                <a href="<?php echo base_url() ?>admin/kemahasiswaan/beranda/quotes/delete/<?php echo $d->id_quotes ?>" onclick="return confirm('Apakah anda yakin ingin menghapus Quotes \nNama: <?php echo $d->nama ?>?')" class="btn btn-sm btn-danger"> Hapus
                </a>
                <a href="<?php echo base_url() ?>beranda/#testimonials" class="btn btn-sm btn-success" target="_blank"> Review</a>
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