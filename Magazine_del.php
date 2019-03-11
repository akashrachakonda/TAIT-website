<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="gallery";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$table="magazine";


$name=$_GET['y'];

$sql2="delete from $table where name='$name'";

$result2 = mysqli_query($conn, $sql2);


header("Location:Magazine_alldisplay.php");


?>
