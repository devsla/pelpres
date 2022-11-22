<?php
include 'koneksi.php';
if(isset($_GET['id_user'])){
    $data = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user='".$_GET['iduser']."' " );
    $p = mysqli_fetch_array($data);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
</head>
<body>
<h2>form Edit</h2>
    <form action="" method="post" enctype="multipart/form-data"
    <table>
        <tr>
         <td>Nama Lengkap</td>
         <td>:</td> 
         <td><input type="text" name="nama" value="<?= $p['nama']?>" required></td>  
        </tr>
        <br>
        <tr>
         <td>Username</td>
         <td>:</td> 
         <td><input type="text" name="user" value="<?= $p['username']?>" required></td>  
        </tr>
        <br>
        <tr>
         <td>password</td>
         <td>:</td> 
         <td><input type="text" name="pass" value="<?= $p['password']?>" required></td>  
        </tr>
        <tr>
            <br>
            <td><input type="submit" nama="simpan" value="simpan"></td>
        </tr>
    </table>
    </form>
    <?php
    include 'koneksi.php';
    if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $simpan = mysqli_query($conn, "UPDATE tb_user SET
       nama = '".$nama."' ,
       username = '".$username."', 
       password = '".$password."'
       WHERE id_user =  ".$_GET['iduser']."'
    ");
    if($simpan){
        header('location:index.php');
    }else{
        echo "edit gagal";
    }
    }
    ?>
</body>
</html>