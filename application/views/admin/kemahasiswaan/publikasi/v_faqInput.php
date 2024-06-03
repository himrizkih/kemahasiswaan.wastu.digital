<div class="card mb-3">
 <div class="card-header">
  <i class="fas fa-table"></i> Tambah FAQ
 </div>
   <div class="card-body">
    <a href="<?php echo base_url() ?>admin/kemahasiswaan/faq" class="btn btn-sm btn-primary float-left"><i class="fas fa-arrow-left"></i> Kembali</a>
    <br> 
    <p></p>
    
    <div class="table-responsive">
        <form action="<?php echo base_url() ?>admin/kemahasiswaan/faq/add" method='post' enctype="multipart/form-data">
            <table class="table table-bordered">            
             <tr>
              <td>Pertanyaan<label style="color: red;">*</label></td>
              <td><input type="text" name="pertanyaan" class="form-control" placeholder="Pertanyaan FAQ" required></td>
             </tr>
             <tr>
              <td>Jawaban<label style="color: red;">*</label></td>
              <td><input type="text" name="jawaban" class="form-control" placeholder="Jawaban FAQ" required></td>
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