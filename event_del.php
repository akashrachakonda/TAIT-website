<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="allevents";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$table="event_names";


$name=$_GET['y'];
$sql="drop table $name";

$result = mysqli_query($conn, $sql);

$sql2="delete from $table where name='$name'";

$result2 = mysqli_query($conn, $sql2);


header("Location:reg_events.php");


?>
