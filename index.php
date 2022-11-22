<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data siswa</title>
</head>
<body>
    <h2>tabel siswa</h2>
    <h4><a href="tambah.php">Tambah Data</a></h4>
    <table border=1>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Username</td>
            <td>Paassword</td>
            <td>Aksi</td>
        </tr>
    <?php
      include 'koneksi.php';
      $no = 1;
      $data = mysqli_query($conn, "SELECT * FROM tb_siswa");
      while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?= $no++?></td>
            <td><?= $d['nama']?></td>
            <td><?= $d['nama']?></td>
            <td><?= $d['nama']?></td>
            <td> 
                <a href="edit.php"?iduser=<?= $d['id_user']?>edit</a>  
                <a href="hapus.php"?iduser=<?= $d['id_user']?>hapus</a> 
            </td>   
        </tr>
        <?php }?>
      </table>
</body>
</html>