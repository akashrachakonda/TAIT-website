<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gallery";	
$name=$_POST["f1"];
$acc=$_POST["f2"];


$img=$_FILES["uploadfile1"]["name"];
$tempname1 = $_FILES["uploadfile1"]["tmp_name"];
$folder1 = "magazine/".$img;

move_uploaded_file($tempname1,$folder1);

$file=$_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "magazine/".$file;

move_uploaded_file($tempname,$folder);
// Create connection
//$table=$_GET['x'];
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql="insert into magazine(name,year,file_name,img) values('$name','$acc','$file','$img')";

$ss=mysqli_query($conn, $sql);

mysqli_close($conn);



?>


<script>

if(alert("Successfully Details Uploaded")==null)
{
window.location.assign("Magazine_upload.php");
}
</script>

</body>
</html>