<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Winner Details</title>
    
  </head>
  <body>
  <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "allevents";

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  $event=$_GET['x'];
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
     </td>
    </tr>
    
  </tbody>";
  }
}
else
{
   echo "<h1> Winner Details will be updated soon....</h1>";
}
 ?>
</table>
</div>
 
</body>
</html>