<?php
include('koneksi.php');

$nama=$_POST['nama'];
$email=$_POST['email'];
$pass=$_POST['password'];

//CREATE
$sql="INSERT INTO user (nama,email,password) VALUES ('$nama','$email','$pass') ";
$query= mysqli_query($conn,$sql);
if($query){
    echo "Berhasil di simpan";
    header('location:index.php');
}
else{
    echo "gagal";
}


?>