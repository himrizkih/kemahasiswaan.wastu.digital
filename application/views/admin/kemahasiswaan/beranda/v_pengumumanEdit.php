<div class="card mb-3">
 <div class="card-header">
  <i class="fas fa-table"></i> Ubah Pengumuman
 </div>
   <div class="card-body">
    <a href="<?php echo base_url() ?>admin/kemahasiswaan/beranda/pengumuman" class="btn btn-sm btn-primary float-left" onclick="return confirm('Apakah anda yakin ingin meninggalkan halaman & HAPUS perubahan?')"><i class="fas fa-arrow-left"></i> Kembali</a>
     <br> 
     <p></p>

    <div class="table-responsive">
        <form action="<?php echo base_url() ?>admin/kemahasiswaan/beranda/pengumuman/edit" method='post' enctype='multipart/form-data'>
            <table class="table table-bordered">    
            <input type="hidden" name="id" value="<?php echo $pengumuman['id_pengumuman']; ?>">
             <tr>
              <td>Pengumuman<label style="color: red;">*</label></td>
              <td><input type="text" name="pengumuman" class="form-control" value="<?php echo $pengumuman['pengumuman']; ?>" placeholder="Deskripsi Pengumuman" required></td>
             </tr>
             <tr>
              <td>Status<label style="color: red;">*</label></td>
               <td>
                <select name="status" class="form-control" required>
                    <option value="">-Silahkan Pilih Status Pengumuman-</option>
                    <option <?php if($pengumuman['status']=='terpublikasi'){echo 'selected';} ?> value="terpublikasi">Terpublikasi</option>
                    <option <?php if($pengumuman['status']=='tersimpan'){echo 'selected';} ?> value="tersimpan">Tersimpan</option>
                </select>
               </td>
             </tr>
             <tr>
              <td colspan='2'>
               <input type="submit" class="btn btn-success float-right" name="update" value="Update Data"></<input>
              </td>
             </tr>
        
            </table>
        </form>
    </div>
  </div>
</div>