<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE html>
<html lang="zxx">

<head>
<style>
#id1{
    float:left;
}
</style>
	
	
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<!-- Bootstrap-Core-Css -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Style-Css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Font-Awesome-Icons-Css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	
	</header>
	<!-- //header -->

	<!-- banner -->	<!-- breadcrumb -->
	<title>Communication Club</title>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="modifiednav.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Communication Club</li>
			<li class="breadcrumb-item">
				<a href="completed_events.php?a=com_completed" target="_blank">Completed contests</a>
			</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->

	<!-- course-->
	<div class="course-w3ls py-5" style="float:'left" >
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-sm-5 mb-4">Club -
				<span class="font-weight-bold">Communication</span>
			</h3>
            <?php
			//session_start();
            //$_SESSION['database']="com_completed";
            $link = mysql_connect('localhost', 'root', '');
            if (!$link) {
                die('Not connected : ' . mysql_error());
            }
            $db_selected = mysql_select_db('events', $link);
            if (!$db_selected) {
                die ('Database error : ' . mysql_error());
            }

            $sql = "select * from com_events";
            $result = mysql_query($sql);
			  
			//$sql2="select count(*) from com_events";
			$count = mysql_num_rows($result);
			//echo $count;
			 
			if($count>0)
			{
            while ($event = mysql_fetch_array($result)){

                 // echo "hello";
                $date1=date_create($event['end_date']);
                $date2=date_create(date("m/d/y"));
                $diff=date_diff($date2,$date1);
                $d= $diff->format("%R%a");
                $check=(int)$d;


			
			
            if($check>=0)
            {
               // echo "bye";
            //echo "<div style=clear:both>";
			echo "<div class='row cource-list-agile pt-4' id='id1' >";
			echo "<div class='col-lg-7 agile-course-main'>";
             echo "<div class=w3ls-cource-first style='height:300px'>";
            
						echo "<img src=images/1.png  class=img-fluid img-poiscour mx-auto d-block mt-2 style='margin-left:250px'></img>";
						echo "<div class=px-md-5 px-4  pb-md-5 pb-4>";
							echo "<h3 class=text-dark>".$event['name']."</h3>";
							echo "<p class=mt-3 mb-4 pr-lg-5>".$event['description']."</p>";
							echo "<ul class=list-unstyled text-capitalize>";
								echo "<li>";
									echo "<i class=fas fa-calendar-alt mr-3></i>".$event['start_date']."</li>";
								echo "<li class=my-3>";
									echo "<i class=fas fa-clock mr-3></i>Available for ".$event['duration']." day</li>";
								echo "<li>";
									echo "<i class=fas fa-users mr-3></i>".$event['contest_for']."</li>";
									echo "<li>";
									echo "<br>";
									$p=strcmp($event['reg_link'],"0");
									if($p!=0)
									{
									echo "<i class=fas fa-users mr-3></i><a href=".$event['reg_link'].">Register now</a></li>";
									}
                                    //echo "<br>";
									$q=strcmp($event['link'],"");
									if($q!=0)
									{
									echo "<i class=fas fa-users mr-3></i><a href=".$event['link'].">coding contest link</a></li>";
									}


							echo "</ul>";
                        echo "</div>";
					echo "</div>";
                echo "</div>";
				echo "<div class=col-lg-5 agile-course-main-2 mt-4>";
                echo "<img src=images2/".$event['image']." class=img-fluid style='margin-left:-50px;margin-top:10px; width:400px;height:280px'></img>"."<br>";

                
                echo "</div>";
                echo "</div>";
                
            }
            else
            {
                $sql1 = "insert into com_completed(name2,date2,duration2,contest_for) values('$event[name]','$event[start_date]','$event[duration]','$event[contest_for]')";
				$res= mysql_query($sql1);
				//echo $res;	


			}
		}
	}
		else
		     echo "<h1 style=margin-left:250px>Events will be conducted very soon...</h1>";
			
	
             ?>   
                <br>
             
			</div>
				
				
		</div>

			
</body>

</html>