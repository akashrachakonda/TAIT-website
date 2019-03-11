<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="events";
$conn = mysqli_connect($servername, $username, $password, $dbname);


$table = array("com_events", "rd_events", "pro_events","cul_events");
$name=$_GET['y'];
//$sql="drop table $name";

//$result = mysqli_query($conn, $sql);
for($i=0;$i<4;$i++)
{
$sql2="delete from ".$table[$i]." where name='$name'";

$result2 = mysqli_query($conn, $sql2);
}

header("Location:All_events_admin.php");


?>
