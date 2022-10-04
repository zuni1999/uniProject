<?php


error_reporting(0);
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: index.php");
}


include 'connection.php';
if(isset($_POST['insert'])){
    
    $class=$_POST['class_id'];
    $building=$_POST['building'];
    $capacity=$_POST['capacity'];
    $multimedia=$_POST['multimedia'];



  $select="INSERT INTO `class`(`id`, `class_id`, `building`, `capacity`, `multimedia`) VALUES (NULL,'$class','$building','$capacity','$multimedia')";
mysqli_query($conn,$select);
if($select){
 
    echo '<script type="text/javascript">';
    echo 'alert("class record record successfully");';
    echo 'window.location.href ="add_classroom.php"';
    echo '</script>';
 
    
  
 



}
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>add classroom</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <?php
include 'nav.php';
    ?>
<div class="login-form">
<h1>add Classrooms</h1>
<form action="add_classroom.php" method="POST">
<p>classroom id</p>
<input type="text" name="class_id"  required>
<p>building</p>
<input type="text" name="building"  required>
<p>capacity</p>
<input type="text" name="capacity"  required>
<p>multimeda availability</p>
<input type="text" name="multimedia"  required>


<button  type="submit" name="insert" >add classroom</button>



</form>



</div>
  
             
            
      


    
</body>
</html>