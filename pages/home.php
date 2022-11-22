<?php 
$mahasiswa = [
    [
        'id' => 1,
        'name' => 'Ihsan Devs',
        'username' => 'ihsan_devs',
        'nim' => 293248923
    ]
]
?>

<div class="row">
    <div class="col-md-6">
        <h1>Daftar Mahasiswa</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Username</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswa as $mhs): ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $mhs['name'] ?></td>
                    <td><?= $mhs['username'] ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td>
                        <a href="index.php?page=edit&id=<?= $mhs['id'] ?>" class="btn btn-warning">Edit</a>
                        <a href="index.php?page=delete&id=<?= $mhs['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-md-6">
        <h1>Tambah Mahasiswa</h1>
        <form action="index.php?page=store" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>