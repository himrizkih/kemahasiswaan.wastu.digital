<div class="card mb-3">
 <div class="card-header">
  <i class="fas fa-table"></i> Ubah User
 </div>
  <div class="card-body">
	<a href="<?php echo base_url() ?>admin/user" class="btn btn-sm btn-primary float-left" onclick="return confirm('Apakah anda yakin ingin meninggalkan halaman & HAPUS perubahan?')"><i class="fas fa-arrow-left"></i> Kembali</a> <br> 
    <p></p>
    
    <div class="table-responsive">
        <form action="<?php echo base_url() ?>admin/user/edit" method='post'>
            <table class="table table-bordered" width="100%" cellspacing="0">
                <input type="hidden" name="id" value="<?php echo $user['id_user']; ?>">
                <tr>
                    <td>Nama<label style="color: red;">*</label></td>
                    <td><input type="text" name="nama" class="form-control" value="<?php echo $user['nama']; ?>" required></td>
                </tr>
                <tr>
                    <td>Alamat<label style="color: red;">*</label></td>
                    <td><input type="text" name="alamat" class="form-control" value="<?php echo $user['alamat']; ?>" required></td>
                </tr>
                <tr>
                    <td>Departemen<label style="color: red;">*</label></td>
                    <!-- <td><input type="text" name="departemen" class="form-control" value="<?php echo $user['departemen']; ?>" required readonly></td> -->
                    <td>
                    <select name="departemen" class="form-control" required>
                        <option value="">-Silahkan Pilih Departemen-</option>
                        <option <?php if($user['departemen']=='Struktural'){echo 'selected';} ?> value="Struktural">Struktural</option>
                        <option <?php if($user['departemen']=='Kemahasiswaan'){echo 'selected';} ?> value="Kemahasiswaan">Kemahasiswaan</option>
                        <option <?php if($user['departemen']=='Kaprodi'){echo 'selected';} ?> value="Kaprodi">Kaprodi</option>
                        <option <?php if($user['departemen']=='MPM'){echo 'selected';} ?> value="MPM">MPM</option>
                        <option <?php if($user['departemen']=='BEM'){echo 'selected';} ?> value="BEM">BEM</option>
                        <option <?php if($user['departemen']=='HMJ'){echo 'selected';} ?> value="HMJ">HMJ</option>
                        <option <?php if($user['departemen']=='UKM'){echo 'selected';} ?> value="UKM">UKM</option>
                        <option <?php if($user['departemen']=='Ketpan'){echo 'selected';} ?> value="Ketpan">Ketua Pelaksana</option>
                        <option <?php if($user['departemen']=='Sekpan'){echo 'selected';} ?> value="Sekpan">Sekretaris Pelaksana</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Organisasi<label style="color: red;">*</label></td>
                    <td>
                    <select name="organisasi" class="form-control">
                        <option value="">-Silahkan Pilih Organisasi-</option>
                        <option <?php if($user['organisasi']=='Ketua STT Wastukancana'){echo 'selected';} ?> value="Ketua STT Wastukancana">Ketua STT Wastukancana Purwakarta</option>
                        <option <?php if($user['organisasi']=='Departemen Kemahasiswaan HUMAS & HUBIN'){echo 'selected';} ?> value="Departemen Kemahasiswaan HUMAS & HUBIN">Departemen Kemahasiswaan HUMAS & HUBIN</option>
                        <option <?php if($user['organisasi']=='Ketua Program Studi Teknik Informatika'){echo 'selected';} ?> value="Ketua Program Studi Teknik Informatika">Ketua Program Studi Teknik Informatika</option>
                        <option <?php if($user['organisasi']=='Ketua Program Studi Teknik Industri'){echo 'selected';} ?> value="Ketua Program Studi Teknik Industri">Ketua Program Studi Teknik Industri</option>
                        <option <?php if($user['organisasi']=='Majelis Permusyawaratan Mahasiswa (MPM)'){echo 'selected';} ?> value="Majelis Permusyawaratan Mahasiswa (MPM)">Majelis Permusyawaratan Mahasiswa (MPM)</option>
                        <option <?php if($user['organisasi']=='Badan Eksekutif Mahasiswa (BEM)'){echo 'selected';} ?> value="Badan Eksekutif Mahasiswa (BEM)">Badan Eksekutif Mahasiswa (BEM)</option>
                        <option <?php if($user['organisasi']=='Himpunan Mahasiswa Teknik Informatika (HUMANIKA)'){echo 'selected';} ?> value="Himpunan Mahasiswa Teknik Informatika (HUMANIKA)">Himpunan Mahasiswa Teknik Informatika (HUMANIKA)</option>
                        <option <?php if($user['organisasi']=='Himpunan Mahasiswa Teknik Industri (HMTI)'){echo 'selected';} ?> value="Himpunan Mahasiswa Teknik Industri (HMTI)">Himpunan Mahasiswa Teknik Industri (HMTI)</option>
                        <option <?php if($user['organisasi']=='Himpunan Mahasiswa Mesin (HMM)'){echo 'selected';} ?> value="Himpunan Mahasiswa Mesin (HMM)">Himpunan Mahasiswa Mesin (HMM)</option>
                        <option <?php if($user['organisasi']=='Himpunan Mahasiswa Manajemen Industri (HM2I)'){echo 'selected';} ?> value="Himpunan Mahasiswa Manajemen Industri (HM2I)">Himpunan Mahasiswa Manajemen Industri (HM2I)</option>
                        <option <?php if($user['organisasi']=='Himpunan Mahasiswa Teknik Tekstil (HIMATEK)'){echo 'selected';} ?> value="Himpunan Mahasiswa Teknik Tekstil (HIMATEK)">Himpunan Mahasiswa Teknik Tekstil (HIMATEK)</option>
                        <option <?php if($user['organisasi']=='Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)'){echo 'selected';} ?> value="Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)">Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)</option>
                        <option <?php if($user['organisasi']=='Lembaga Pers Mahasiswa Wastukancana (LPM Waska)'){echo 'selected';} ?> value="Lembaga Pers Mahasiswa Wastukancana (LPM Waska)">Lembaga Pers Mahasiswa Wastukancana (LPM Waska)</option>
                        <option <?php if($user['organisasi']=='Lembaga Dakwah Kampus Wastukancana (LDK Waska)'){echo 'selected';} ?> value="Lembaga Dakwah Kampus Wastukancana (LDK Waska)">Lembaga Dakwah Kampus Wastukancana (LDK Waska)</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Keterangan<label style="color: red;">*</label></td>
                    <td><input type="text" name="keterangan" class="form-control" value="<?php echo $user['keterangan']; ?>" required></td>
                </tr>
                <tr>
                    <td>Email<label style="color: red;">*</label></td>
                    <td><input type="text" name="email" class="form-control" value="<?php echo $user['email']; ?>" required></td>
                </tr>
                <!-- <tr>
                    <td colspan="1">Gambar</td>
                    <td>
                        <br>
                            <input type="file" name="foto">
                        <br>
                            <a style="font-size: 12px;">Jenis File: gif | jpg | png | jpeg | bmp</a>
                        <br>
                            <a style="font-size: 12px;">Ukuran File Maks.: 10.00MB</a>
                    </td>
                    <td colspan="2">
                        <img src="<?php echo base_url().'theme/assets/img/user/'.$user['foto'];?>" style="width:150px;">
                            <?php echo $berita['foto'];?>
                        <br>
                            <a style="font-size: 14px;">-File sebelum diupdate-</a>
                    </td>
                </tr> -->
                <tr>
                    <td>Username<label style="color: red;">*</label></td>
                    <td><input type="text" name="username" class="form-control" value="<?php echo $user['username']; ?>" required></td>
                </tr>
                <tr>
                    <td>Password<label style="color: red;">*</label></td>
                    <td><input type="password" name="password" class="form-control" value="<?php echo $user['password']; ?>" required></td>
                <tr>
                    <td colspan='2'>
                        <input type="submit" class="btn btn-success float-right" name="update" value="Update Data">
                    </td>
                </tr>
            </table>
        </form>
    </div>
  </div>
</div>