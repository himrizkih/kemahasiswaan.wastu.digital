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
        <i class="fas fa-table"></i> Data Visi-Misi
    </div>
        <div class="card-body">
            <?php
            if($this->session->userdata('departemen')!='Kemahasiswaan'){

            // } else{ ?>
            //     <a href="<?php echo base_url() ?>admin/kemahasiswaan/profil/visimisi/add" class="btn btn-sm btn-primary"><i class="fas fa-plus-square"></i> Tambah Data</a><br>
            // <?php 
            
            }
            ?>
        <br> 
    
        <div class="table-responsive">
    
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
             <tr>
              <th>No</th>
              <th>Visi</th>
              <th>Misi</th>
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
             <td><?php echo limit_words($d->visi,3).'...';?></td>
             <td><?php echo limit_words($d->misi,3).'...';?></td>
             <td><?php echo $d->tanggal ?></td>
             
             <td width="200px">
                <a href="<?php echo base_url() ?>admin/kemahasiswaan/profil/visimisi/edit/<?php echo $d->id_visimisi ?>" class="btn btn-sm btn-primary"> Ubah
                </a>
                <!-- <a href="<?php echo base_url() ?>admin/kemahasiswaan/profil/visimisi/delete/<?php echo $d->id_visimisi ?>" onclick="return confirm('Apakah anda yakin ingin menghapus Visi-Misi?')" class="btn btn-sm btn-danger"> Hapus
                </a> -->
                <a href="<?php echo base_url() ?>visi_misi" class="btn btn-sm btn-success" target="_blank"> Review</a>
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