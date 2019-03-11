<?php
include('admin_login_php2.php');
if($login==null )
 header('location:admin_login.php');
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<title>Admin_FacultyDetails</title>
<body>

<div class="container">
<h1 style="margin-top:15px"> <span class="badge badge-secondary">Select below: </span></h1>
<div class="jumbotron" style="margin-top:50px">
<div class="alert alert-dark" role="alert">
  Upload Faculty Details:-<a href="admin_facultydetails.php" class="alert-link">Click here</a>.
</div>
<div class="alert alert-dark" role="alert">
  Remove Faculty Details:- <a href="admin_facDisplay.php" class="alert-link">Click here</a>.
  </div>
</div>
</div >

</body>
</html>