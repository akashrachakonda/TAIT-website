<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <title>AboutUs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
        </style>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
    <style>
    #serif {
  font-family: "Times New Roman", Times, serif;
}
    </style>
</head>
<body>

    <div class="container">


    
    <div class="dropdown" style="margin-left:1050px;margin-top:10px ">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    select year
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="aboutUs.php?x=2018-19">2018-19</a>
    <a class="dropdown-item" href="aboutUs.php?x=2019-20">2019-20</a>
    <a class="dropdown-item" href="aboutUs.php?x=2020-21">2020-21</a>
    <a class="dropdown-item" href="aboutUs.php?x=2021-22">2021-22</a>
    <a class="dropdown-item" href="aboutUs.php?x=2022-23">2022-23</a>
    <a class="dropdown-item" href="aboutUs.php?x=2023-24">2023-24</a>
    <a class="dropdown-item" href="aboutUs.php?x=2024-25">2024-25</a>
    
  </div>
</div>


    <!-- contacts card -->
    <h1 style="margin-left:500px"> About Us...</h1>



    
        
            
<?php
$year=$_GET['x'];
echo "<button type=button class='btn btn-info'><h4>Year : $year</h4></button><br><br>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gallery";	
// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

$table = array("hod", "tait_incharges", "tait_stu_body","site_developers","site_modifiers");
$names = array("Chief Patron", "TAIT Faculty coordinators", "TAIT Student coordinators","Site Designers & Maintenance   ","Site Current Developers");
$count=0;
            for($i=0;$i<5;$i++)
            {
                //echo "hello";
                echo "<div id=contacts class=panel-collapse collapse show aria-expanded=true style=''>";
                echo "<ul class=list-group pull-down id=contact-list>";
                $sql="select * from ".$table[$i]." where year="."'$year'";
              // echo $sql;
                $ss=mysqli_query($conn, $sql);
                echo "<li class=list-group-item>";
                 echo "<h2 id='serif'>".$names[$i]."</h2>";
                 echo "</li>";
                if (mysqli_num_rows($ss) > 0)
                {
                $GLOBALS['count']=1;
                while($res=mysqli_fetch_assoc($ss))
                    
                {
                    
              echo "
               <li class=list-group-item>
                    <div class=row w-100>
                        <div class=col-6 col-sm-6 col-md-3 px-0>
                            <img src=tait_body/".$res['img']." alt='' class=rounded-circle mx-auto d-block img-fluid>
                             </div>
                        <div class=col-6 col-sm-6 col-md-9 text-center text-sm-left >
                            <span class=fa fa-mobile fa-2x text-success float-right pulse title=online now></span>
                            <span class=fa fa-mobile fa-2x text-success float-right pulse title=online now></span>
                            <label class=name lead><h3 id='serif'>Faculty/Student ID: ".$res['id']."</h3></label>
                            <br> 


                            <label class=name lead><h3 id='serif'>Faculty/Student Name: ".$res['name']."</h3></label>
                            <br> 
                            <span class=fa fa-mobile fa-2x text-success float-right pulse title=online now></span>
                            <label class=name lead><h3 id='serif'>Designation: ".$res['desg']."</h3></label>
                            <br> 
                            <span class=fa fa-mobile fa-2x text-success float-right pulse title=online now></span>
                            <label class=name lead><h3 id='serif'>Phone No: ".$res['phn']."</h3></label>
                            <br> 
                            <span class=fa fa-mobile fa-2x text-success float-right pulse title=online now></span>
                            <label class=name lead><h3 id='serif'>Gmail: ".$res['gmail']."</h3></label>
                            <br> 
                        
                    </div>
                       
                </li>";
               ;
                }
            }
            else
            {
            echo "<div class='badge badge-primary text-wrap' style='width: 25rem;'>";
               echo "currently details not available...";
            echo "</div>";
          }
            echo "<br>";
            echo " </ul>";
            echo "</div>";
            }
            if($GLOBALS['count']!=1)
            {
                echo "<div class='jumbotron' style='margin-left:70px;width:1000px'>";
                echo "<div class='alert alert-dark' role=alert> ";
                echo "<font size='7'>Currently Details are not available.....</font>";
              echo "</div>";
            }
            ?>
           
            <!--/contacts list-->
  
 
</div>    <script type="text/javascript">
        </script>
</body>
</html>