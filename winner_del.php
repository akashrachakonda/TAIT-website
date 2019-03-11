<?php
include('admin_login_php2.php');
if($login==null )
 header('location:admin_login.php');
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Completed Contests</title>
    
  </head>
  <body>
  <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "allevents";

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if(isset($_GET['b']))
  $event=$_GET['b'];
  else
  header("location:admin_login.php");
  $sql = "select * from winners where Event_name='$event'";
  $res = mysqli_query($conn,$sql);
               

 echo "<div class=container style=height: px;width:800px>  
  <h1 ><center>Winner Details:</center></h1>
<table class=table table-striped table-dark>
  <thead>
    <tr>
      <th scope=col>Name</th>
      <th scope=col>Branch</th>
      <th scope=col>Achievement stand</th>
    </tr>
  </thead>";
  //echo "hello";

  if (mysqli_num_rows($res) > 0) 
  {
  while ($event = mysqli_fetch_assoc($res)){

      //echo "hello";
   echo "<tbody>
    <tr>
      <td>".$event['name']."</td>
      <td>".$event['branch']."</td>
      <td>".$event['Ach_stand']."
    
     <center><button id='ll' onclick=myFunction(this.id,'$event[name]') style=margin-top:-20px;margin-right:-80px;text-decoration:none >Delete</button></center>
   </td>
    </tr>
    
  </tbody>";
  }
}
else
{
   echo "<h1> No winner details available....</h1>";
}
 ?>
</table>
</div>


<script>
 //var c=document.getElementById("ll");
// c.onclick=myfunction();

 function myFunction(x,p) {
  if(confirm("Pressing OK will permanently Delete the Winner Details from Database"))
  window.location.assign("winner_details_del.php?y="+p);
  else
  window.location.assign("winner_del.php");
}
</script> 
 
</body>
</html>