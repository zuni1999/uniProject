<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


include 'connection.php';
if(isset($_POST['insert'])){
    
    $course=$_POST['course_p'];
    $time=$_POST['time_p'];
    $date=$_POST['date_p'];

    



  $select="INSERT INTO `pref`(`id`,`course_p`, `time_p`, `date_p`) VALUES (NULL,'$course','$time', '$date')";
mysqli_query($conn,$select);
if($select){
 
    echo '<script type="text/javascript">';
    echo 'alert("course preference successfully");';
    echo 'window.location.href ="preferences.php"';
    echo '</script>';
 
    
  
 



}
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>add user</title>
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <?php
include 'fnav.php';
    ?>
<div class="login-form">
<h1>course preferecne</h1>
<form action="preferences.php" method="POST">
<p>course preferecnes</p>
<input type="text" name="course_p"  required>
<p>Time preferecnes</p>
<input type="text" name="time_p"  required>
    <p>Date preferecnes</p>
<input type="text" name="date_p"  required>



<button  type="submit" name="insert" >add</button>



</form>



</div>
  
             
            
      


    
</body>
</html>