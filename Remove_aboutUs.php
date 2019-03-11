<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="gallery";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$table = array("hod", "tait_incharges", "tait_stu_body");

$name=$_GET['y'];

for($i=0;$i<3;$i++)
{
$sql2="delete from ".$table[$i]." where name='$name'";

$result2 = mysqli_query($conn, $sql2);
}
header("Location:aboutUs_allDetails.php");


?>
