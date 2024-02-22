<div class="card mb-3">
 <div class="card-header">
  <i class="fas fa-table"></i> Tambah Beasiswa
 </div>
   <div class="card-body">
    <a href="<?php echo base_url() ?>admin/kemahasiswaan/kategori/beasiswa" class="btn btn-sm btn-primary float-left"><i class="fas fa-arrow-left"></i> Kembali</a>
    <br> 
    <p></p>
    
    <div class="table-responsive">
        <form action="<?php echo base_url() ?>admin/kemahasiswaan/kategori/beasiswa/add" method='post' enctype="multipart/form-data">
            <table class="table table-bordered">            
             <tr>
              <td>Beasiswa<label style="color: red;">*</label></td>
              <td><input type="text" name="nama" class="form-control" placeholder="Nama Beasiswa" required></td>
             </tr>
             <tr>
              <td>Deskripsi<label style="color: red;">*</label></td>
              <td>
                <!-- <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi Beasiswa" required> -->
                <textarea class="ckeditor" name="deskripsi" required></textarea>  
              </td>
             </tr>
             <tr>
              <td>Persyaratan<label style="color: red;">*</label></td>
              <td>
                <textarea class="ckeditor" name="persyaratan" required></textarea>
              </td>
             </tr>
             <tr>
              <td>Keunggulan<label style="color: red;">*</label></td>
              <td>
                <textarea class="ckeditor" name="keunggulan" required></textarea>
              </td>
             </tr>
             <tr>
              <td>Tanggal Penting<label style="color: red;">*</label></td>
              <td>
                <textarea class="ckeditor" name="tanggal_penting" required></textarea>
              </td>
             </tr>
             <tr>
              <td>Kategori<label style="color: red;">*</label></td>
               <td>
                <select name="kategori" class="form-control" required>
                    <option value="">-Silahkan Pilih Kategori Beasiswa- ? "Kategori beasiswa berdasarkan pada jenis beasiswa yang diselenggarakan"</option>
                    <option  value="lokal">Beasiswa Lokal</option>
                    <option  value="wilayah">Beasiswa Wilayah</option>
                    <option  value="nasional">Beasiswa Nasional</option>
                    <option  value="internasional">Beasiswa Internasional</option>
                </select>
               </td>
             </tr>
             <tr>
              <td>Status<label style="color: red;">*</label></td>
               <td>
                <select name="status" class="form-control" required>
                    <option value="">-Silahkan Pilih Status Upload Beasiswa-</option>
                    <option  value="terpublikasi">Terpublikasi</option>
                    <option  value="tersimpan">Tersimpan</option>
                </select>
               </td>
             </tr>
             <tr>
              <td>Link Pendaftaran<label style="color: red;">*</label></td>
              <td><input type="text" name="link_pendaftaran" class="form-control" placeholder="Link Pendaftaran Beasiswa" required>
                <a style="font-size: 12px;">Inputkan "<b>../beasiswa_daftar</b>" tanpa tanda petik untuk Form Pendaftaran yang disediakan</a>
              </td>
             </tr>
             <tr>
              <td>Gambar<label style="color: red;">*</label></td>
              <td>
                <input type="file" name="gambar" required>
                <br>
                <a style="font-size: 12px;">Jenis File: gif | jpg | png | jpeg | bmp</a>
                <br>
                <a style="font-size: 12px;">Ukuran File Maks.: 10.00MB</a>
              </td>
             </tr>

             <tr>
              <td>Kuota Beasiswa<br>Mahasiswa<label style="color: red;">*</label></td>
              <td><input type="number" name="kuota_mhs" class="form-control" placeholder="Kuota Beasiswa untuk Mahasiswa" required></td>
             </tr>
             <tr>
              <td>Kuota Beasiswa<br>Teknik Informatika<label style="color: red;">*</label></td>
              <td><input type="number" name="kuota_if" class="form-control" placeholder="Kuota Beasiswa untuk Teknik Informatika" required></td>
             </tr>
             <tr>
              <td>Kuota Beasiswa<br>Teknik Mesin<label style="color: red;">*</label></td>
              <td><input type="number" name="kuota_tm" class="form-control" placeholder="Kuota Beasiswa untuk Teknik Mesin" required></td>
             </tr>
             <tr>
             <td>Kuota Beasiswa<br>Teknik Industri<label style="color: red;">*</label></td>
              <td><input type="number" name="kuota_ti" class="form-control" placeholder="Kuota Beasiswa untuk Teknik Industri" required></td>
             </tr>
             <tr>
             <td>Kuota Beasiswa<br>Manajemen Industri<label style="color: red;">*</label></td>
              <td><input type="number" name="kuota_mi" class="form-control" placeholder="Kuota Beasiswa untuk Manajemen Industri" required></td>
             </tr>
             <tr>
              <td>Kuota Beasiswa<br>Teknik Tekstil<label style="color: red;">*</label></td>
              <td><input type="number" name="kuota_teks" class="form-control" placeholder="Kuota Beasiswa untuk Teknik Tekstil" required></td>
             </tr>

             <tr>
              <td colspan='2'>
               <!-- <a style="font-size: 12px;">Untuk Kuota Beasiswa Masing-Masing Program Studi, Apabila Tidak Ada dimohon diisi dengan Angka <b>0</b></a> -->
                  <div class='alert alert-warning'><span class="fas fa-warning">Perhatian!</span> Untuk Kuota Beasiswa setiap Program Studi, apabila tidak ada dimohon diisi dengan Angka <b>0</b>.</div>
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