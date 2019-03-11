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
 $dbname = "gallery";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  $sql = "select * from faculty_details";
  $res = mysqli_query($conn,$sql);
 //print_r($res);
                

 echo "<div class=container style=height: px;width:800px>  
  <h1 ><center>Faculty Details:</center></h1>
<table class=table table-striped table-dark>
  <thead>
    <tr>
      <th scope=col>Name</th>
      <th scope=col>Designation</th>
      <th scope=col>ImageId</th>
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
      <td>".$event['desg']."</td>
      <td>".$event['img']."
      <center><button id='ll' onclick=myFunction(this.id,'$event[img]') style=margin-top:-20px;margin-right:-80px;text-decoration:none >Delete</button></center>
      </td>
    </tr>
    
  </tbody>";
  }
}
else
{
   echo "<h1>No Faculty Details avaliable...</h1>";
}
 ?>
</table>
</div>
<script>
 //var c=document.getElementById("ll");
// c.onclick=myfunction();

 function myFunction(x,p) {
  if(confirm("Pressing OK will permanently Delete the Faculty Details from Database"))
  window.location.assign("faculty_del.php?y="+p);
  else
  window.location.assign("admin_facDisplay.php");
}
</script> 
 
</body>
</html>