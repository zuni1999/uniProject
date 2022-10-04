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
    <th>faculty_id</th>
    <th>name</th>
    <th>department</th>
    <th>desgination</th>
  

    <?php
$sql="SELECT * FROM `faculty`";
$result=mysqli_query($conn,$sql);
if($result){
while($row=mysqli_fetch_assoc($result)){
$id=$row['id'];
$faculty=$row['faculty_id'];
$name=$row['name'];
$department=$row['department'];


$desgination=$row['desgination'];
echo '<tr> 
<th scope="row">'.$faculty.'</th>

<td>'.$name.'</td>
<td>'.$department.'</td>


<td>'.$desgination.'</td>

</tr>';



}
   
}

  ?>
 



  </tr>
  
</table>
    
</body>
</html>