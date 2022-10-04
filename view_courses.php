<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}

include 'connection.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>trip information</title>
    <link rel="stylesheet" href="css/nav.css">

    <link rel="stylesheet" href="css/table.css">
</head>
<body>
<?php
include 'nav.php';
?>
   


<table id="table">
  <tr>
    <th>course code</th>
    <th>course title</th>
    <th>enrollment</th>
    <th>multimedia required</th>
  

    <?php
$sql="SELECT * FROM `course`";
$result=mysqli_query($conn,$sql);
if($result){
while($row=mysqli_fetch_assoc($result)){
$id=$row['id'];
$course=$row['course'];
$title=$row['title'];
$enroll=$row['enroll'];


$multi=$row['multi'];
echo '<tr> 
<th scope="row">'.$course.'</th>

<td>'.$title.'</td>
<td>'.$enroll.'</td>


<td>'.$multi.'</td>

</tr>';



}
   
}

  ?>
 



  </tr>
  
</table>
    
</body>
</html>