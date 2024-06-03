<?php
    if(isset($_GET['pesan'])) { 
        if($_GET['pesan'] == "berhasil_input") { 
            echo "<div class='alert alert-success'>Data Berhasil ditambah.</div>"; 
        } else if($_GET['pesan'] == "berhasil_edit") { 
            echo "<div class='alert alert-success'>Data Berhasil Diubah.</div>";
        } else if($_GET['pesan'] == "berhasil_hapus") { 
            echo "<div class='alert alert-danger'>Data Berhasil dihapus.</div>";
        } else { 
            echo "<div class='alert alert-danger'>Data Gagal Disimpan.</div>";
        }
    } 
?>

<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i> Data user
    </div>
    <div class="card-body">
        <a href="<?= base_url() ?>admin/approval/user/add" class="btn btn-sm btn-primary"><i class="fas fa-plus-square"></i> Tambah Data</a>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>qrcode</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Departemen</th>
                        <th>Organisasi</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach ($user as $d){ 
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td style="text-align: center; vertical-align: middle;">
                            <img style="cursor: pointer;" width="70" class="shadow qrcode" data-id="<?= $d->id_user ?>" src="<?= site_url('admin/approval/user/qrcode/') . $d->id_user ?>" onclick="location.href = this.src;">
                        </td>
                        <td><?= $d->nama ?></td>
                        <td><?= $d->alamat ?></td>
                        <td><?= $d->departemen ?></td>
                        <td><?= $d->organisasi ?></td>
                        <td><?= $d->email ?></td>
                        <td><?= $d->username ?></td>
                        <td>
                            <a href="<?= base_url() ?>admin/approval/user/edit/<?= $d->id_user ?>" class="btn btn-primary"> Ubah</a>
                            <a href="<?= base_url() ?>admin/approval/user/delete/<?= $d->id_user ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger"> Hapus</a>
                        </td>
                    </tr>
                    <?php
                        } 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>