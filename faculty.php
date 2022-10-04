<?php
include 'connection.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: index.php");
}









?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>faculty home page</title>
    <link rel="stylesheet" href="css/form.css">

</head>
<body>
    <?php
include 'fnav.php';
?>
<h1><?php echo "Welcome ". $_SESSION["username"]?>!</h1>
    
</body>
</html>