<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php 
$year=$_GET['x'];
?>
<title>Admin_DetailsUpload</title>
<body>

<div class="container">
<h1 style="margin-top:15px"> <span class="badge badge-secondary">Select below: </span></h1>
<div class="jumbotron" style="margin-top:50px">
<div class="alert alert-dark" role="alert">
  Upload HOD Details:-<a href="aboutUs_detailsUpload.php?x=hod&y=<?php echo $year; ?>" class="alert-link">Click here</a>.
</div>
<div class="alert alert-dark" role="alert">
  Upload TAIT Faculty Incharge Details:- <a href="aboutUs_detailsUpload.php?x=tait_incharges&y=<?php echo $year; ?>" class="alert-link">Click here</a>.
  </div>
  <div class="alert alert-dark" role="alert">
  Upload TAIT Student coordinator Details:- <a href="aboutUs_detailsUpload.php?x=tait_stu_body&y=<?php echo $year; ?>" class="alert-link">Click here</a>.
  </div>

  <div class="alert alert-dark" role="alert">
  Upload TAIT Site Developers Details(currently):- <a href="aboutUs_detailsUpload.php?x=site_modifiers&y=<?php echo $year; ?>" class="alert-link">Click here</a>.
  </div>
</div>
</div >

</body>
</html>