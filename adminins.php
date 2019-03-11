<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Contest</title>
  </head>
  <body>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <div class="container" style="height:50px;width:600px">
    <h1 style="margin-left:150px">Contest Details:</h1>



    <form class="jumbotron" action="adminins_events.php" method="post" enctype="multipart/form-data" >
  <div class="form-group">
    <label for="exampleFormControlInput1">*Contest name:</label>
    <h6>(Contest name must be unique from other..)</h6>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="f1" placeholder="" required >
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">*Contest description:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="f2" rows="3" required></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">*Date:</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" name=" f3" value="" min="2019-01-01" max="2030-12-31"  required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">*Context duration(days):</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="f4" placeholder="" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">*Contest for:</label>
    <select class="form-control" id="exampleFormControlSelect1" name="f5" required>
      <option>Open for IT </option>
      <option>Open for All branches</option>
    </select>
  </div> 



  <div class="form-group">
    <label for="exampleFormControlInput1">Any contest link:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="f6" placeholder="insert here">
  </div>
  

  <?php
  $database=$_GET['x'];
  ?>


  <input type="hidden" class="form-control" id="exampleFormControlInput1" name="f7" value="<?php echo $database?>">
  <span class="navbar-brand mb-0 h1">Contest image:</span> <input type="file" name="uploadfile" style="margin-left:50px">
    <br><br>


   <button type="submit" class="btn btn-primary" style="margin-left:200px" >Submit</button>
</form>
</div>







  </body>
</html>
