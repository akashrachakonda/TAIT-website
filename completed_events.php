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
 // session_start();
    $link = mysql_connect('localhost', 'root', '');
  if (!$link) {
      die('Not connected : ' . mysql_error());
  }
  $db_selected = mysql_select_db('events', $link);
  if (!$db_selected) {
      die ('Database error : ' . mysql_error());
  }
if(isset($_GET['a']))
$table=$_GET['a'];
else
header("location:admin_login.php");
  $sql = "select * from ".$table;
            $res = mysql_query($sql);
             
 //echo $sql;
//$event=$_SESSION['database'];
//echo $event;
                

 echo "<div class=container style=height: px;width:800px>  
  <h1 ><center>Contest Details:</center></h1>
<table class=table table-striped table-dark>
  <thead>
    <tr>
      <th scope=col>Name</th>
      <th scope=col>Date</th>
      <th scope=col>Duration</th>
      <th scope=col>Participants</th>
    </tr>
  </thead>";
  echo "<a href=completed_events2_download.php?c=".$table.">PDF Format</a>";
  while ($event = mysql_fetch_array($res)){
      //echo "hello";
   echo "<tbody>
    <tr>
      <td>".$event['name2']."</td>
      <td>".$event['date2']."</td>
      <td>".$event['duration2']."</td>
      <td>".$event['contest_for']."</td>
     <td> <center><button id='ll' onclick=myFunction(this.id,'$event[name2]') style=margin-top:-5px;margin-right:-70px;text-decoration:none >Winner Details</button></center>
      </td>
    </tr>
    
  </tbody>";
  }
  ?>
  
</table>
</div>
<script>
 

 function myFunction(x,p) {
  
  window.location.assign("winner_display.php?x="+p);
}
</script> 
 
 
</body>
</html>