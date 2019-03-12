<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php 
        include('koneksi.php');

        ///READ
        $sql="SELECT * FROM user";
        $query=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($query)){
            echo $row['id']." | ";
            echo $row['nama']." | ";
            echo $row['email']." | ";
            //aslinya gini 
            ///<a href="proses-delete.php?id=5" >Delete</a>

            //kalo di buat dinamis jadi gini...
            echo "<a href='proses-delete.php?id=".$row['id']." '>Delete</a>";
            echo "<a href='form-update.php?id=".$row['id']." '>Update</a>";
            echo "<br>";
        }

        /*
        INSERT INTO table_name (column1, column2, column3, ...)
        VALUES (value1, value2, value3, ...);
        
        */
    ?>
    <form action="proses-create.php" method="post">
        <input type="text" placeholder="nama" name="nama">
        <input type="text" placeholder="email" name="email">
        <input type="text" placeholder="password" name="password">
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>