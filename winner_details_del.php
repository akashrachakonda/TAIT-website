<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="allevents";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$table="winners";


$name=$_GET['y'];

$sql2="delete from $table where name='$name'";

$result2 = mysqli_query($conn, $sql2);


header("Location:winner_del.php?b=$name");


?>
