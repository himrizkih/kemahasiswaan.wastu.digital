<div class="card mb-3">
 <div class="card-header">
  <i class="fas fa-table"></i> Tambah Kegiatan
 </div>
   <div class="card-body">
    <a href="<?php echo base_url() ?>admin/kemahasiswaan/kegiatan" class="btn btn-sm btn-primary float-left"><i class="fas fa-arrow-left"></i> Kembali</a>
    <br> 
    <p></p>
    
    <div class="table-responsive">
        <form action="<?php echo base_url() ?>admin/kemahasiswaan/kegiatan/add" method='post' enctype="multipart/form-data">
            <table class="table table-bordered">            
             <tr>
              <td>Nama Kegiatan<label style="color: red;">*</label></td>
              <td><input type="text" name="nama" class="form-control" placeholder="Nama Kegiatan" required></td>
             </tr>
             <tr>
              <td>Kategori<label style="color: red;">*</label></td>
               <td>
                <select name="kategori" class="form-control" required>
                    <option value="">-Silahkan Pilih Kategori Kegiatan- ? "Kategori kegiatan berdasarkan pada Tri Dharma Perguruan Tinggi"</option>
                    <option  value="pendpenga">Pendidikan dan Pengajaran</option>
                    <option  value="penlpenge">Penelitian dan Pengembangan</option>
                    <option  value="pkm">Pengabdian Kepada Masyarakat</option>
                </select>
               </td>
             </tr>
             <tr>
              <td>Peserta<label style="color: red;">*</label></td>
              <td><input type="text" name="peserta" class="form-control" placeholder="Peserta Kegiatan" required></td>
             </tr>
             <tr>
              <td>Jumlah Peserta<label style="color: red;">*</label></td>
              <td><input type="number" name="jumlah_peserta" class="form-control" placeholder="Jumlah Peserta Kegiatan" required></td>
             </tr>
             <tr>
              <td>Tanggal<label style="color: red;">*</label></td>
              <td><input type="date" name="tanggal" class="form-control"  required></td>
             </tr>
             <tr>
              <td>Deskripsi<label style="color: red;">*</label></td>
              <td>
                <!-- <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi Kegiatan" required> -->
                <textarea class="ckeditor" name="deskripsi" required></textarea>
              </td>
             </tr>
             <!-- <tr>
              <td>Status</td>
               <td>
                <select name="status" class="form-control">
                    <option value="">-Silahkan Pilih Status Kegiatan-</option>
                    <option  value="terpublikasi">Terpublikasi</option>
                    <option  value="tersimpan">Tersimpan</option>
                </select>
               </td>
             </tr> -->
             <tr>
              <td>Gambar<label style="color: red;">*</label></td>
              <td>
                <input type="file" name="gambar" multiple="" required>
                <br>
                <a style="font-size: 12px;">Jenis File: gif | jpg | png | jpeg | bmp</a>
                <br>
                <a style="font-size: 12px;">Ukuran File Maks.: 10.00MB</a>
              </td>
             </tr>
             <tr>
              <td colspan='2'>
               <input type="submit" class="btn btn-success float-right" name="simpan" value="Simpan"></<input>
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