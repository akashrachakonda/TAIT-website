<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include('admin_login_php2.php');
if($login==null )
 header('location:admin_login.php');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>ADMIN</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Bettering Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />

    

    <style type="text/css">
    	

         body {
  margin: 40px;
}

.wrapper {
  display: grid;
  grid-template-columns: 300px 300px 300px;
  grid-gap: 50px;
  background-color: #fff;
  color: #444;
}

.box {
  background-color: #444;
  color: #fff;
  border-radius: 5px;
  padding: 80px;
  font-size: 150%;
}

a:link {
  color: white;

  } 
  a:hover {
  color: orange;

}


    </style>


	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- // Meta Tags -->
	<link href="css1/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css1/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" href="css1/flexslider.css" type="text/css" media="screen" property="" />
	<!--testimonial flexslider-->
	<link href="css1/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--fonts-->
	
	<!--//fonts-->

</head>

<body>
	<!--Header-->
	<div class="header">
	<div class="top">
					<div class="container">
						
							<div class="col-md-9 top-left">
								<ul>
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>VMEG</li>
								<!---	<li><i class="fa fa-phone" aria-hidden="true"></i> +(010) 221 918 811</li>-->
									<li><i class="fa fa-envelope-o" aria-hidden="true"></i> admin@gmail.com</li>
									<li><button type="button" class="btn btn-primary btn-sm" style="margin-left:1100px;margin-top:-5px" onclick=location.href='logout.php'>Logout</button></li>                  
								</ul>
							</div>
							
							<div class="clearfix"></div>
						
					</div>
				</div>
		<!--top-bar-w3layouts-->
		<div class="top-bar-w3layouts">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a href="admin_main.php">ADMIN</a></h1>
					</div>
					<!-- navbar-header -->

		</div>
	</div>
	<!--//Header-->
	<!-- services -->
	<div class="w3-agile-services">
		<div class="container">
			<h3 class="title-txt"><span>U</span>pdates</h3>
		
					<div class="clearfix"> </div>
				
				
			<div class="wrapper">	
                    <div class="box a"><a href="admin_eventselection2.php" style="color:white">ADD EVENTS TO CLUBS</a></div>
                    <div class="box b"><a href="calender/admin_update_calender.php" target="_blank" style="color:white">UPDATE CALENDER</a></div>
                    <div class="box c"><a href="reg_events2.php" style="color:white">REGISTERED STUDENT DETAILS</a></div>
                    <div class="box d"><a href="Gallery-updated/adminGallery.html" style="color:white">UPDATE GALLERY</a></div>
                    <div class="box e"><a href="aboutUs_main.php" style="color:white">UPDATE ABOUTUS INFO</a></div>
                    <div class="box f"><a href="admin_facDetSelection.php" style="color:white">UPDATE FACULTY DETAILS</a></div>
										  <div class="box f"><a href="Magazine_selection.php" style="color:white">Upload/Remove TAIT Magazine</a></div>
										  <div class="box f"><a href="winner_selection.php" style="color:white">Winners Declaration</a></div>
											<div class="box f"><a href="QUIZ/dynamic_admin.html" style="color:white">Upload Quiz documents</a></div>
          
            </div>
		</div>
	</div>
</body>

</html>