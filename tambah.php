<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form input</title>
</head>
<body>
    <h2>form input</h2>
    <form action="" method="post" enctype="multipart/form-data"
    <table>
        <tr>
         <td>Nama Lengkap</td>
         <td>:</td> 
         <td><input type="text" name="nama" placeholder="Nama Lengkap" required></td>  
        </tr>
        <tr>
         <td>Nama Lengkap</td>
         <td>:</td> 
         <td><input type="text" name="nama" placeholder="Nama Lengkap" required></td>  
        </tr>
        <tr>
         <td>Username</td>
         <td>:</td> 
         <td><input type="text" name="user" placeholder="Username" required></td>  
        </tr>
        <tr>
         <td>Password</td>
         <td>:</td> 
         <td><input type="text" name="pass" placeholder="Password" required></td>  
        </tr>
        <tr>
            <td><input type="submit" nama="simpan" value="simpan"></td>
        </tr>
    </table>
</form>
    <?
    include 'koneksi.php';
    if(isset($_POST ['submit'])){
        $nama = $_POST['nama'];
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $simpan = mysqli_query($conn, "INSERT INTO tb_user VALUES(
            null,
            '".$nama."',
            '".$username."',
            '".$password."'
        )");
        if($simpan){
            header('location:index.php');
        }else{
            echo "simpan gagal";
        }
    }
    ?> 
</body>
</body>
</html>