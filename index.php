<?php
error_reporting(0);
session_start();
include 'connection.php';


if(isset($_POST['login'])){

$username=$_POST['username'];
$password=$_POST['password'];

$select=mysqli_query($conn,"SELECT *FROM login WHERE username='$username'AND password='$password'");
$row=mysqli_fetch_array($select);
$role=isset($row['role'])? $row['role']:'' ;

$select2=mysqli_query($conn,"SELECT *FROM login WHERE username='$username'AND password='$password'");
$check_user=mysqli_num_rows($select2);
if($check_user==0){
    echo '<script type="text/javascript">';
echo 'alert("data is not found in database");';
echo 'window.location.href ="index.php"';
echo '</script>';
}

if($check_user==1){
$_SESSION["role"]=$row["role"];
$_SESSION["username"]=$row["username"];
$_SESSION["password"]=$row["password"];


if($role=="admin"){
    session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;
                            echo ("<SCRIPT LANGUAGE='JavaScript'>
                            window.alert('admin Login Successful')
                            window.location.href='admin.php';
                            </SCRIPT>");
    


}
if($role=="faculty"){
   
    session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;
                            echo ("<SCRIPT LANGUAGE='JavaScript'>
                            window.alert('faculty member Login Successful')
                            window.location.href='faculty.php';
                            </SCRIPT>");

                            

}




}


}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="loginbox">
        
        <h1>
            Login Here
        </h1>
        <form action="index.php" method="POST">
            <p>UserName</p>
            <input type="text" name="username" placeholder="Enter Your UserName" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login" >Login</button>
            

        </form>
    </div>
    
    
</body>
</html>