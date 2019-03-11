<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="allevents";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$table="event_names";
$sql="select * from event_names";
//echo $table;
$ss=mysqli_query($conn, $sql);
//print_r($ss);
if (mysqli_num_rows($ss) > 0) {
    // output data of each row
    echo "Events conducted :";
    echo "<br>";
    while($row = mysqli_fetch_assoc($ss)) {
        echo $row['name']; 
    }
} 
?>
