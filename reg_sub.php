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
$sql2="select * from $event_name where st_roll='$roll'";

$ss2=mysqli_query($conn, $sql2);
$count=mysqli_num_rows($ss2);

if(mysqli_num_rows($ss2)>0)
{
  // echo "hello";
   header("location:alert_reg.php?a=$event_name");
}
else 
{
$sql="insert into $event_name(st_roll,st_name,st_gmail,st_branch,op) values('$roll','$name','$gmail','$branch','off')";
$ss=mysqli_query($conn, $sql);
header("location:reg_success.php?a=$event_name");
}
//echo "bye";

/*
$headers = "From: akashpintu09@gmail.com\r\n";
$headers .= "Reply-To: ".$gmail."\r\n";


$to=$gmail;
$subject="BOOM";
$message="halwa";

if ( mail($to,$subject,$message,$headers) ) {
      echo "mail has been sent...please check it from more details";
   }
else {
     echo "Failed to sent mail..try to register again" ;      
   }
*/
mysqli_close($conn);
}
else
{
  // echo "failed";
   header("location:index1.html");

}

?>

