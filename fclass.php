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
include 'fnav.php';
?>
   


<table id="table">
  <tr>
    <th>classroom id</th>
    <th>building</th>
    <th>capacity</th>
    <th>multimedia availability</th>
  

    <?php
$sql="SELECT * FROM `class`";
$result=mysqli_query($conn,$sql);
if($result){
while($row=mysqli_fetch_assoc($result)){
$id=$row['id'];
$class=$row['class_id'];
$building=$row['building'];
$capacity=$row['capacity'];


$multimedia=$row['multimedia'];
echo '<tr> 
<th scope="row">'.$class.'</th>

<td>'.$building.'</td>
<td>'.$capacity.'</td>


<td>'.$multimedia.'</td>

</tr>';



}
   
}

  ?>
 



  </tr>
  
</table>
    
</body>
</html>