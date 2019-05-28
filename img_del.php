<?php
extract($_REQUEST);
$y=$_GET['k'];
$ye=$_GET['year'];
include('img_rev.php');

//echo $y;
//echo "hello";
$sql=mysql_query("select * from ".$y." where path='$del'");

$row=mysql_fetch_array($sql);

//unlink("Inner/".$pic['path'].");

mysql_query("delete from ".$y." where path='$del'");
header("Location:img_rev.php?x=".$y."&y=".$ye);

?>