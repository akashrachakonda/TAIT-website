<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "events";	
$dbname2="allevents";
$name=$_POST["f1"];
$des=$_POST["f2"];
$date=$_POST["f3"];
$dur=$_POST["f4"];
$cont=$_POST["f5"];
$Any_link=$_POST["f6"];
$database=$_POST["f7"];
$img=$_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "images2/".$img;
$res=strcmp($cont,"Open for All branches");
//echo $res;
//echo "hello";
move_uploaded_file($tempname,$folder);
// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);
$conn2=mysqli_connect($servername, $username, $password, $dbname2);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}	
$newDate=date('Y-m-d', strtotime($date.'+'.$dur.'days'));
if($res==0)
{

$link="registration.php?a=".$name;
$sql = "INSERT INTO $database(name,description,start_date,duration,contest_for,image,end_date,reg_link,link) VALUES('$name','$des','$date','$dur','$cont','$img','$newDate','$link','$Any_link')";
$ss=mysqli_query($conn, $sql);
$sql2="create table $name(st_roll varchar(10) primary key,st_name varchar(50),st_gmail varchar(50),st_branch varchar(10))";
$ex=mysqli_query($conn2, $sql2);
$sql3="insert into event_names(name) values('$name')";
$exe=mysqli_query($conn2, $sql3);
}
else
{
    $sql = "INSERT INTO $database(name,description,start_date,duration,contest_for,image,end_date,reg_link,link) VALUES('$name','$des','$date','$dur','$cont','$img','$newDate','0','$Any_link')";
$ss=mysqli_query($conn, $sql);
}
//echo $ss;
mysqli_close($conn);

?>
<script>
var p="<?php echo $database;?>";
if(alert("Successfully Details Uploaded")==null)
{
window.location.assign("adminins.php?x="+p);
}


</script>
</body>
</html>