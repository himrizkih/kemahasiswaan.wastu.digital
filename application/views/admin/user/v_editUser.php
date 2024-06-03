<div class="card mb-3">
    <div class="card-header">
    <i class="fas fa-table"></i>
    Input user</div>
    <div class="card-body">
	<a href="<?php echo base_url() ?>admin/approval/user" class="btn btn-sm btn-primary float-left"><i class="fas fa-arrow-left"></i> Kembali</a> <br> 
    <p></p>
        <div class="table-responsive">
    <form action="<?php echo base_url() ?>admin/approval/user/edit" method='post'>
        <table class="table table-bordered" width="100%" cellspacing="0">
            <input type="hidden" name="id" value="<?php echo $user['id_user']; ?>">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" class="form-control" value="<?php echo $user['nama']; ?>" required></td>
            </tr>

			<tr>
                <td>NIDN</td>
                <td><input type="number" name="nidn" class="form-control" value="<?php echo $user['nidn']; ?>" required></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" class="form-control" value="<?php echo $user['alamat']; ?>" required></td>
            </tr>

            <tr>
                <td>Departemen</td>
                <td><input type="text" name="departemen" class="form-control" value="<?php echo $user['departemen']; ?>" required readonly></td>
            </tr>
            
        
            <!-- <tr>
                <td>Jabatan</td>
                <td>
                    <select name="jabatan" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        <option <?php if($user['jabatan']=='sekda'){echo 'selected';} ?> value="sekda">Ketua STT</option>
                        <option <?php if($user['jabatan']=='asisten'){echo 'selected';} ?> value="asisten">Asisten</option>
                        <option <?php if($user['jabatan']=='kabag'){echo 'selected';} ?> value="kabag">Kaprodi</option>
                        <option <?php if($user['jabatan']=='kasubag'){echo 'selected';} ?> value="kasubag">BEM</option>
                        <option <?php if($user['jabatan']=='staff'){echo 'selected';} ?> value="staff">Ormawa</option>
                    </select>
                </td>
            </tr> -->

            <tr>
                <td>Organisasi</td>
                <td>
                    <select name="organisasi" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        <option <?php if($user['organisasi']=='Ketua STT Wastukancana Purwakarta'){echo 'selected';} ?> value="Ketua STT Wastukancana Purwakarta">Ketua STT Wastukancana Purwakarta</option>
                        <option <?php if($user['organisasi']=='Departemen Kemahasiswaan HUMAS & HUBIN'){echo 'selected';} ?> value="Departemen Kemahasiswaan HUMAS & HUBIN">Departemen Kemahasiswaan HUMAS & HUBIN</option>
                        <option <?php if($user['organisasi']=='Ketua Program Studi Teknik Informatika'){echo 'selected';} ?> value="Ketua Program Studi Teknik Informatika">Ketua Program Studi Teknik Informatika</option>
<!--  -->
                        <option <?php if($user['organisasi']=='Majelis Permusyawaratan Mahasiswa (MPM)'){echo 'selected';} ?> value="Majelis Permusyawaratan Mahasiswa (MPM)">Majelis Permusyawaratan Mahasiswa (MPM)</option>
                        <option <?php if($user['organisasi']=='Badan Eksekutif Mahasiswa (BEM)'){echo 'selected';} ?> value="Badan Eksekutif Mahasiswa (BEM)">Badan Eksekutif Mahasiswa (BEM)</option>
                        <option <?php if($user['organisasi']=='Himpunan Mahasiswa Teknik Informatika (HUMANIKA)'){echo 'selected';} ?> value="Himpunan Mahasiswa Teknik Informatika (HUMANIKA)">Himpunan Mahasiswa Teknik Informatika (HUMANIKA)</option>
                        <option <?php if($user['organisasi']=='Himpunan Mahasiswa Teknik Industri (HMTI)'){echo 'selected';} ?> value="Himpunan Mahasiswa Teknik Industri (HMTI)">Himpunan Mahasiswa Teknik Industri (HMTI)</option>
<!--  -->
                        <option <?php if($user['organisasi']=='Lembaga Pers Mahasiswa (LPM Waska)'){echo 'selected';} ?> value="Lembaga Pers Mahasiswa (LPM Waska)">Lembaga Pers Mahasiswa (LPM Waska)</option>
                        
                    </select>
                </td>
            </tr>

            <tr>
                <td>Keterangan</td>
                <td><input type="text" name="keterangan" class="form-control" value="<?php echo $user['keterangan']; ?>" required></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="text" name="email" class="form-control" value="<?php echo $user['email']; ?>" required></td>
            </tr>

            <!-- <tr>
                <td>Foto TTD</td>
                <td><input type="file" name="foto"  value="<?php echo $user['foto']; ?>" required></td>
            </tr> -->

            <tr>
                <td>Username</td>
                <td><input type="text" name="username" class="form-control" value="<?php echo $user['username']; ?>" required></td>
            </tr>
            <tr>
            <tr>
            <td colspan='2'>
                <input type="submit" class="btn btn-success float-right" name="update" value="Update">
                <a href="<?php echo base_url() ?>admin/approval/user" class="btn btn-info float-right"> Kembali</a></<input>
            </td>
            </tr>
        </table>
    </form>
        </div>
    </div>
</div>
