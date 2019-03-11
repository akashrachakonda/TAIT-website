<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>All Magazines:-</title>
    
  </head>
  <body>
  <?php
 
    $link = mysql_connect('localhost', 'root', '');
  if (!$link) {
      die('Not connected : ' . mysql_error());
  }
  $db_selected = mysql_select_db('gallery', $link);
  if (!$db_selected) {
      die ('Database error : ' . mysql_error());
  }

  $sql = "select * from magazine";
            $res = mysql_query($sql);
$count=mysql_num_rows($res);   
                

 echo "<div class=container style=height: px;width:800px>  
  <h1 ><center>Faculty Details:</center></h1>
<table class=table table-striped table-dark>
  <thead>
    <tr>
      <th scope=col>Magazine</th>
    </tr>
  </thead>";
  //echo "hello";

 
  if($count>0)
  {
  while ($event = mysql_fetch_array($res)){

      //echo "hello";
   echo "<tbody>
    <tr>
      <td>".$event['name']." ".$event['year']."
      
      <center><button id='ll' onclick=myFunction(this.id,'$event[name]') style=margin-top:-20px;margin-right:-500px;text-decoration:none >Delete</button></center>
      </td>
    </tr>
    
  </tbody>";
  }
}
else
   echo "<h1>No Magazine Details avaliable...</h1>";
  ?>
</table>
</div>
<script>
 //var c=document.getElementById("ll");
// c.onclick=myfunction();

 function myFunction(x,p) {
  if(confirm("Pressing OK will permanently Delete the Magazine Details from Database"))
  window.location.assign("Magazine_del.php?y="+p);
  else
  window.location.assign("Magazine_alldisplay.php");
}
</script> 
 
</body>
</html>