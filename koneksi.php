<?php
    $username="root";
    $password="";
    $server="localhost";
    $namadatabase="latihan_db";
    $conn=mysqli_connect($server,$username,$password,$namadatabase);

    if(!$conn){
        echo "gagal konek !!";
        die();
    }


?>