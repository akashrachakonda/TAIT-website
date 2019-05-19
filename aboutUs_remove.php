<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="gallery";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$table = array("hod", "tait_incharges", "tait_stu_body","site_modifiers");

$id=$_GET['y'];
$year2=$_GET['z'];
echo $id;
for($i=0;$i<4;$i++)
{
$sql2="delete from ".$table[$i]." where id='$id'";
echo $sql2;
$result2 = mysqli_query($conn, $sql2);
}
header("Location:aboutUs_allDetails.php?x=$year2");


?>
