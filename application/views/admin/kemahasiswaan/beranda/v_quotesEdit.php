<div class="card mb-3">
 <div class="card-header">
  <i class="fas fa-table"></i> Ubah Quotes
 </div>
   <div class="card-body">
    <a href="<?php echo base_url() ?>admin/kemahasiswaan/beranda/quotes" class="btn btn-sm btn-primary float-left" onclick="return confirm('Apakah anda yakin ingin meninggalkan halaman & HAPUS perubahan?')"><i class="fas fa-arrow-left"></i> Kembali</a>
     <br> 
     <p></p>

    <div class="table-responsive">
        <form action="<?php echo base_url() ?>admin/kemahasiswaan/beranda/quotes/edit" method='post' enctype='multipart/form-data'>
            <table class="table table-bordered">    
            <input type="hidden" name="id" value="<?php echo $quotes['id_quotes']; ?>">
             <tr>
              <td>Nama<label style="color: red;">*</label></td>
              <td><input type="text" name="nama" class="form-control" value="<?php echo $quotes['nama']; ?>" placeholder="Nama pemilik Quotes" required></td>
             </tr>
             <tr>
              <td>Status<label style="color: red;">*</label></td>
               <td>
                <select name="status" class="form-control" required>
                    <option value="">-Silahkan Pilih Status Author-</option>
                    <option <?php if($quotes['status']=='mahasiswa'){echo 'selected';} ?> value="mahasiswa">Mahasiswa</option>
                    <option <?php if($quotes['status']=='dosen'){echo 'selected';} ?> value="dosen">Dosen</option>
                    <option <?php if($quotes['status']=='karyawan'){echo 'selected';} ?> value="karyawan">Karyawan</option>    
                </select>
               </td>
             </tr>
             <tr>
              <td>Quotes<label style="color: red;">*</label></td>
              <td><input type="text" name="quotes" class="form-control" value="<?php echo $quotes['quotes']; ?>" placeholder="Deskripsi Quotes" required></td>
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