<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<title>Add_Remove Events</title>
<body>
<?php
$table=$_GET['x'];
echo "
<div class='container'>
<h1 style=margin-top:15px> <span class=badge badge-secondary>Select below: </span></h1>
<div class='jumbotron' style=margin-top:50px>
<div class='alert alert-dark' role='alert'>
  Add Events:-<a href='adminins.php?x=$table' class=alert-link>Click here</a>.
</div>
<div class='alert alert-dark' role='alert'>
  Remove Events:- <a href=admin_facDisplay.php class=alert-link>Click here</a>.
  </div>
</div>
</div >";
?>
</body>
</html>