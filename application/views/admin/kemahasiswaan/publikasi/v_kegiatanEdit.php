<div class="card mb-3">
 <div class="card-header">
  <i class="fas fa-table"></i> Ubah Kegiatan
 </div>
  <div class="card-body">
     <a href="<?php echo base_url() ?>admin/kemahasiswaan/kegiatan" class="btn btn-sm btn-primary float-left" onclick="return confirm('Apakah anda yakin ingin meninggalkan halaman & HAPUS perubahan?')"><i class="fas fa-arrow-left"></i> Kembali</a>
     <br> 
     <p></p>

    <div class="table-responsive">
        <form action="<?php echo base_url() ?>admin/kemahasiswaan/kegiatan/edit" method='post' enctype='multipart/form-data'>
            <table class="table table-bordered">    
            <input type="hidden" name="id" value="<?php echo $kegiatan['id_kegiatan']; ?>">
             <tr>
              <td>Nama Kegiatan<label style="color: red;">*</label></td>
              <td colspan="3"><input type="text" name="nama" class="form-control" value="<?php echo $kegiatan['nama']; ?>" placeholder="Nama kegiatan" required></td>
             </tr>
             <tr>
              <td>Kategori<label style="color: red;">*</label></td>
               <td  colspan="3">
                <select name="kategori" class="form-control" required>
                    <option value="">-Silahkan Pilih Kategori Kegiatan- ? "Kategori kegiatan berdasarkan pada Tri Dharma Perguruan Tinggi"</option>
                    <option <?php if($kegiatan['kategori']=='pendpenga'){echo 'selected';} ?> value="pendpenga">Pendidikan dan Pengajaran</option>
                    <option <?php if($kegiatan['kategori']=='penlpenge'){echo 'selected';} ?> value="penlpenge">Penelitian dan Pengembangan</option>
                    <option <?php if($kegiatan['kategori']=='pkm'){echo 'selected';} ?> value="pkm">Pengabdian Kepada Masyarakat</option>
                </select>
               </td>
             </tr>
             <tr>
              <td>Peserta<label style="color: red;">*</label></td>
              <td colspan="3"><input type="text" name="peserta" class="form-control" value="<?php echo $kegiatan['peserta']; ?>" placeholder="Peserta Kegiatan" required></td>
             </tr>
             <tr>
              <td>Jumlah Peserta<label style="color: red;">*</label></td>
              <td  colspan="3"><input type="number" name="jumlah_peserta" class="form-control" value="<?php echo $kegiatan['jumlah_peserta']; ?>" placeholder="Jumlah Peserta Kegiatan" required></td>
             </tr>
             <tr>
              <td>Tanggal<label style="color: red;">*</label></td>
              <td colspan="3"><input type="date" name="tanggal" class="form-control" value="<?php echo $kegiatan['tanggal']; ?>" required></td>
             </tr>
             <tr>
              <td>Deskripsi<label style="color: red;">*</label></td>
              <td colspan="3">
                <textarea class="ckeditor" name="deskripsi" required><?php echo $kegiatan['deskripsi']; ?></textarea>
              </td>
             </tr>
             <tr>
              <td>Status<label style="color: red;">*</label></td>
               <td  colspan="3">
                <select name="status" class="form-control" required>
                    <option value="">-Silahkan Pilih Status Kegiatan-</option>
                    <option <?php if($kegiatan['status']=='terpublikasi'){echo 'selected';} ?> value="terpublikasi">Terpublikasi</option>
                    <option <?php if($kegiatan['status']=='tersimpan'){echo 'selected';} ?> value="tersimpan">Tersimpan</option>
                </select>
               </td>
             </tr>
             <tr>
              <td colspan="1">Gambar<label style="color: red;">*</label></td>
              <td>
                <br>
                <input type="file" name="gambar" required>
                  <br>
                    <a style="font-size: 12px;">Jenis File: gif | jpg | png | jpeg | bmp</a>
                  <br>
                    <a style="font-size: 12px;">Ukuran File Maks.: 10.00MB</a>
              </td>
              <td colspan="2">
                <img src="<?php echo base_url().'theme/assets/img/kegiatan/'.$kegiatan['gambar'];?>" style="width:150px;">
                <?php echo $kegiatan['gambar'];?>
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