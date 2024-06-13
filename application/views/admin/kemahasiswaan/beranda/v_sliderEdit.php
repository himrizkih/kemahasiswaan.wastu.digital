<div class="card mb-3">
 <div class="card-header">
  <i class="fas fa-table"></i> Ubah Slider
 </div>
  <div class="card-body">
     <a href="<?php echo base_url() ?>admin/kemahasiswaan/beranda/slider" class="btn btn-sm btn-primary float-left" onclick="return confirm('Apakah anda yakin ingin meninggalkan halaman & HAPUS perubahan?')"><i class="fas fa-arrow-left"></i> Kembali</a>
     <br> 
     <p></p>

    <div class="table-responsive">
        <form action="<?php echo base_url() ?>admin/kemahasiswaan/beranda/slider/edit" method='post' enctype='multipart/form-data'>
            <table class="table table-bordered">    
            <input type="hidden" name="id" value="<?php echo $slider['id_slider']; ?>">
             <tr>
              <td>Deskripsi</td>
              <td colspan="3"><input type="text" name="deskripsi" class="form-control" value="<?php echo $slider['deskripsi']; ?>" placeholder="Deskripsi Slider (Optional)"></td>
             </tr>
             <tr>
              <td colspan="1">Gambar</td>
              <td>
                <br>
                <input type="file" name="gambar">
                  <br>
                    <a style="font-size: 12px;">Jenis File: gif | jpg | png | jpeg | bmp</a>
                  <br>
                    <a style="font-size: 12px;">Ukuran File Maks.: 10.00MB</a>
              </td>
              <td colspan="2">
                <img src="<?php echo base_url().'theme/assets/img/slider/'.$slider['gambar'];?>" style="width:150px;">
                <?php echo $slider['gambar'];?>
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