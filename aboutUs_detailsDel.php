<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Events</title>
    
  </head>
 
  <body>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname="gallery";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  //$table="event_names";
  $table = array("hod", "tait_incharges", "tait_stu_body");

  echo "<div class=container style=height: px;width:800px>  
  <table class='table'>
  <thead class='thead-dark'>
    <tr >
      <th scope='col' >All events Details:</th> 
    </tr>
  </thead>";
 

  for($i=0;$i<4;$i++)
  {
    $sql1="select * from ".$table[$i];

  $ss1=mysqli_query($conn, $sql1);
  if (mysqli_num_rows($ss1) > 0) {

   
    while($row = mysqli_fetch_assoc($ss1)) {
        echo " <tbody>
        <tr>
        <td><h5>".$row['name']."</h5>";
        $eve=$row['desg'];
        echo "
        <center><button id='ll' onclick=myFunction(this.id,'$row[name]') style=margin-top:-20px;margin-right:-900px;text-decoration:none >Delete</button></center></td></tr>
          </tbody>";
    }
} 
  }
    
    

echo "

</table>";
?>
 <script>
 //var c=document.getElementById("ll");
// c.onclick=myfunction();

 function myFunction(x,p) {
  if(confirm("Pressing OK will permanently Delete the Event details from Database"))
  window.location.assign("Remove_events.php?y="+p);
  else
  window.location.assign("aboutUs_allDetails.php");
}
</script>
  </body>
  </html>