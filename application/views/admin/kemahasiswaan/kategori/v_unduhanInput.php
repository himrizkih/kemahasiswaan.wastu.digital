<div class="card mb-3">
 <div class="card-header">
  <i class="fas fa-table"></i> Tambah Unduhan
 </div>
   <div class="card-body">
    <a href="<?php echo base_url() ?>admin/kemahasiswaan/kategori/unduhan" class="btn btn-sm btn-primary float-left"><i class="fas fa-arrow-left"></i> Kembali</a>
    <br> 
    <p></p>
    
    <div class="table-responsive">
        <form action="<?php echo base_url() ?>admin/kemahasiswaan/kategori/unduhan/add" method='post' enctype="multipart/form-data">
            <table class="table table-bordered">            
             <tr>
              <td>Nama File<label style="color: red;">*</label></td>
              <td><input type="text" name="nama" class="form-control" placeholder="Nama File Unduhan" required></td>
             </tr>
             <tr>
              <td>Tanggal Unggah<label style="color: red;">*</label></td>
              <td><input type="date" name="tanggal" class="form-control" required></td>
             </tr>
             <tr>
              <td>Lampiran<label style="color: red;">*</label></td>
              <td>
                <input type="file" name="lampiran" required>
                <br>
                <a style="font-size: 12px;">Jenis File: pdf | doc | docx | ppt | pptx | zip</a>
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