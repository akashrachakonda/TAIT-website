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
    <!-- contacts card -->
    <h1 style="margin-left:500px"> About Us...</h1>
        
            
           <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gallery";	
// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

$table = array("hod", "tait_incharges", "tait_stu_body","site_developers");
$names = array("Chief Patron", "TAIT Faculty coordinators", "TAIT Student coordinators","Site Designers & Maintenance   ");
            for($i=0;$i<4;$i++)
            {
                //echo "hello";
                echo "<div id=contacts class=panel-collapse collapse show aria-expanded=true style=''>";
                echo "<ul class=list-group pull-down id=contact-list>";
                $sql="select * from ".$table[$i] ;
               //echo $sql;
                $ss=mysqli_query($conn, $sql);
                echo "<li class=list-group-item>";
                 echo "<h2 id='serif'>".$names[$i]."</h2>";
                 echo "</li>";
                if (mysqli_num_rows($ss) > 0)
                {
                   
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
                            <label class=name lead><h2 id='serif'>".$res['name']."</h2></label>
                            <br> 
                            <span class=fa fa-mobile fa-2x text-success float-right pulse title=online now></span>
                            <label class=name lead><h3 id='serif'>".$res['desg']."</h3></label>
                            <br> 
                            <span class=fa fa-mobile fa-2x text-success float-right pulse title=online now></span>
                            <label class=name lead><h3 id='serif'>".$res['phn']."</h3></label>
                            <br> 
                            <span class=fa fa-mobile fa-2x text-success float-right pulse title=online now></span>
                            <label class=name lead><h3 id='serif'>".$res['gmail']."</h3></label>
                            <br> 
                        
                    </div>
                       
                </li>";
               ;
                }
            }
            echo "<br>";
            echo " </ul>";
            echo "</div>";
            }
            ?>
           
            <!--/contacts list-->
  
 
</div>    <script type="text/javascript">
        </script>
</body>
</html>