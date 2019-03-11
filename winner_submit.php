<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "allevents";	
$name=$_POST["f1"];
$branch=$_POST["f2"];
$stand=$_POST["f3"];
$event=$_POST["f4"];
//$table=$_GET['x'];
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql="insert into winners(name,branch,Ach_stand,Event_name) values('$name','$branch','$stand','$event')";

$ss=mysqli_query($conn, $sql);

mysqli_close($conn);



?>


<script>
var p="<?php echo $event ?>";
if(alert("Successfully Details Uploaded")==null)
{
window.location.assign("winner_upload.php?b="+p);
}
else
{
 alert("Failed to upload details") 
 die(); 
}
</script>

</body>
</html>