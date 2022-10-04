<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


include 'connection.php';
if(isset($_POST['insert'])){
    
    $course=$_POST['course'];
    $title=$_POST['title'];
    $enroll=$_POST['enroll'];
    $multi=$_POST['multi'];



  $select="INSERT INTO `course`(`id`, `course`, `title`, `enroll`, `multi`) VALUES (NULL,'$course','$title','$enroll','$multi')";
mysqli_query($conn,$select);
if($select){
 
    echo '<script type="text/javascript">';
    echo 'alert("course record record successfully");';
    echo 'window.location.href ="add_courses.php"';
    echo '</script>';
 
    
  
 



}
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>add user</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <?php
include 'nav.php';
    ?>
<div class="login-form">
<h1>add courses</h1>
<form action="add_courses.php" method="POST">
<p>course code</p>
<input type="text" name="course"  required>
<p>course title</p>
<input type="text" name="title"  required>
<p>Enrollments</p>
<input type="text" name="enroll" required>
<p>multimeda required</p>
<input type="text" name="multi"  required>


<button  type="submit" name="insert" >add course</button>



</form>



</div>
  
             
            
      


    
</body>
</html>