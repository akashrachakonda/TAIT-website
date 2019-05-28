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


$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    
    die('Not connected : ' . mysql_error());
}
$db_selected = mysql_select_db('gallery', $link);   
if (!$db_selected) {
    die ('Database error : ' . mysql_error());
}
        $sql = "select * from ".$table." where year=".$year2;
       
        $result = mysql_query($sql);
       // $variable = $_POST['variable'];
        //echo "<div>";
        ?>
        

    <div style="margin-top:50px">   
<?php

$rowcount=mysql_num_rows($result); 
if($rowcount>0)
{
        while ($pic = mysql_fetch_array($result)){
            echo "<div style='float:left'>";
            echo " <div class='card' style='width:20rem; height:rem' >";
            echo "<img  src='$pic[path]' alt='Card image cap' width='300' height='300'  hspace='10' vspace='5' >";
           
       
        ?>
        
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