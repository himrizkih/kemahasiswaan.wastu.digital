<div class="card mb-3">
 <div class="card-header">
  <i class="fas fa-table"></i> Tambah Visi-Misi
 </div>
   <div class="card-body">
    <a href="<?php echo base_url() ?>admin/kemahasiswaan/profil/visimisi" class="btn btn-sm btn-primary float-left"><i class="fas fa-arrow-left"></i> Kembali</a>
    <br> 
    <p></p>
    
    <div class="table-responsive">
        <form action="<?php echo base_url() ?>admin/kemahasiswaan/profil/visimisi/add" method='post' enctype="multipart/form-data">
            <table class="table table-bordered">            
             <tr>
              <td>Visi<label style="color: red;">*</label></td>
              <td>
                <!-- <input type="text" name="visi" class="form-control" placeholder="Deskripsi Visi" required> -->
                <textarea class="ckeditor" name="visi" required></textarea>
              </td>
             </tr>
             <tr>
              <td>Misi<label style="color: red;">*</label></td>
              <td>
                <!-- <input type="text" name="misi" class="form-control" placeholder="Deskripsi Misi" required> -->
                <textarea class="ckeditor" name="misi" required></textarea>
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

<script src="<?php echo base_url() ?>theme/assets/ckeditor/ckeditor.js"></script>

<script>
  $(function () {
    CKEDITOR.replace('ckeditor');
  });
</script>