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
						<h1><a href="admin_eventselection2.html">ADMIN</a></h1>
					</div>
					<!-- navbar-header -->

		</div>
	</div>
	<!--//Header-->
	<!-- services -->
	<div class="w3-agile-services">
		<div class="container">
			<h3 class="title-txt"><span>Choose</span> club</h3>
		
					<div class="clearfix"> </div>
				
				
			<div class="wrapper" style="margin-left:250px">
                    <div class="box a" ><a href="clubs_event_selection.php?x=com_events" style="color:white">COMMUNICATION CLUB</a></div>
                    <div class="box b" ><a href="clubs_event_selection.php?x=rd_events" style="color:white">RESEARCH AND DEVELOPMENT CLUB </a></div><br>
                    <div class="box c"><a href="clubs_event_selection.php?x=pro_events" style="color:white">PROGRAMMING CLUB</a></div>
                    <div class="box d"><a href="clubs_event_selection.php?x=cul_events" style="color:white">CULTURAL CLUB</a></div>
                   
            </div>
		</div>
	</div>
</body>

</html>