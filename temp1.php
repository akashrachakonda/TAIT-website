<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<title>Magazines</title>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gallery";	
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql="select * from magazine";
$ss=mysqli_query($conn, $sql);
$count = mysqli_num_rows($ss);
echo"
<div class=container>
<h1 style='margin-top:15px'> <span class='badge badge-secondary'>Select below: </span></h1>
<div class='jumbotron'style='margin-top:50px'>";

//echo $count;
 


if($count>0)
{
//echo "hello";
while($mag=mysqli_fetch_assoc($ss))
{

    echo "<div class=card style=width: 18rem;>
    <img src="..." class=card-img-top alt="...">
    <div class=card-body>
      <h5 class=card-title>Card title</h5>
      <p class=card-text>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href=# class=btn btn-primary>Go somewhere</a>
    </div>
  </div>";


echo "<div class='alert alert-dark' role='alert'>
    ".$mag['file_name'] .":-<a href=magazine/$mag[file_name] class=alert-link>Click here</a>.
</div>";
}
}
else
 echo "<h3>No Magazines available..</h3>";

echo "
</div>
</div >";
?>

</body>
</html>






echo "<div class=card style=width: 18rem;>
  <img src="..." class=card-img-top alt="...">
  <div class=card-body>
    <h5 class=card-title>Card title</h5>
    <p class=card-text>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href=# class=btn btn-primary>Go somewhere</a>
  </div>
</div>";