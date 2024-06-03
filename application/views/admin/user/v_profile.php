<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
<body>
    <div class="container mt-5">
        <h3 class="text-center">Profile</h3>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-sm">
                <tr>
                    <th width="25%">Nama</th>
                    <td><?= $user['nama']; ?></td>
                </tr>
                <tr>
                    <th>NIDN</th>
                    <td><?= $user['nidn']; ?></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><?= $user['alamat']; ?></td>
                </tr>
                <tr>
                    <th>Departemen</th>
                    <td><?= $user['departemen']; ?></td>
                </tr>
                <tr>
                    <th>Organisasi</th>
                    <td><?= $user['organisasi']; ?></td>
                </tr>
                <tr>
                    <th>Keterangan</th>
                    <td><?= $user['keterangan']; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?= $user['email']; ?></td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td><?= $user['username']; ?></td>
                </tr>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>


