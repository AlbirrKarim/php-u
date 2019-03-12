<?php
    include('koneksi.php');

    $id=$_POST['id'];
    $nm=$_POST['nama'];
    $email=$_POST['email'];
    $pass=$_POST['password'];

    // var_dump($id);
    // var_dump($nm);
    // var_dump($email);
    // var_dump($pass);

    /*
    UPDATE table_name
    SET column1 = value1, column2 = value2, ...
    WHERE condition;
    */
    $sql="UPDATE user SET nama='$nm', email ='$email', password='$pass' WHERE id ='$id' ";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo "berhasil";
        header('location:index.php');
    }
    else{
        echo "GAGAL";
    }



?>