<div class="card mb-3">
    <div class="card-header">
    <i class="fas fa-table"></i>
    Input user</div>
    <div class="card-body">
		<a href="<?php echo base_url() ?>admin/user" class="btn btn-sm btn-primary float-left"><i class="fas fa-arrow-left"></i> Kembali</a> <br> 
    <p></p>
        <div class="table-responsive">
    <form action="<?php echo base_url() ?>admin/user/add" method='post'>
        <table class="table table-bordered" width="100%" cellspacing="0">
            <tr>
                <td>Nama<label style="color: red;">*</label></td>
                <td><input type="text" name="nama" class="form-control" placeholder="Nama User" required></td>
            </tr>
            <tr>
                <td>Alamat<label style="color: red;">*</label></td>
                <td><input type="text" name="alamat" class="form-control" placeholder="Alamat User" required></td>
            </tr>
            <tr>
                <td>Departemen<label style="color: red;">*</label></td>
                <td>
                <select name="departemen" class="form-control" required>
                    <option value="">-Silahkan Pilih Departemen-</option>
                    <option value="Struktural">Struktural</option>
                    <option value="Kemahasiswaan">Kemahasiswaan</option>
                    <option value="Kaprodi">Kaprodi</option>
                    <option value="MPM">MPM</option>
                    <option value="BEM">BEM</option>
                    <option value="HMJ">HMJ</option>
                    <option value="UKM">UKM</option>
                    <option value="Ketpan">Ketua Pelaksana</option>
                    <option value="Sekpan">Sekretaris Pelaksana</option>
                </select>
            </tr>
            <tr>
                <td>Organisasi<label style="color: red;">*</label></td>
                <td>
                <select name="organisasi" class="form-control" required>
                    <option value="">-Silahkan Pilih Organisasi-</option>
                    <option value="Ketua STT Wastukancana">Ketua STT Wastukancana Purwakarta</option>
                    <option value="Departemen Kemahasiswaan HUMAS & HUBIN">Departemen Kemahasiswaan HUMAS & HUBIN</option>
                    <option value="Ketua Program Studi Teknik Informatika">Ketua Program Studi Teknik Informatika</option>                        <option value="Ketua Program Studi Teknik Industri">Ketua Program Studi Teknik Industri</option>
                    <option value="Majelis Permusyawaratan Mahasiswa (MPM)">Majelis Permusyawaratan Mahasiswa (MPM)</option>
                    <option value="Badan Eksekutif Mahasiswa (BEM)">Badan Eksekutif Mahasiswa (BEM)</option>
                    <option value="Himpunan Mahasiswa Teknik Informatika (HUMANIKA)">Himpunan Mahasiswa Teknik Informatika (HUMANIKA)</option>
                    <option value="Himpunan Mahasiswa Teknik Industri (HMTI)">Himpunan Mahasiswa Teknik Industri (HMTI)</option>
                    <option value="Himpunan Mahasiswa Mesin (HMM)">Himpunan Mahasiswa Mesin (HMM)</option>
                    <option value="Himpunan Mahasiswa Manajemen Industri (HM2I)">Himpunan Mahasiswa Manajemen Industri (HM2I)</option>
                    <option value="Himpunan Mahasiswa Teknik Tekstil (HIMATEK)">Himpunan Mahasiswa Teknik Tekstil (HIMATEK)</option>
                    <option value="Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)">Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)</option>
                    <option value="Lembaga Pers Mahasiswa Wastukancana (LPM Waska)">Lembaga Pers Mahasiswa Wastukancana (LPM Waska)</option>
                    <option value="Lembaga Dakwah Kampus Wastukancana (LDK Waska)">Lembaga Dakwah Kampus Wastukancana (LDK Waska)</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Keterangan<label style="color: red;">*</label></td>
                <td><input type="text" name="keterangan" class="form-control" placeholder="Keterangan User" required></td>
            </tr>
            <tr>
                <td>Email<label style="color: red;">*</label></td>
                <td><input type="email" name="email" class="form-control" placeholder="Email User" required></td>
            </tr>
            <!-- <tr>
                <td>Foto TTD<label style="color: red;">*</label></td>
                <td><input type="file" name="foto" required>
                <br>
                <a style="font-size: 12px;">Jenis File: gif | jpg | png | jpeg | bmp</a>
                <br>
                <a style="font-size: 12px;">Ukuran File Maks.: 10.00MB</a>
                </td>
            </tr> -->
            <tr>
                <td>Username<label style="color: red;">*</label></td>
                <td><input type="text" name="username" class="form-control" placeholder="Username untuk Login" required></td>
            </tr>
            <tr>
                <td>Password<label style="color: red;">*</label></td>
                <td><input type="password" name="password" class="form-control" placeholder="Password untuk Login" required></td>
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
