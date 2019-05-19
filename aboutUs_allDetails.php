<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>aboutUs_remove</title>
    
  </head>
 
  <body>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname="gallery";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  //$table="event_names";
  $year=$_GET['x'];
  //echo $year;
  $table = array("hod", "tait_incharges", "tait_stu_body","site_modifiers");
  $count=0;
  


  echo "<div class=container style=height: px;width:800px>  
  <table class='table'>
  <thead class='thead-dark'>
    <tr >
      <th scope='col' >Faculty/Student ID</th> 
      <th scope='col' >Name</th> 
      <th scope='col' >Designation</th> 
      <th scope='col' ></th> 
    </tr>
  </thead>";
 

  for($i=0;$i<4;$i++)
  {
    $sql1="select * from ".$table[$i]." where year="."'$year'";
  //echo $sql1;
  $ss1=mysqli_query($conn, $sql1);

  //print_r($ss1);

  if (mysqli_num_rows($ss1) > 0) {

    $GLOBALS['count']=1;
    while($row = mysqli_fetch_assoc($ss1)) {
        echo " <tbody>
        <tr>
        <td><h5>".$row['id']."</h5></td>
        <td><h5>".$row['name']."</h5></td>
        <td><h5>".$row['desg']."</h5></td>";
        
      
        echo "<td>
        <center><button id='ll' onclick=myFunction(this.id,'$row[id]','$year') style=margin-top:-5px;margin-right:-20px;text-decoration:none >Delete</button></center></td></tr>
          </tbody>";
    }
} 


  }


    
    

echo "

</table>";

if($GLOBALS['count']!=1)
{
  echo "<div class='jumbotron' style='margin-left:70px;width:1000px'>";
  echo "<div class='alert alert-dark' role=alert> ";
  echo "<font size='7'>Currently Details are not available.....</font>";
echo "</div>";
}
?>
 <script>
 //var c=document.getElementById("ll");
// c.onclick=myfunction();

 function myFunction(x,p,y) {
  if(confirm("Pressing OK will permanently Delete the Details from Database"))
  window.location.assign("aboutUs_remove.php?y="+p+"&z="+y);
  else
  window.location.assign("aboutUs_allDetails.php");
}
</script>
  </body>
  </html>