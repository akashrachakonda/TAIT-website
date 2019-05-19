<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "allevents";
if(isset($_GET['b']))
$table=$_GET['b'];
else
header("location:admin_login.php");

 $conn = mysqli_connect($servername, $username, $password, $dbname);
if (isset($_POST['submit'])){
if(!empty($_POST["move"]))
{
    foreach($_POST["move"] as $move)
    {
        //echo "helkk";
        $sql="UPDATE ".$table." SET op='on' WHERE st_roll='$move';";
        //echo $sql;
        $res= mysqli_query($conn,$sql);
       // print_r($res);
        

  }
}
}
header("location:reg_filtered_list.php?b=$table");
?>