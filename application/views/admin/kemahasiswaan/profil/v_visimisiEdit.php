<div class="card mb-3">
 <div class="card-header">
  <i class="fas fa-table"></i> Ubah Visi-Misi
 </div>
   <div class="card-body">
    <a href="<?php echo base_url() ?>admin/kemahasiswaan/profil/visimisi" class="btn btn-sm btn-primary float-left" onclick="return confirm('Apakah anda yakin ingin meninggalkan halaman & HAPUS perubahan?')"><i class="fas fa-arrow-left"></i> Kembali</a>
     <br> 
     <p></p>

    <div class="table-responsive">
        <form action="<?php echo base_url() ?>admin/kemahasiswaan/profil/visimisi/edit" method='post' enctype='multipart/form-data'>
            <table class="table table-bordered">    
            <input type="hidden" name="id" value="<?php echo $visimisi['id_visimisi']; ?>">
             <tr>
              <td>Visi<label style="color: red;">*</label></td>
              <td colspan="3">
                <textarea class="ckeditor" name="visi" required><?php echo $visimisi['visi']; ?></textarea>
              </td>
             </tr>
             <tr>
              <td>Misi<label style="color: red;">*</label></td>
              <td colspan="3">
                <textarea class="ckeditor" name="misi" required><?php echo $visimisi['misi']; ?></textarea>
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

<script src="<?php echo base_url() ?>theme/assets/ckeditor/ckeditor.js"></script>

<script>
  $(function () {
    CKEDITOR.replace('ckeditor');
  });
</script>