<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Upload Winner details</title>
  </head>
  <body>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <div class="container" style="height:50px;width:600px">
    <h1 style="margin-left:150px">Winner Details:</h1>

  <?php
$x=$_GET['b'];
  ?>
    <form class="jumbotron" action="winner_submit.php" method="post" enctype="multipart/form-data" >
  <div class="form-group">
    <label for="exampleFormControlInput1">Winner Name:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="f1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Branch:</label>
    <select class="form-control" id="exampleFormControlSelect1" name="f2">
      <option>IT</option>
      <option>CSE</option>
      <option>ECE</option>
      <option>EEE</option>
      <option>MECH</option>
      <option>CIVIL</option>
    </select>
  </div> 

  <div class="form-group">
    <label for="exampleFormControlSelect1">Achievement stand:</label>
    <select class="form-control" id="exampleFormControlSelect1" name="f3">
      <option>1st</option>
      <option>2nd</option>
      <option>3rd</option>
      <option>4th</option>
      <option>5th</option>
    </select>
  </div> 
  <div class="form-group">
    <input type="hidden" class="form-control" id="exampleFormControlInput1" name="f4" value="<?php echo $x?>">
  </div>
 
    <br><br>
   <button type="submit" class="btn btn-primary" style="margin-left:200px" >Submit</button>
</form>
</div>
  </body>
</html>
