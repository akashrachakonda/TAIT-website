<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="gallery";
$conn = mysqli_connect($servername, $username, $password, $dbname);



$name=$_GET['y'];

$sql2="delete from faculty_details where img='$name'";

$result2 = mysqli_query($conn, $sql2);


header("Location:admin_facDisplay.php");


?>
