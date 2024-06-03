<div class="card mb-3">
 <div class="card-header">
  <i class="fas fa-table"></i> Ubah FAQ
 </div>
  <div class="card-body">
     <a href="<?php echo base_url() ?>admin/kemahasiswaan/faq" class="btn btn-sm btn-primary float-left" onclick="return confirm('Apakah anda yakin ingin meninggalkan halaman & HAPUS perubahan?')"><i class="fas fa-arrow-left"></i> Kembali</a>
     <br> 
     <p></p>

    <div class="table-responsive">
        <form action="<?php echo base_url() ?>admin/kemahasiswaan/faq/edit" method='post' enctype='multipart/form-data'>
            <table class="table table-bordered">    
            <input type="hidden" name="id" value="<?php echo $faq['id_faq']; ?>">
             <tr>
              <td>Pertanyaan<label style="color: red;">*</label></td>
              <td><input type="text" name="pertanyaan" class="form-control" value="<?php echo $faq['pertanyaan']; ?>" placeholder="Pertanyaan FAQ" required></td>
             </tr>
             <tr>
              <td>Jawaban<label style="color: red;">*</label></td>
              <td><input type="text" name="jawaban" class="form-control" value="<?php echo $faq['jawaban']; ?>" placeholder="Jawaban FAQ" required></td>
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