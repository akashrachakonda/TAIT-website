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
  $dbname="allevents";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  $table="event_names";
  $sql="select * from event_names";
  //echo $table;
  $ss=mysqli_query($conn, $sql);


  echo "<div class=container style=height: px;width:800px>  
  <table class='table'>
  <thead class='thead-dark' >
    <tr >
      <th scope='col' >Registered Student Details:</th> 
    </tr>
  </thead>";
 

  if (mysqli_num_rows($ss) > 0) {

   
    while($row = mysqli_fetch_assoc($ss)) {
        echo " <tbody>
        <tr>
        <td><a href=reg_list.php?b=".$row['name'].">".$row['name']."</a>";
        $eve=$row['name'];
        echo "
        <center><button id='ll' onclick=myFunction(this.id,'$row[name]') style=margin-top:-20px;margin-right:-900px;text-decoration:none >Delete</button></center></td></tr>
          </tbody>";
    }
} 
    

echo "

</table>";
?>
 <script>
 //var c=document.getElementById("ll");
// c.onclick=myfunction();

 function myFunction(x,p) {
  if(confirm("Pressing OK will permanently Delete the Registered student details from Database"))
  window.location.assign("event_del.php?y="+p);
  else
  window.location.assign("reg_events.php");
}
</script>
  </body>
  </html>