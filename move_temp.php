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
  //$event=$_GET['x'];
  $sql = "select * from temp";
  $res = mysqli_query($conn,$sql);
  
echo "<form action='move_tempphp.php' method='post'>";

 echo "<div class=container style=height: px;width:800px>  
  <h1 ><center>Winner Details:</center></h1>
<table class=table table-striped table-dark>
  <thead>
    <tr>
    <th scope=col  ></th>
      <th scope=col>Name</th>
      <th scope=col>rollno</th>
    
    </tr>
  </thead>";
  //echo "hello";

  if (mysqli_num_rows($res) > 0) 
  {
  while ($event = mysqli_fetch_assoc($res)){

      //echo "hello";
   echo "<tbody>
    <tr>
<td style='width:20px;'>
    <div class='form-check form-check-inline'>
    <input class='form-check-input' type='checkbox' name='move[]' value='$event[rollno]'>
  </td>
      <td>".$event['name']."</td>
      <td>".$event['rollno']."</td>
      </label>
      </div>
    </tr>
    
  </tbody>";
  }
  echo "<button class='btn btn-primary' style='margin-left:1000px'><input type='submit'  name='submit' value='Move'/></button>";
  echo "<div class='badge badge-primary text-wrap' style='width: 27rem;'>";
               echo "select the below checkboxes and press move to filter the below displayed details.....";
            echo "</div>";
 
}

else
{
   echo "<h1> Winner Details will be updated soon....</h1>";
}
echo "</form>";




?>
 </table>

</div>

 
</body>
</html>