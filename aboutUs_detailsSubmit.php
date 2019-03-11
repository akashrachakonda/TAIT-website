<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gallery";	
$name=$_POST["f1"];
$des=$_POST["f2"];
$mail=$_POST["f3"];
$phno=$_POST["f4"];

$img=$_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "tait_body/".$img;

move_uploaded_file($tempname,$folder);
// Create connection
$table=$_GET['x'];
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql="insert into $table(name,desg,phn,gmail,img) values('$name','$des','$phno','$mail','$img')";

$ss=mysqli_query($conn, $sql);

mysqli_close($conn);



?>


<script>
var p="<?php echo $table;?>";
if(alert("Successfully Details Uploaded")==null)
{
window.location.assign("aboutUs_detailsUpload.php?x="+p);
}
</script>

</body>
</html>