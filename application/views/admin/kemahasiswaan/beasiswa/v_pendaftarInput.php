<div class="card mb-3">
 <div class="card-header">
  <i class="fas fa-table"></i> Tambah Data Rekomendasi Beasiswa
 </div>
   <div class="card-body">
    <a href="<?php echo base_url() ?>admin/kemahasiswaan/beasiswa/pendaftar" class="btn btn-sm btn-primary float-left"><i class="fas fa-arrow-left"></i> Kembali</a>
    <br> 
    <p></p>
    
    <div class="table-responsive">
        <form action="<?php echo base_url() ?>admin/kemahasiswaan/beasiswa/pendaftar/add" method='post' enctype="multipart/form-data">
            <table class="table table-bordered">   
            <input hidden="hidden" type="number" class="form-control" name="id_mhs" placeholder="id_mhs" value="0" required>         
             <tr>
              <td>Nama Mahasiswa</td>
              <td><input type="text" name="nama_mhs" class="form-control" placeholder="Nama Mahasiswa" required></td>
             </tr>
             <tr>
              <td>NIM</td>
              <td><input type="text" name="nim" class="form-control" placeholder="NIM" required></td>
             </tr>
             <tr>
              <td>Program Studi</td>
               <td>
                <select name="prodi" class="form-control" required>
                  <option value="">---Silahkan Pilih Program Studi--- "Sesuai dengan Program Studi Mahasiswa yang direkomendasikan"</option>
                    <option  value="mhs">Mahasiswa</option>
                    <option  value="if">Teknik Informatika</option>
                    <option  value="tm">Teknik Mesin</option>
                    <option  value="ti">Teknik Industri</option>
                    <option  value="mi">Manajemen Industri</option>
                    <option  value="teks">Teknik Tekstil</option>
                </select>
               </td>
             </tr>
             <tr>
              <td>Nomor HP</td>
              <td><input type="text" name="nomor_hp" class="form-control" placeholder="Nomor HP Mahasiswa, ---isikan '-' tanpa petik, jika tidak ada---"  required></td>
             </tr>

             <input hidden="hidden" type="text" class="form-control" name="nama_bea" placeholder="nama_bea" value="0" required>
             <input hidden="hidden" type="text" class="form-control" name="kategori" placeholder="kategori" value="0" required>
              <input hidden="hidden" type="text" class="form-control" name="tanggal" placeholder="tanggal" value="<?php echo date('d-m-Y');?>" required>
              <input hidden="hidden" type="text" class="form-control" name="status" placeholder="status" value="0" required>
              <input hidden="hidden" type="text" class="form-control" name="status_baca" placeholder="status_baca" value="0" required>

              <tr>
              <td>Berkas Persyaratan</td>
              <td>
                <input type="file" name="lampiran" required>
                <br>
                  <a style="font-size: 12px;">File number limit: 1, Max size : 10MB, file type: PDF</a>
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