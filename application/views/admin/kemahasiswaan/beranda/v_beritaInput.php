<div class="card mb-3">
 <div class="card-header">
  <i class="fas fa-table"></i> Tambah Berita
 </div>
   <div class="card-body">
    <a href="<?php echo base_url() ?>admin/kemahasiswaan/beranda/berita" class="btn btn-sm btn-primary float-left"><i class="fas fa-arrow-left"></i> Kembali</a>
    <br> 
    <p></p>
    
    <div class="table-responsive">
        <form action="<?php echo base_url() ?>admin/kemahasiswaan/beranda/berita/add" method='post' enctype="multipart/form-data">
            <table class="table table-bordered">            
             <tr>
              <td>Judul<label style="color: red;">*</label></td>
              <td><input type="text" name="judul" class="form-control" placeholder="Judul berita" required></td>
             </tr>
             <tr>
              <td>Tanggal<label style="color: red;">*</label></td>
              <td><input type="date" name="tanggal" class="form-control"  required></td>
             </tr>
             <tr>
              <td>Kategori<label style="color: red;">*</label></td>
               <td>
                <select name="kategori" class="form-control" required>
                    <option value="">-Silahkan Pilih Kategori Berita-</option>
                    <option  value="internal">Internal</option>
                    <option  value="eksternal">Eksternal</option>
                </select>
               </td>
             </tr>
             <tr>
              <td>Redaksi<label style="color: red;">*</label></td>
              <td>
                <!-- <input type="text" name="redaksi" class="form-control" placeholder="Redaksi atau isi berita" required> -->
                <textarea class="ckeditor" name="redaksi" required></textarea>
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