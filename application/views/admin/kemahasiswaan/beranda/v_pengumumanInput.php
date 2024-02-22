<div class="card mb-3">
 <div class="card-header">
  <i class="fas fa-table"></i> Tambah Pengumuman
 </div>
   <div class="card-body">
    <a href="<?php echo base_url() ?>admin/kemahasiswaan/beranda/pengumuman" class="btn btn-sm btn-primary float-left"><i class="fas fa-arrow-left"></i> Kembali</a>
    <br> 
    <p></p>
    
    <div class="table-responsive">
        <form action="<?php echo base_url() ?>admin/kemahasiswaan/beranda/pengumuman/add" method='post' enctype="multipart/form-data">
            <table class="table table-bordered">            
             <tr>
              <td>Pengumuman<label style="color: red;">*</label></td>
              <td><textarea rows="2" cols="50" name="pengumuman" class="form-control" placeholder="Deskripsi Pengumuman" required></textarea></td>
             </tr>
             <tr>
              <td>Status<label style="color: red;">*</label></td>
               <td>
                <select name="status" class="form-control" required>
                    <option value="">-Silahkan Pilih Status Pengumuman-</option>
                    <option  value="terpublikasi">Terpublikasi</option>
                    <option  value="tersimpan">Tersimpan</option>
                </select>
               </td>
             </tr>
              <td colspan='2'>
               <input type="submit" class="btn btn-success float-right" name="simpan" value="Simpan"></<input>
              </td>
             </tr>
           
            </table>
        </form>
    </div>
  </div>
</div>