<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<!-- meta character set -->
	<meta charset="utf-8">
	<!-- Always force latest IE rendering engine or request Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>WELCOME TO TAIT</title>
	<!-- Meta Description -->
	<meta name="description" content="WELCOME TO TAIT">
	<meta name="keywords"
		content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
	<meta name="author" content="Muhammad Morshed">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS
		================================================== -->

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

	<!-- Fontawesome Icon font -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- bootstrap.min -->
	<link rel="stylesheet" href="css/jquery.fancybox.css">
	<!-- bootstrap.min -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- bootstrap.min -->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<!-- bootstrap.min -->
	<link rel="stylesheet" href="css/slit-slider.css">
	<!-- bootstrap.min -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/main.css">

	<!-- Modernizer Script for old Browsers -->
	<script src="js/modernizr-2.6.2.min.js"></script>




	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Edulearn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
	<!-- Testimonials-Css -->
	<link href="css/mislider.css" rel="stylesheet" type="text/css" />
	<link href="css/mislider-custom.css" rel="stylesheet" type="text/css" />
	<!-- Style-Css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Font-Awesome-Icons-Css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link
		href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
		rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
		rel="stylesheet">
	<!-- //Web-Fonts -->
	<style>
		.carousel-inner {

			/*border: 2px solid black;*/
			/**/
			width: 100px;
			height: 450px;

			margin-left: 50px;
			margin-top: 200px;
			border: 2px solid black;
			border-radius: 30px;
			border-color: brown;


		}

		#img {

			padding: 50px;

		}
	</style>
	

</head>


