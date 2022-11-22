<?php
include 'koneksi.php';
if(isset($_GET['id_user'])){
    $delete = mysqli_query($conn, "DELETE FROM tb_user WHERE id_user='".$_GET['iduser']."' " );
    header('location:index.php');
}
?>