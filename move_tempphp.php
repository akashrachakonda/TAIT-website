<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "allevents";

 $conn = mysqli_connect($servername, $username, $password, $dbname);
if (isset($_POST['submit'])){
if(!empty($_POST["move"]))
{
    foreach($_POST["move"] as $move)
    {
        //echo "helkk";
        $sql="UPDATE temp SET op='on' WHERE rollno='$move';";
       // $sql="insert into temp(option) values('on') where rollno='$move';";
        echo $sql;
        $res= mysqli_query($conn,$sql);
        print_r($res);
        

  }
}
}
?>