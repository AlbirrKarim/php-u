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
    //var_dump($_GET['id']);
    $id=$_GET['id'];
?>
    <form action="proses-update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <input type="text" placeholder="nama" name="nama">
        <input type="text" placeholder="email" name="email">
        <input type="text" placeholder="password" name="password">
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>