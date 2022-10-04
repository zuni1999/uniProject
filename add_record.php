<?php


session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}

include 'connection.php';
if(isset($_POST['insert'])){
    
    $faculty_id=$_POST['faculty_id'];
    $name=$_POST['name'];
    $department=$_POST['department'];
    $desgination=$_POST['desgination'];



  $select="INSERT INTO `faculty`(`id`, `faculty_id`, `name`, `department`, `desgination`) VALUES (NULL,'$faculty_id','$name','$department','$desgination')";
mysqli_query($conn,$select);
if($select){
 
    echo '<script type="text/javascript">';
    echo 'alert("faculty member record successfully");';
    echo 'window.location.href ="add_record.php"';
    echo '</script>';
 
    
  
 



}
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>add faculty record</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <?php
include 'nav.php';
    ?>
<div class="login-form">
<h1>faculty record</h1>
<form action="add_record.php" method="POST">
<p>faculty id</p>
<input type="text" name="faculty_id" placeholder="Enter faculty id" required>
<p>name</p>
<input type="text" name="name" placeholder="Enter name" required>
<p>department</p>
<input type="text" name="department" placeholder="department" required>
<p>desgination</p>
<input type="text" name="desgination" placeholder="desgination" required>


<button  type="submit" name="insert" >add faculty record</button>



</form>



</div>
  
             
            
      


    
</body>
</html>