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
        <i class="fas fa-table"></i> Data Sambutan
    </div>
        <div class="card-body">
            <?php
            if($this->session->userdata('departemen')!='Kemahasiswaan'){
            
            // } else{ ?>
            //     <a href="<?php echo base_url() ?>admin/kemahasiswaan/profil/sambutan/add" class="btn btn-sm btn-primary"><i class="fas fa-plus-square"></i> Tambah Data</a><br>
            // <?php 

            }
            ?>
        <br> 
    
        <div class="table-responsive">
    
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
             <tr>
              <th>No</th>
              <th>Foto</th>
              <th>Nama</th>
              <th>Sambutan</th>
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
             <td><img src="<?php echo base_url().'theme/assets/img/sambutan/'.$d->foto;?>" style="width:50px;"></td>
             <td><?php echo $d->nama ?></td>
             <td><?php echo limit_words($d->sambutan,8).'...';?></td>
             <td><?php echo $d->tanggal ?></td>

             <td width="200px">
                <a href="<?php echo base_url() ?>admin/kemahasiswaan/profil/sambutan/edit/<?php echo $d->id_sambutan ?>" class="btn btn-sm btn-primary"> Ubah
                </a>
                <!-- <a href="<?php echo base_url() ?>admin/kemahasiswaan/profil/sambutan/delete/<?php echo $d->id_sambutan ?>" onclick="return confirm('Apakah anda yakin ingin menghapus Sambutan?')" class="btn btn-sm btn-danger">  Hapus
                </a> -->
                <a href="<?php echo base_url() ?>sambutan" class="btn btn-sm btn-success" target="_blank"> Review</a>
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