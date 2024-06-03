<?php function namahari($tanggal){
    //fungsi mencari namahari
    //format $tgl YYYY-MM-DD
    //harviacode.com
    $tgl=substr($tanggal,8,2);
    $bln=substr($tanggal,5,2);
    $thn=substr($tanggal,0,4);
    $info=date('w', mktime(0,0,0,$bln,$tgl,$thn));
    switch($info){
        case '0': return "Minggu"; break;
        case '1': return "Senin"; break;
        case '2': return "Selasa"; break;
        case '3': return "Rabu"; break;
        case '4': return "Kamis"; break;
        case '5': return "Jumat"; break;
        case '6': return "Sabtu"; break;
    };
} ?>

<a style="margin-bottom: 10px;" href="<?php echo base_url() ?>admin/kemahasiswaan/beasiswa/pendaftar" class="btn btn-sm btn-primary float-left"><i class="fas fa-arrow-left"></i> Kembali</a>

<table class="table table-striped" id="display">
    <tbody>
            <tr>
                <td width="200px" scope="row"><strong>Nama Mahasiswa</strong></td>
                <td>:</td>
                <td><?php echo $pendaftar['nama_mhs'] ?></td>
            </tr>
            <tr>
                <td width="200px" scope="row"><strong>NIM</strong></td>
                <td>:</td>
                <td><?php echo $pendaftar['nim'] ?></td>
            </tr>
            <tr>
                <td width="200px" scope="row"><strong>Program Studi</strong></td>
                <td>:</td>
                <td><?php 
                      if ($pendaftar['prodi']=='') {
                        echo '<span class="badge badge-danger">Perlu diinput Prodi Mahasiswa</span>';
                      }else if ($pendaftar['prodi']=='mhs') {
                        echo 'Mahasiswa';
                      }else if ($pendaftar['prodi']=='if') {
                        echo 'Teknik Informatika';
                      }else if ($pendaftar['prodi']=='tm') {
                        echo 'Teknik Mesin';
                      }else if ($$pendaftar['prodi']=='ti') {
                        echo 'Teknik Industri';
                      }else if ($$pendaftar['prodi']=='mi') {
                        echo 'Manajemen Industri';
                      }else if ($$pendaftar['prodi']=='teks') {
                        echo 'Teknik Tekstil';
                      }
                    ?>
                </td>
            </tr>
			<tr>
				<td width="200px" scope="row"><strong>Nomor HP</strong></td>
				<td>:</td>
				<td><?php echo $pendaftar['nomor_hp'] ?></td>
			</tr>
			<tr>
				<td width="200px" scope="row"><strong>Status Pengajuan</strong></td>
				<td>:</td>
				<td><?php 
                    if ($pendaftar['status']==0) {
                        echo '<span class="badge badge-secondary">Menunggu Persetujuan<br/> Kaprodi</span>';
                    }else if ($pendaftar['status']==1) {
                        echo '<span class="badge badge-warning">Proses Seleksi</span>';
                    }else if ($pendaftar['status']==2) {
                        echo '<span class="badge badge-success">Disetujui Kaprodi</span>';
                    }else if ($pendaftar['status']==3) {
                        echo '<span class="badge badge-danger">Ditolak</span>';
                    }
                    ?>    
                </td>
			</tr>
            <tr>
                <td width="200px" scope="row"><strong>Jenis Beasiswa</strong></td>
                <td>:</td>
                <td><?php echo $pendaftar['nama_bea'] ?></td>
            </tr>
            <tr>
                <td width="200px" scope="row"><strong>Kategori Beasiswa</strong></td>
                <td>:</td>
                <td><?php 
              if ($pendaftar['kategori']=='') {
                echo '<span class="badge badge-danger">Perlu diinput Kategori Beasiswa</span>';
              }else if ($pendaftar['kategori']=='lokal') {
                echo 'Beasiswa Lokal';
              }else if ($pendaftar['kategori']=='wilayah') {
                echo 'Beasiswa Wilayah';
              }else if ($pendaftar['kategori']=='nasional') {
                echo 'Beasiswa Nasional';
              }else if ($pendaftar['kategori']=='internasional') {
                echo 'Beasiswa Internasional';
              }
             ?></td>
            </tr>
            <tr>
                <td width="200px" scope="row"><strong>Tanggal Pengajuan</strong></td>
                <td>:</td>
                <td><?php echo $pendaftar['tanggal'] ?></td>
            </tr>
            <tr>
                <td width="200px" scope="row"><strong>Persetujuan</strong></td>
                <td>:</td>
                <td><form action="<?php echo base_url() ?>admin/kemahasiswaan/beasiswa/pendaftar/proses" method="post">
                    <input type="hidden" name="id_pendaftar" value="<?php echo $pendaftar['id_pendaftar'] ?>">
                    <input type="submit" class="btn btn-success"  value="SETUJUI PENGAJUAN" name="disetujui" onclick="return confirm('Apakah anda yakin ingin SETUJUI Pengajuan Beasiswa\nAtas Nama : <?php echo $pendaftar['nama_mhs'] ?> ?')"> | |
                    <input type="submit" class="btn btn-danger" value="TOLAK PENGAJUAN" name="ditolak" onclick="return confirm('Apakah anda yakin ingin TOLAK Pengajuan Beasiswa\nAtas Nama : <?php echo $pendaftar['nama_mhs'] ?> ?')">
                </form>
                </td>
            </tr>
        </tbody>
</table>

<iframe class="mt-3" src="<?= base_url("./theme/assets/lampiran/" . $pendaftar['lampiran']) ?>" width="100%" height="550px"></iframe>