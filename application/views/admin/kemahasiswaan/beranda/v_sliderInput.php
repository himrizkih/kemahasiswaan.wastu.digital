<div class="card mb-3">
 <div class="card-header">
  <i class="fas fa-table"></i> Tambah Slider
 </div>
   <div class="card-body">
    <a href="<?php echo base_url() ?>admin/kemahasiswaan/beranda/slider" class="btn btn-sm btn-primary float-left"><i class="fas fa-arrow-left"></i> Kembali</a>
    <br> 
    <p></p>
    
    <div class="table-responsive">
        <form action="<?php echo base_url() ?>admin/kemahasiswaan/beranda/slider/add" method='post' enctype="multipart/form-data">
            <table class="table table-bordered">            
             <tr>
              <td>Deskripsi</td>
              <td><input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi Slider (Optional)"></td>
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