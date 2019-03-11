<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="allevents";
if(isset($_POST["submit"]))
{
$roll=$_POST["f1"];
$name=$_POST["f2"];
$branch=$_POST["f3"];
$gmail=$_POST["f4"];
$event_name=$_POST["f5"];
//echo $event_name;
//echo "hello";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql="insert into $event_name(st_roll,st_name,st_gmail,st_branch) values('$roll','$name','$gmail','$branch')";
$ss=mysqli_query($conn, $sql);
//echo "bye";
mysqli_close($conn);
}
?>
