<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<title>Winner_declaration</title>
<body>
<?php
//session_start();
$club=$_GET['x'];
if(!strcmp($club,"com_events"))
$table="com_completed";
else if(!strcmp($club,"rd_events"))
$table="rd_completed";
else if(!strcmp($club,"pro_events"))
$table="pro_completed";
if(!strcmp($club,"cul_events"))
$table="cul_completed";

echo "
<div class=container>
<h1 style=margin-top:15px> <span class='badge badge-secondary'>Select below: </span></h1>
<div class='jumbotron' style='margin-top:50px'>
<div class='alert alert-dark' role='alert'>
  Upload event details:-<a href='adminins.php?x=$club' class='alert-link'>Click here</a>.
</div>
<div class='alert alert-dark' role='alert'>
  Completed event details:- <a href='completed_events.php?a=$table' class='alert-link'>Click here</a>.
  </div>
  
</div>
</div >";
?>

</body>
</html>