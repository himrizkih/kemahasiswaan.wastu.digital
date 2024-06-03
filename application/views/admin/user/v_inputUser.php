<div class="card mb-3">
    <div class="card-header">
    <i class="fas fa-table"></i>
    Input user</div>
    <div class="card-body">
		<a href="<?php echo base_url() ?>admin/approval/user" class="btn btn-sm btn-primary float-left"><i class="fas fa-arrow-left"></i> Kembali</a> <br> 
    <p></p>
        <div class="table-responsive">
    <form action="<?php echo base_url() ?>admin/approval/user/add" method='post'>
        <table class="table table-bordered" width="100%" cellspacing="0">
            <!-- <tr>
                <td>NIK</td>
                <td><input type="number" name="nik" class="form-control" required></td>
            </tr> -->
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" class="form-control" required></td>
            </tr>

			<tr>
                <td>NIDN</td>
                <td><input type="number" name="nidn" class="form-control" required></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" class="form-control" required></td>
            </tr>
            
            <tr>
                <td>Departemen</td>
                <td>
                <select name="departemen" class="form-control" required>
                    <option value="">- Silahkan Pilih -</option>
                    <option value="Struktural">Struktural</option>
                    <option value="Kemahasiswaan">Kemahasiswaan</option>
                    <option value="Kaprodi">Kaprodi</option>
                    <!-- <option value="MPM">MPM</option> -->
                    <option value="BEM">BEM</option>
                    <option value="HMJ">HMJ</option>
                    <option value="UKM">UKM</option>
                    <option value="Ketpan">Ketua Pelaksana</option>
                    <option value="Sekpan">Sekretaris Pelaksana</option>
                </select>
            </tr>
            
            <!-- <tr>
                <td>Jabatan</td>
                <td>
                    <select name="jabatan" class="form-control">
                        <option value="">- Silahkan Pilih -</option>
                        <option  value="sekda">Ketua STT</option>
                        <option  value="asisten">S. Kemahasiswaan</option>
                        <option  value="kabag">Kaprodi</option>
                        <option  value="kasubag">BEM</option>
                        <option  value="staff">Ormawa</option>
                        <option  value="staff">Himpunan</option>
                        <option  value="staff">UKM</option>
                        <option  value="kasubag">BEM</option>
                        <option  value="kabag">Kaprodi</option>
                        <option  value="asisten">S. Kemahasiswaan</option>
                        <option  value="sekda">Ketua STT</option> 
                    </select>
                </td>
            </tr> -->

            <tr>
                <td>Organisasi</td>
                <td>
                    <select name="organisasi" class="form-control">
                        <option value="">- Silahkan Pilih -</option>
                        <option  value="Ketua STT Wastukancana Purwakarta">Ketua STT Wastukancana Purwakarta</option>
                        <option  value="Departemen Kemahasiswaan HUMAS & HUBIN">Departemen Kemahasiswaan HUMAS & HUBIN</option>
                        <option  value="Ketua Program Studi Teknik Informatika">Ketua Program Studi Teknik Informatika</option>
                        <option  value="Majelis Permusyawaratan Mahasiswa (MPM)">Majelis Permusyawaratan Mahasiswa (MPM)</option>
                        <option  value="Badan Eksekutif Mahasiswa (BEM)">Badan Eksekutif Mahasiswa (BEM)</option>
                        <option  value="Himpunan Mahasiswa Teknik Informatika (HUMANIKA)">Himpunan Mahasiswa Teknik Informatika (HUMANIKA)</option>
                        <option  value="Himpunan Mahasiswa Teknik Industri (HMTI)">Himpunan Mahasiswa Teknik Industri (HMTI)</option>
                        <option  value="Lembaga Pers Mahasiswa (LPM Waska)">Lembaga Pers Mahasiswa (LPM Waska)</option>
                        <!-- <option  value="staff">Himpunan</option>
                        <option  value="staff">UKM</option>
                        <option  value="kasubag">BEM</option>
                        <option  value="kabag">Kaprodi</option>
                        <option  value="asisten">S. Kemahasiswaan</option>
                        <option  value="sekda">Ketua STT</option> -->
                    </select>
                </td>
            </tr>

            <tr>
                <td>Keterangan</td>
                <td><input type="text" name="keterangan" class="form-control" required></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="email" name="email" class="form-control" required></td>
            </tr>
            
            <!-- <tr>
                <td>Foto TTD</td>
                <td><input type="file" name="foto"></td>
            </tr> -->

            <tr>
                <td>Username</td>
                <td><input type="text" name="username" class="form-control" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" class="form-control" required></td>
            </tr>
            <tr>
            <td colspan='2'>
                <input type="submit" class="btn btn-success float-right" name="simpan" value="Simpan">
            </td>
            </tr>
           
        </table>
    </form>
        </div>
    </div>
</div>
