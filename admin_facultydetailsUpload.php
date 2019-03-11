<html>
<body>
<script>
if(alert("Successfully Details Uploaded")==null)
{
window.location.assign("admin_facultydetails.php");
}
</script>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gallery";	
$name=$_POST["f1"];
$des=$_POST["f2"];

$img=$_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "images_faculty/".$img;

move_uploaded_file($tempname,$folder);
// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql="insert into faculty_details(name,desg,img) values('$name','$des','$img')";

$ss=mysqli_query($conn, $sql);

mysqli_close($conn);



?>
</body>
</html>