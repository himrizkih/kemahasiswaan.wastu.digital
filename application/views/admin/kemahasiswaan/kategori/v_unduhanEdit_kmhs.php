<div class="card mb-3">
 <div class="card-header">
  <i class="fas fa-table"></i> Ubah Unduhan
 </div>
  <div class="card-body">
     <a href="<?php echo base_url() ?>admin/kemahasiswaan/kategori/unduhan_kmhs" class="btn btn-sm btn-primary float-left" onclick="return confirm('Apakah anda yakin ingin meninggalkan halaman & HAPUS perubahan?')"><i class="fas fa-arrow-left"></i> Kembali</a>
     <br> 
     <p></p>

    <div class="table-responsive">
        <form action="<?php echo base_url() ?>admin/kemahasiswaan/kategori/unduhan_kmhs/edit" method='post' enctype='multipart/form-data'>
            <table class="table table-bordered">    
            <input type="hidden" name="id" value="<?php echo $unduhan['id_unduhan']; ?>">
             <tr>
              <td>Nama File<label style="color: red;">*</label></td>
              <td colspan="3"><input type="text" name="nama" class="form-control" value="<?php echo $unduhan['nama']; ?>" placeholder="Nama File unduhan" required></td>
             </tr>
             <tr>
              <td>Tanggal Unggah<label style="color: red;">*</label></td>
              <td colspan="3"><input type="date" name="tanggal" class="form-control" value="<?php echo $unduhan['tanggal']; ?>" required></td>
             </tr>
             <tr>
              <td colspan="1">Lampiran<label style="color: red;">*</label></td>
              <td>
                <br>
                <input type="file" name="lampiran" required>
                  <br>
                    <a style="font-size: 12px;">Jenis File: pdf | doc | docx | ppt | pptx | zip</a>
                  <br>
                    <a style="font-size: 12px;">Ukuran File Naks.: 10.00MB</a>
              </td>
              <td colspan="2">
                <a href="<?php echo base_url().'theme/assets/file/unduhan/'.$unduhan['lampiran'];?>" style="width:150px;"></a>
                <?php echo $unduhan['lampiran'];?>
                <br>
                <a style="font-size: 14px;">-File sebelum diupdate-</a>
              </td>
             </tr>
             <tr>
              <td colspan='3'>
               <input type="submit" class="btn btn-success float-right" name="update" value="Update Data"></<input>
              </td>
             </tr>
        
            </table>
        </form>
    </div>
  </div>
</div>