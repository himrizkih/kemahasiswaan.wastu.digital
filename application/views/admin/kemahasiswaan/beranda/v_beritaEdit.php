<div class="card mb-3">
 <div class="card-header">
  <i class="fas fa-table"></i> Ubah Berita
 </div>
  <div class="card-body">
     <a href="<?php echo base_url() ?>admin/kemahasiswaan/beranda/berita" class="btn btn-sm btn-primary float-left" onclick="return confirm('Apakah anda yakin ingin meninggalkan halaman & HAPUS perubahan?')"><i class="fas fa-arrow-left"></i> Kembali</a>
     <br> 
     <p></p>

    <div class="table-responsive">
        <form action="<?php echo base_url() ?>admin/kemahasiswaan/beranda/berita/edit" method='post' enctype='multipart/form-data'>
            <table class="table table-bordered">    
            <input type="hidden" name="id" value="<?php echo $berita['id_berita']; ?>">
             <tr>
              <td>Judul<label style="color: red;">*</label></td>
              <td colspan="3"><input type="text" name="judul" class="form-control" value="<?php echo $berita['judul']; ?>" placeholder="Judul berita" required></td>
             </tr>
             <tr>
              <td>Tanggal<label style="color: red;">*</label></td>
              <td colspan="3"><input type="date" name="tanggal" class="form-control" value="<?php echo $berita['tanggal']; ?>" required></td>
             </tr>
             <tr>
              <td>Kategori<label style="color: red;">*</label></td>
               <td colspan="3">
                <select name="kategori" class="form-control" required>
                    <option value="">-Silahkan Pilih Kategori Berita-</option>
                    <option <?php if($berita['kategori']=='internal'){echo 'selected';} ?> value="internal">Internal</option>
                    <option <?php if($berita['kategori']=='eksternal'){echo 'selected';} ?> value="eksternal">Eksternal</option>
                </select>
               </td>
             </tr>
             <tr>
              <td>Redaksi<label style="color: red;">*</label></td>
              <td colspan="3">
                <textarea class="ckeditor" name="redaksi" required><?php echo $berita['redaksi']; ?></textarea>
              </td>
             </tr>
             <tr>
              <td colspan="1">Gambar</td>
              <td>
                <br>
                <input type="file" name="gambar">
                  <br>
                    <a style="font-size: 12px;">Jenis File: gif | jpg | png | jpeg | bmp</a>
                  <br>
                    <a style="font-size: 12px;">Ukuran File Maks.: 10.00MB</a>
              </td>
              <td colspan="2">
                <img src="<?php echo base_url().'theme/assets/img/berita/'.$berita['gambar'];?>" style="width:150px;">
                <?php echo $berita['gambar'];?>
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