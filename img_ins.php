	<?php
$conn = mysqli_connect("localhost","root","","gallery");
//print_r( $_FILES["uploadfile"]);
if(isset($_POST['submit']))
{
$p=$_POST['table'];
$year=$_POST['year'];
if($_FILES["uploadfile"]["type"]=="image/jpeg" || $_FILES["uploadfile"]["type"]=="image/jpg" || $_FILES["uploadfile"]["type"]=="image/png")
{
if($_FILES["uploadfile"]["error"]==0)
{
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "Inner/".$filename;
$query="insert into ".$_POST['table']." (path,year) values('$folder','$year')";
//$p=$_POST['database'];
echo $p;
$data=mysqli_query($conn,$query);
if($data)
{
	if(move_uploaded_file($tempname,$folder))
	{
		header("location:done2.php?y=".$p."&m=".$year);
	}
	else
	{
		header("location:Notdone2.php?y=".$p."&m=".$year);
	}
}
else
{
echo "DATA not inst";
}
}
else
{
	header("location:error2.php?y=".$p."&m=".$year);
}
}
else
{
	header("location:uploadingfailed4.php?y=".$p."&m=".$year);
}
}
?>
