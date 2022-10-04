<?php
session_start();


if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: index.php");
}


include 'connection.php';
if(isset($_POST['add'])){
    $email=$_POST['email'];
$username=$_POST['username'];

$password=$_POST['password'];




  $sql="INSERT INTO `login`(`id`,`username`, `email`, `password`, `role`) VALUES (NULL,'$username','$email','$password','faculty')";
mysqli_query($conn,$sql);
if($sql){
 
    echo '<script type="text/javascript">';
    echo 'alert("new faculty member added successfully");';
    echo 'window.location.href ="add_faculty.php"';
    echo '</script>';
 
    
  
 
}


}






?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>add faculty member</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <?php
include 'nav.php';
    ?>
<div class="login-form">
<h1>add faculty</h1>
<form action="add_faculty.php" method="POST">
<p>faculty email</p>
<input type="email" name="email" placeholder="Enter your email" required>
<p>name</p>
<input type="text" name="username" placeholder="Enter your Username" required>
<p>password</p>
<input type="password" name="password" placeholder="password" required>


<button  type="submit" name="add" >add faculty</button>



</form>



</div>
  
             
            
      


    
</body>
</html>