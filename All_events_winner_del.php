<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Winner details</title>
    
  </head>
 
  <body>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname="events";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  //$table="event_names";
  $table = array("com_completed", "rd_completed", "pro_completed","cul_completed");


  


  echo "<div class=container style=height: px;width:800px>  
  <table class='table'>
  <thead class='thead-dark'>
    <tr >
      <th scope='col' >Choose event to remove winner details:</th> 
    </tr>
  </thead>";
 
  $count=0;
  for($i=0;$i<4;$i++)
  {
    $sql1="select * from ".$table[$i];

  $ss1=mysqli_query($conn, $sql1);
  if (mysqli_num_rows($ss1) > 0) {

    $count=1;
   // echo $count;
    while($row = mysqli_fetch_assoc($ss1)) {
        echo " <tbody>
        <tr>
        <td><a href=winner_del.php?b=".$row['name2'].">".$row['name2']."</a>";
        echo " </tbody>";
    }
}     
}
if($count==0)
 echo "<h3>No events available..</h3>";
    
    

echo "

</table>";
?>

  </body>
  </html>