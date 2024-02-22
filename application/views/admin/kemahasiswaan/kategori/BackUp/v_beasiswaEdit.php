<div class="card mb-3">
 <div class="card-header">
  <i class="fas fa-table"></i> Ubah Beasiswa
 </div>
  <div class="card-body">
     <a href="<?php echo base_url() ?>admin/kemahasiswaan/kategori/beasiswa" class="btn btn-sm btn-primary float-left"><i class="fas fa-arrow-left"></i> Kembali</a>
     <br> 
     <p></p>

    <div class="table-responsive">
        <form action="<?php echo base_url() ?>admin/kemahasiswaan/kategori/beasiswa/edit" method='post' enctype='multipart/form-data'>
            <table class="table table-bordered">    
            <input type="hidden" name="id" value="<?php echo $beasiswa['id_beasiswa']; ?>">
             <tr>
              <td>Beasiswa<label style="color: red;">*</label></td>
              <td colspan="3"><input type="text" name="nama" class="form-control" placeholder="Nama Beasiswa" value="<?php echo $beasiswa['nama']; ?>" required></td>
             </tr>
             <tr>
              <td>Deskripsi<label style="color: red;">*</label></td>
              <td colspan="3">
                <!-- <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi Beasiswa" value="<?php echo $beasiswa['deskripsi']; ?>" required> -->
                <textarea class="ckeditor" name="deskripsi" required><?php echo $beasiswa['deskripsi']; ?></textarea>
              </td>
             </tr>
             <tr>
              <td>Persyaratan<label style="color: red;">*</label></td>
              <td colspan="3">
                <textarea class="ckeditor" name="persyaratan" required><?php echo $beasiswa['persyaratan']; ?></textarea>
              </td>
             </tr>
             <tr>
              <td>Keunggulan<label style="color: red;">*</label></td>
              <td colspan="3">
                <textarea class="ckeditor" name="keunggulan" required><?php echo $beasiswa['keunggulan']; ?></textarea>
              </td>
             </tr>
             <tr>
              <td>Tanggal Penting<label style="color: red;">*</label></td>
              <td colspan="3">
                <textarea class="ckeditor" name="tanggal_penting" required><?php echo $beasiswa['tanggal_penting']; ?></textarea>
              </td>
             </tr>
             <tr>
              <td>Kategori<label style="color: red;">*</label></td>
               <td colspan="3">
                <select name="kategori" class="form-control" required>
                    <option value="">-Silahkan Pilih Kategori Beasiswa- ? "Kategori beasiswa berdasarkan pada jenis beasiswa yang diselenggarakan"</option>
                    <option <?php if($beasiswa['kategori']=='lokal'){echo 'selected';} ?> value="lokal">Beasiswa Lokal</option>
                    <option <?php if($beasiswa['kategori']=='wilayah'){echo 'selected';} ?> value="wilayah">Beasiswa Wilayah</option>
                    <option <?php if($beasiswa['kategori']=='nasional'){echo 'selected';} ?> value="nasional">Beasiswa Nasional</option>
                    <option <?php if($beasiswa['kategori']=='internasional'){echo 'selected';} ?> value="internasional">Beasiswa Internasional</option>
                </select>
               </td>
             </tr>
             <tr>
              <td>Status<label style="color: red;">*</label></td>
               <td colspan="3">
                <select name="status" class="form-control" required>
                    <option value="">-Silahkan Pilih Status Upload Beasiswa-</option>
                    <option <?php if($beasiswa['status']=='terpublikasi'){echo 'selected';} ?> value="terpublikasi">Terpublikasi</option>
                    <option <?php if($beasiswa['status']=='tersimpan'){echo 'selected';} ?> value="tersimpan">Tersimpan</option>
                </select>
               </td>
             </tr>
             <tr>
              <td>Link Pendaftaran<label style="color: red;">*</label></td>
              <td colspan="3"><input type="text" name="link_pendaftaran" class="form-control" placeholder="Link Pendaftaran Beasiswa" value="<?php echo $beasiswa['link_pendaftaran']; ?>"required>
                <a style="font-size: 12px;">Inputkan "<b>../beasiswa_daftar</b>" tanpa tanda petik untuk Form Pendaftaran yang disediakan</a>
              </td>
             </tr>
             <tr>
              <td colspan="1">Gambar<label style="color: red;">*</label></td>
              <td>
                <br>
                <input type="file" name="gambar" required>
                  <br>
                    <a style="font-size: 12px;">Jenis File : gif | jpg | png | jpeg | bmp</a>
                  <br>
                    <a style="font-size: 12px;">Ukuran File : 2.00MB</a>
              </td>
              <td colspan="2">
                <img src="<?php echo base_url().'theme/assets/img/beasiswa/'.$beasiswa['gambar'];?>" style="width:150px;">
                <?php echo $beasiswa['gambar'];?>
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
    // Replace the <textarea class="editor1"> with a CKEditor
    // instance, using default configuration.
  
    CKEDITOR.replace('ckeditor');
   
  });
</script>