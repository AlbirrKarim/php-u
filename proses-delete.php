<?php
include('koneksi.php');

$id=$_GET['id'];

$sql="DELETE FROM user WHERE id='$id' ";
$query=mysqli_query($conn,$sql);
if($query){
    echo "berhasil di delete";
    header('location:index.php');
}
else{
    echo "gagal";
}



?>