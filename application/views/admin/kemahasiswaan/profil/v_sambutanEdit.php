<div class="card mb-3">
 <div class="card-header">
  <i class="fas fa-table"></i> Ubah Sambutan
 </div>
  <div class="card-body">
     <a href="<?php echo base_url() ?>admin/kemahasiswaan/profil/sambutan" class="btn btn-sm btn-primary float-left" onclick="return confirm('Apakah anda yakin ingin meninggalkan halaman & HAPUS perubahan?')"><i class="fas fa-arrow-left"></i> Kembali</a>
     <br> 
     <p></p>

    <div class="table-responsive">
        <form action="<?php echo base_url() ?>admin/kemahasiswaan/profil/sambutan/edit" method='post' enctype='multipart/form-data'>
            <table class="table table-bordered">    
            <input type="hidden" name="id" value="<?php echo $sambutan['id_sambutan']; ?>">
             <tr>
              <td>Nama<label style="color: red;">*</label></td>
              <td colspan="3"><input type="text" name="nama" class="form-control" value="<?php echo $sambutan['nama']; ?>" placeholder="Nama Kepala Staf Kemahasiswaan HUMAS & HUBIN" required></td>
             </tr>
             <tr>
              <td>Sambutan<label style="color: red;">*</label></td>
              <td colspan="3">
                <textarea class="ckeditor" name="sambutan" required><?php echo $sambutan['sambutan']; ?></textarea>
              </td>
             </tr>
             <tr>
              <td colspan="1">Foto<label style="color: red;">*</label></td>
              <td>
                <br>
                <input type="file" name="foto" required>
                  <br>
                    <a style="font-size: 12px;">Jenis File: gif | jpg | png | jpeg | bmp</a>
                  <br>
                    <a style="font-size: 12px;">Ukuran File Maks.: 10.00MB</a>
              </td>
              <td colspan="2">
                <img src="<?php echo base_url().'theme/assets/img/sambutan/'.$sambutan['foto'];?>" style="width:150px;">
                <?php echo $sambutan['foto'];?>
                <br>
                <a style="font-size: 14px;">-File sebelum diupdate-</a>
              </td>
             </tr>
             <tr>
              <td colspan='3'>
               <input type="submit" class="btn btn-success float-right" name="update" value="Update Data"></<input>
              </td>
             </tr>
        
            </table>
        </form>
    </div>
  </div>
</div>

<script src="<?php echo base_url() ?>theme/assets/ckeditor/ckeditor.js"></script>

<script>
  $(function () {
    CKEDITOR.replace('ckeditor');
  });
</script>