<div class="card mb-3">
 <div class="card-header">
  <i class="fas fa-table"></i> Tambah Sambutan
 </div>
   <div class="card-body">
    <a href="<?php echo base_url() ?>admin/kemahasiswaan/profil/sambutan" class="btn btn-sm btn-primary float-left"><i class="fas fa-arrow-left"></i> Kembali</a>
    <br> 
    <p></p>
    
    <div class="table-responsive">
        <form action="<?php echo base_url() ?>admin/kemahasiswaan/profil/sambutan/add" method='post' enctype="multipart/form-data">
            <table class="table table-bordered">            
             <tr>
              <td>Nama<label style="color: red;">*</label></td>
              <td><input type="text" name="nama" class="form-control" placeholder="Nama Kepala Staf Kemahasiswaan HUMAS & HUBIN" required></td>
             </tr>
             <tr>
              <td>Sambutan<label style="color: red;">*</label></td>
              <td>
                <!-- <input type="text" name="sambutan" class="form-control" placeholder="Sambutan" required> -->
                <textarea class="ckeditor" name="sambutan" required></textarea>
              </td>
             </tr>
             <tr>
              <td>Foto<label style="color: red;">*</label></td>
              <td>
                <input type="file" name="foto" required>
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