<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: index.php");
}

include 'connection.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>preferences</title>
    <link rel="stylesheet" href="css/nav.css">

    <link rel="stylesheet" href="css/table.css">
</head>
<body>
<?php
include 'nav.php';
?>
   


<table id="table">
  <tr>
    <th>course preferences</th>
    <th>time preferences</th>
    <th>date preferences</th>

  

    <?php
$sql="SELECT * FROM `pref`";
$result=mysqli_query($conn,$sql);
if($result){
while($row=mysqli_fetch_assoc($result)){
$id=$row['id'];
$course=$row['course_p'];
$time=$row['time_p'];
$date=$row['date_p'];

echo '<tr> 
<th scope="row">'.$course.'</th>

<td>'.$time.'</td>
<td>'.$date.'</td>


</tr>';



}
   
}

  ?>
 



  </tr>
  
</table>
    
</body>
</html>