<body>

	<div id="home">
		<header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
			<div class="container">
				<div class="navbar-header">

					<!-- logo -->

					<a class="navbar-brand" href="#body">
						<h1 style="color:lightblue">TAIT</h1>
					</a>

					<!-- /logo -->
				</div>
				<nav class="navbar navbar-expand-lg navbar-right">
					<!-- main nav -->
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">

					</button>
                    <?php 
                    $y=date("Y");
                    $z=$y-1;
                    $array=str_split($y,2);
                    $last=$array['1'];
                    $year=$z."-".$last;
                    //echo $year;
                    ?>

					<ul id="nav" class="nav navbar-nav">
						<li><a href="#home">Home</a></li>
						<li><a href="#clubs">Clubs</a></li>
						<li><a href="#whatwedo">What we DO</a></li>
					</ul>
					<ul class="nav navbar-nav">
						<li><a href="Gallery-updated/userGallery_year.php" target="_blank">Gallery</a>
						</li>
						<li><a href="Faq.html" target="_blank">FAQ</a></li>
						<li><a href="Magazine_userdisplay.php" target="_blank">Magazines</a></li>
						<li><a href="aboutUs.php?x=<?php echo $year ?>">AboutUs</a></li>
						<li><a href="admin_login.php" target="_blank">Admin</a></li>

					</ul>
			</div>
			
			<!-- /main nav -->


	</div>
	</header>
	</div>

	<!-- //banner -->
	<!-- banner -->
	<div class="banner-agile">
		<ul class="slider">
			<li class="active">
				<div class="banner-w3ls-1">
				</div>
			</li>
			<li>
				<div class="banner-w3ls-2">
				</div>
			</li>
			<li>
				<div class="banner-w3ls-3">
				</div>
			</li>
			<li>
				<div class="banner-w3ls-4">
				</div>
			</li>
			<li class="prev">
				<div class="banner-w3ls-5">
				</div>
			</li>
		</ul>
		<ul class="pager">
			<li data-index="0" class="active"></li>
			<li data-index="1"></li>
			<li data-index="2"></li>
			<li data-index="3"></li>
			<li data-index="4"></li>
		</ul>
		<div class="banner-text-posi-w3ls">
			<div class="banner-text-whtree">
				<h3 class="text-capitalize text-white p-4">Technical Association of
					<b>Information technology</b>
				</h3>
				<p class="px-4 py-3 text-dark">Technology is best where it brings people together </p>
				
			</div>
		</div>
	</div>

	<!-- course-->
	<div class="classes py-5" id="clubs">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-sm-5 mb-4">choose your
				<span class="font-weight-bold">course</span>
			</h3>
			<div class="row pt-4">
				<div class="col-lg-4 col-news-top text-center" style="margin-left:50px">
					<!-- Left to right -->
					<!-- normal -->
					<div class="ih-item circle effect16 left_to_right mx-auto">
						<a href="pro-dy.php">
							<div class="img">
								<img src="images/c6.jpg" alt="img" class="img-fluid rounded-circle">
							</div>
							<div class="info">
								<h3 class="text-capitalize text-white">Programming Club</h3>

								<p>Description goes here</p>
							</div>
						</a>
					</div>
					<h6 class="small-heading text-capitalize text-center mt-4">
						<a href="programming_club.html" class="text-dark">Programming Club
							<i class="fas fa-long-arrow-alt-right ml-1"></i>
						</a>
					</h6>
					<!-- end normal -->
					<!-- end Left to right -->
				</div>
				<div class="col-lg-4 col-news-top text-center my-lg-0 my-sm-5 my-4" style="margin-left:250px">
					<!-- Left to right -->
					<!-- normal -->
					<div class="ih-item circle effect16 left_to_right mx-auto">
						<a href="com-dy.php">
							<div class="img">
								<img src="images/c2.jpg" alt="img" class="img-fluid rounded-circle">
							</div>
							<div class="info">
								<h3 class="text-capitalize text-white">Communication Skills Club</h3>
								<p>Description goes here</p>
							</div>
						</a>
					</div>
					<h6 class="small-heading text-capitalize text-center mt-4">
						<a href="communication.html" class="text-dark">Communication Skills Club
							<i class="fas fa-long-arrow-alt-right ml-1"></i>
						</a>
					</h6>
					<!-- end normal -->
					<!-- end Left to right -->
				</div>

			</div>
			<div class="row mt-5">
				<div class="col-lg-4 col-news-top text-center" style="margin-left:50px">
					<!-- Left to right -->
					<!-- normal -->
					<div class="ih-item circle effect16 left_to_right mx-auto">
						<a href="rd-dy.php">
							<div class="img">
								<img src="images/c4.jpg" alt="img" class="img-fluid rounded-circle">
							</div>
							<div class="info">
								<h3 class="text-capitalize text-white">Research And Development Club</h3><br><br>
								<p>Description goes here</p>
							</div>
						</a>
					</div>
					<h6 class="small-heading text-capitalize text-center mt-4">
						<a href="software.html" class="text-dark">Research And Development Club
							<i class="fas fa-long-arrow-alt-right ml-1"></i>
						</a>
					</h6>
					<!-- end normal -->
					<!-- end Left to right -->
				</div>
				<div class="col-lg-4 col-news-top text-center  my-lg-0 my-sm-5 my-4" style="margin-left:250px">
					<!-- Left to right -->
					<!-- normal -->
					<div class="ih-item circle effect16 left_to_right mx-auto">
						<a href="cul-dy.php">
							<div class="img">
								<img src="images/cultural.jpg" alt="img" class="img-fluid rounded-circle">
							</div>
							<div class="info">
								<h3 class="text-capitalize text-white">Cultural Club </h3>
								<p>Description goes here</p>
							</div>
						</a>
					</div>
					<h6 class="small-heading text-capitalize text-center mt-4">
						<a href="social_media.html" class="text-dark">Cultural Club
							<i class="fas fa-long-arrow-alt-right ml-1"></i>
						</a>
					</h6>
					<!-- end normal -->
					<!-- end Left to right -->
				</div>
				<!-- end normal -->
				<!-- end Left to right -->
			</div>
		</div>
	</div>
	</div>
	<!-- //course -->
	<div class="stats-w3layouts py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="stats-info">
				<div class="row">
					<div class="col-md-3 col-6 stats-grid-w3-agile text-center px-xl-5 px-3">
						<div class='numscroller font-weight-bold my-2' data-slno='1' data-min='0' data-max='480'
							data-delay='.5' data-increment="1">480</div>
						<p class="text-uppercase text-white border-top pt-4 mt-3">Total students</p>
					</div>
					<div class="col-md-3 col-6 stats-grid-w3-agile text-center  px-xl-5 px-3">
						<div class='numscroller font-weight-bold my-2' data-slno='1' data-min='0' data-max='65'
							data-delay='.5' data-increment="1">65</div>
						<p class="text-uppercase text-white border-top pt-4 mt-3">approved courses</p>
					</div>
					<div class="col-md-3 col-6 stats-grid-w3-agile text-center mt-md-0 mt-5  px-xl-5 px-3">
						<div class='numscroller font-weight-bold my-2' data-slno='1' data-min='0' data-max='30'
							data-delay='.5' data-increment="1">30</div> 
						<p class="text-uppercase text-white border-top pt-4 mt-3">certified teachers</p>
					</div>
					<div class="col-md-3 col-6 stats-grid-w3-agile text-center mt-md-0 mt-5  px-xl-5 px-3">
						<div class='numscroller font-weight-bold my-2' data-slno='1' data-min='0' data-max='79'
							data-delay='.5' data-increment="1">79</div>
						<p class="text-uppercase text-white border-top pt-4 mt-3">Companies visited</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" style="width: 650px;float: left;margin-top:100px">
			<div class="carousel-item active">
				<img class="d-block " id="img" src="https://vardhaman.org/wp-content/uploads/2018/11/13881A05J5-1.jpg"
					width="200" height="200" style="margin-left: 40px;padding-right: 40px;">
				<div class="maybe-clear"></div>

				<p style="margin-left: 40px;color:black;margin-top:5px">Vardhaman college has given me an astonishing platform for the overall
					growth and development. The campus has excellent infrastructure and is very beautiful with perfect
					blend of nature and student-friendly amenities, such as gym, football and basketball courts,
					multi-cuisine restaurants, activity center and modern well-equipped library.</p>
				<div style="margin-left: 80%;margin-top: 6%;color:black;"><b>GATLA SIRISHA<br>Alumni</div><br>
				
			</div>
			<div class="carousel-item">
				<img class="d-block " id="img" src="https://vardhaman.org/wp-content/uploads/2018/11/13881A0511-1.jpg"
					width="200" height="200" style="margin-left: 40px;">

				<p style="margin-left: 40px;color:black">Throughout my 4 years of engineering at Vardhaman College of
					Engineering, I had countless opportunities to develop analytical skills, leadership and
					proactive thinking through various programs and events. These attributes were the key reasons
					because of which I was successfully placed in one of the top company. I really thank to the college
					for their execellent services.</p>
				<div style="margin-left: 80%;margin-top: 6%;color:black"><b>AKSHATA C<br>Alumni</div><br>
				
			</div>
			<div class="carousel-item">
				<img class="d-block " id="img" src="https://vardhaman.org/wp-content/uploads/2018/11/13881A1293-1.jpg"
					width="200" height="200" style="margin-left: 40px;">

				<p style="margin-left: 40px;color:black">I cordially invite you to this institution you may ask why to choose or
					prefer this institution to others, because this institution is not just a place where you will get a
					career oriented education but you will feel homely too.VCE has supported me in every step I have
					taken. I believe this institute has given me new possibilities as a result of which I am able to
					exploit my potential to the fullest.</p>
				<div style="margin-left: 80%;margin-top: 6%;color:black"><b>VARTHIKA REDDY G <br>Alumni</div><br>
			
			</div>
		</div>
	</div>

	<div class="video-choose-agile py-5">
		<div class="container py-xl-5 py-lg-3">
			
			<div class="row" style="margin-left: 30px;"> 
				<div class="col-lg-7 video">
					<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">our
						<span class="font-weight-bold">video</span>
					</h3>
					<iframe width="854" height="480" src="https://www.youtube.com/embed/IwZG8afdC-I"></iframe>
				</div>
			</div>
		</div>


		<div style="clear: both"></div>
	

	<!-- //video and events -->

	<!-- what we do -->	
	<div class="why-choose-agile py-5" id="whatwedo">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-white text-center mb-5">what we
				<span class="font-weight-bold">do</span>
			</h3>
			<div class="row agileits-w3layouts-grid pt-md-4">
				<div class="col-lg-4 services-agile-1" style="margin-left:100px">
					<div class="row wthree_agile_us">
						<div class="col-lg-3 col-md-2 col-3  agile-why-text">
							<div class="wthree_features_grid text-center p-3 border rounded">
								<i class="fab fa-accusoft"></i>
							</div>
						</div>
						<div class="col-9 agile-why-text-2">
							<h4 class="text-capitalize text-white font-weight-bold mb-3">Quiz</h4>
							<p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>
							<a class="btn mt-3 service-button p-0" href="QUIZ/all_files.html" role="button">Read More
								<i class="fas fa-long-arrow-alt-right ml-1"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 services-agile-1" style="margin-left:200px">
					<div class="row wthree_agile_us">
						<div class="col-lg-3 col-md-2 col-3  agile-why-text">
							<div class="wthree_features_grid text-center p-3 border rounded">
								<i class="fas fa-users"></i>
							</div>
						</div>
						<div class="col-9 agile-why-text-2">
							<h4 class="text-capitalize text-white font-weight-bold mb-3">Faculty details</h4>
							<p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>
							<a class="btn mt-3 service-button p-0" href="faculty2.php" target="_blank" role="button">Read More
								<i class="fas fa-long-arrow-alt-right ml-1"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row agileits-w3layouts-grid mt-5" style="margin-left:100px">
				<div class="col-lg-4 services-agile-1">
					<div class="row wthree_agile_us">
						<div class="col-lg-3 col-md-2 col-3  agile-why-text">
							<div class="wthree_features_grid text-center p-3 border rounded">
								<i class="far fa-calendar-alt"></i>
							</div>
						</div>
						<div class="col-9 agile-why-text-2">
							<h4 class="text-capitalize text-white font-weight-bold mb-3">Events Calender</h4>
							<p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>
							<a class="btn mt-3 service-button p-0" target="_blank" href="calender/calender_userview.php" role="button">Read More
								<i class="fas fa-long-arrow-alt-right ml-1"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 services-agile-1 my-lg-0 my-5" style="margin-left: 230px">
					<div class="row wthree_agile_us">
						<div class="col-lg-3 col-md-2 col-3  agile-why-text">
							<div class="wthree_features_grid text-center p-3 border rounded">
								<i class="fas fa-book"></i>
							</div>
						</div>

						<div class="col-9 agile-why-text-2">
							<h4 class="text-capitalize text-white font-weight-bold mb-3">Useful Websites</h4>
							<p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>
							<a class="btn mt-3 service-button p-0" href="useful links-updated\use.html" target="_blank" role="button">Read More
								<i class="fas fa-long-arrow-alt-right ml-1"></i>
							</a>
						</div>
					</div>
				</div>


			</div>
		</div>
		<!-- //what we do -->

		<!-- video and events -->
		<!-- //video and events -->

		<!-- testimonials -->

		<!-- news -->
		<!-- //news -->

		<!-- brands -->

		<!-- footer -->

		<!-- //Stats -->

		<!-- Js files -->
		<!-- JavaScript -->
		<script src="js/jquery-2.2.3.min.js"></script>
		<!-- Default-JavaScript-File -->
		<script src="js/bootstrap.js"></script>
		<!-- Necessary-JavaScript-File-For-Bootstrap -->

		<!-- banner slider -->
		<script src="js/slider.js"></script>
		<!-- //banner slider -->

		<!-- testimonial-plugin -->
		<script src="js/mislider.js"></script>
		<script>
			jQuery(function ($) {
				var slider = $('.mis-stage').miSlider({
					//  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
					stageHeight: 320,
					//  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
					slidesOnStage: false,
					//  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
					slidePosition: 'center',
					//  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
					slideStart: 'mid',
					//  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
					slideScaling: 150,
					//  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
					offsetV: -5,
					//  Center slide contents vertically - Boolean. Default: false
					centerV: true,
					//  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
					navButtonsOpacity: 1,
				});
			});
		</script>
		<!-- //testimonial-plugin -->

		<!-- numscroller-js-file -->
		<script src="js/numscroller-1.0.js"></script>
		<!-- //numscroller-js-file -->

		<!-- smooth scrolling -->
		<script src="js/SmoothScroll.min.js"></script>
		<!-- //smooth scrolling -->

		<!-- move-top -->
		<script src="js/move-top.js"></script>
		<!-- easing -->
		<script src="js/easing.js"></script>
		<!--  necessary snippets for few javascript files -->
		<script src="js/edulearn.js"></script>

		<!-- //Js files -->





		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<!-- Twitter Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Single Page Nav -->
		<script src="js/jquery.singlePageNav.min.js"></script>
		<!-- jquery.fancybox.pack -->


		<!-- Owl Carousel -->

		<!-- jquery easing -->
		<script src="js/jquery.easing.min.js"></script>
		<!-- Fullscreen slider -->
		<script src="js/jquery.slitslider.js"></script>

		<!-- onscroll animation -->

		<!-- Custom Functions -->
		<script src="js/main.js"></script>


</body>



</html>