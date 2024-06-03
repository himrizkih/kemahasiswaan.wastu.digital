<div class="card mb-3">
 <div class="card-header">
  <i class="fas fa-table"></i> Tambah Quotes
 </div>
   <div class="card-body">
    <a href="<?php echo base_url() ?>admin/kemahasiswaan/beranda/quotes" class="btn btn-sm btn-primary float-left"><i class="fas fa-arrow-left"></i> Kembali</a>
    <br> 
    <p></p>
    
    <div class="table-responsive">
        <form action="<?php echo base_url() ?>admin/kemahasiswaan/beranda/quotes/add" method='post' enctype="multipart/form-data">
            <table class="table table-bordered">            
             <tr>
              <td>Nama<label style="color: red;">*</label></td>
              <td><input type="text" name="nama" class="form-control" placeholder="Nama pemilik Quotes" required></td>
             </tr>
             <tr>
              <td>Status<label style="color: red;">*</label></td>
               <td>
                <select name="status" class="form-control" required>
                    <option value="">-Silahkan Pilih Status Author-</option>
                    <option  value="mahasiswa">Mahasiswa</option>
                    <option  value="dosen">Dosen</option>
                    <option  value="karyawan">Karyawan</option>    
                </select>
               </td>
             </tr>
             <tr>
              <td>Quotes<label style="color: red;">*</label></td>
              <td><textarea rows="2" cols="50" name="quotes" class="form-control" placeholder="Deskripsi Quotes" required></textarea></td>
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