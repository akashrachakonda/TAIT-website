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

    <title>Registered Students</title>
    
  </head>
  <body>
  <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "allevents";

  $conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_GET['b']))
$table=$_GET['b'];
else
header("location:admin_login.php");
  $sql = "select * from $table where op='on'";
  $res = mysqli_query($conn,$sql);
             
 
  echo "<form action='reg_list_filter.php?b=$table' method='post'>";
                

 echo "<div class=container style=height: px;width:800px>  
  <h1 ><center>Registered Students(Filtered):</center></h1>
  <a href=download2.php?c=".$table." >PDF Format</a>
<table class=table table-striped table-dark>
  <thead>
    <tr>
    <th scope=col  ></th>
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
    <td style='width:20px;'>
    <div class='form-check form-check-inline'>
    <input class='form-check-input' type='checkbox' name='move[]' value='$event[st_roll]'>
  </td>
      <td>".$event['st_roll']."</td>
      <td>".$event['st_name']."</td>
      <td>".$event['st_branch']."</td>
      <td>".$event['st_gmail']."</td>
    </tr>
    
  </tbody>";
  }
  echo "<button class='btn btn-primary' style='margin-left:1000px'><input type='submit'  name='submit' value='Move'/></button>";
  echo "<div class='badge badge-primary text-wrap' style='width: 27rem;'>";
               echo "select the below required checkboxes and press move to filter the below displayed details.....";
            echo "</div>";
}
else
{
   echo "<h1>No Registered student Details avaliable...</h1>";
}
echo "</form>";
  ?>
  
</table>
</div>
 
 
</body>
</html>