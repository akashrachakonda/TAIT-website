<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Registered Students</title>
    
  </head>
  <body>
  <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "allevents";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

$table=$_GET['b'];
  $sql = "select * from $table";
  $res = mysqli_query($conn,$sql);
             
 

                

 echo "<div class=container style=height: px;width:800px>  
  <h1 ><center>Registered Students:</center></h1>
  <a href=download.php?c=".$table." >PDF Format</a>
<table class=table table-striped table-dark>
  <thead>
    <tr>
      <th scope=col>RollNo</th>
      <th scope=col>Name</th>
      <th scope=col>Branch</th>
      <th scope=col>Gmail</th>
    </tr>
  </thead>";
  
  if (mysqli_num_rows($res) > 0) 
  {
  while ($event = mysqli_fetch_assoc($res)){
      //echo "hello";
   echo "<tbody>
    <tr>
      <td>".$event['st_roll']."</td>
      <td>".$event['st_name']."</td>
      <td>".$event['st_branch']."</td>
      <td>".$event['st_gmail']."</td>
    </tr>
    
  </tbody>";
  }
}
else
{
   echo "<h1>No Registered student Details avaliable...</h1>";
}
  ?>
  
</table>
</div>
 
 
</body>
</html>