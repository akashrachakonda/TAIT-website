<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
<?php
//$database="cultural"; 
//if(isset($_GET['x']))
$table=$_GET['x'];
$year2=$_GET['y'];
//echo $table;
//echo " ";
//echo $year2;

$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    
    die('Not connected : ' . mysql_error());
}
$db_selected = mysql_select_db('gallery', $link);   
if (!$db_selected) {
    die ('Database error : ' . mysql_error());
}
        $sql = "select * from ".$table." where year=".$year2;
        //echo $sql;
       
        $result = mysql_query($sql);
        //print_r($result);
      
        //echo "<div>";
        ?>
        
<nav class="navbar navbar-light bg" style="background-color:#007cc0;height:50px"> 
        <form action="img_ins.php" method="post" enctype="multipart/form-data">
            &nbsp&nbsp&nbsp<span class="navbar-brand mb-0 h1">Upload image:</span> <input type="file" name="uploadfile" style="margin-left:50px" >
            <input type="hidden" value="<?php echo $table?>" name="table">
            <input type="hidden" value="<?php echo $year2?>" name="year">
           
            <input type="submit" name="submit">
            </form>
        
      </nav> 
    <div style="margin-top:50px">   
<?php
//echo $database;
$rowcount=mysql_num_rows($result); 
      if($rowcount>0)
      {
        while ($pic = mysql_fetch_array($result)){
            echo "<div style='float:left'>";
            echo " <div class='card' style='width:21rem; height:rem' >";
            echo "<img class='card-img-top' src='$pic[path]' alt='Card image cap' width='300' height='300'>";
       
        ?>
        <div class='card-body'>
        <?php
        $my="img_del.php?del=".$pic['path']."&k=".$table."&year=".$year2;
        echo "<button style=margin-left:110px><a  style=text-decoration:none class=btn btn-primary href='$my' >Delete</a></button>";
        
        ?> 
        </div>
        </div>
         </div>
    
       
        
        </div>
    
       <?php
        }
    }
    
        else
        {
         echo "<div class='jumbotron' style='margin-left:100px;width:1000px'>";
        echo "<div class='alert alert-dark' role=alert> ";
        echo "<font size='7'>Currently images are not available.....</font>";
      echo "</div>";
        }
?>

</body>
    </html>