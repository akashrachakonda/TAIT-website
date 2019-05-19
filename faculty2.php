<!DOCTYPE html> 
<!--[if lt IE 7]> <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
<!-- meta character set -->
<meta charset="utf-8">
<!-- Always force latest IE rendering engine or request Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>FACULTY DETAILS</title>
<!-- Meta Description -->
<meta name="description" content="Faculty Details">
<meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
<meta name="author" content="">
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
<meta name="keywords" content=""
/>
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
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- //Web-Fonts -->
<style>
.carousel-inner
{
/*border: 2px solid black;*/
/**/ width:100px;
height:440px;
margin-left: 50px;
margin-top: 200px;
border:2px solid black;
border-radius:30px;
border-color: brown;
}
#img
{
padding: 50px;
}
</style>
</head>
<!-- course-->
<!-- testimonials -->
<div class="testimonials py-5">
<div class="container py-xl-5 py-lg-3">
<h3 class="title text-capitalize font-weight-light text-white text-center mb-5">Our
<span class="font-weight-bold">Faculty</span>
</h3>
<div class="mis-stage">
<ol class="mis-slider">

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gallery";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql="select * from faculty_details";

$res=mysqli_query($conn,$sql);
//print_r ($res);
$count=mysqli_num_rows($res);

while($details=mysqli_fetch_assoc($res))
{
 echo "
<li class=mis-slide>
<a href='' class=mis-container>
<figure>
<img src=images_faculty/".$details['img']." alt='' class=img-fluid />
<figcaption>".$details['name']."
<span style=color:white>".$details['desg']."</span>
</figcaption>
</figure>
</a>
</li>
";
}
?>

</ol>
</div>
</div>
</div>
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
// The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
stageHeight: 320,
// Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible. Default: 1
slidesOnStage: false,
// The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
slidePosition: 'center',
// The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
slideStart: 'mid',
// The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
slideScaling: 150,
// The vertical offset of the slide center as a percentage of slide height. Options: positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
offsetV: -5,
// Center slide contents vertically - Boolean. Default: false
centerV: true,
// Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
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
<!-- necessary snippets for few javascript files -->
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
