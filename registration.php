


<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Registration</title>		
		<!-- Meta Description -->
        <meta name="description" content="WELCOME TO TAIT">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
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
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

            

    
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Edulearn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
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
       margin-top:  200px;
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

<body>
	
	

	<!-- register -->
	
	<div class="login-w3ls py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">register hello				<span class="font-weight-bold">now</span>
			</h3>
			<!-- content -->
			<div class="sub-main-w3 pt-md-4">
							<form action="reg_sub.php" method="post">
				    <div class="form-style-agile form-group">
						<label>
							Your RollNo
							<i class="fas fa-user"></i>
						</label>
						<input placeholder="Your RollNo" class="form-control" name="f1" id="Rollno" type="text" required="">
					</div>
					<div class="form-style-agile form-group">
						<label>
							Your Name
							<i class="fas fa-user"></i>
						</label>
						<input placeholder="Your Name" class="form-control" name="f2" type="text" required="">
					</div>
					<div class="form-style-agile form-group">
						<label>
							Branch
						
						</label>
						<select class="form-control" id="branch" name="f3" size="1">
                        <option>IT</option>
                         <option>CSE</option>
						 <option>ECE</option>
						 <option>MECH</option>
						 <option>EEE</option>
						 <option>CIVIL</option>
                         </select>
						
					</div>
					<div class="form-style-agile form-group">
						<label>
							Email
						    <i class="fas fa-envelope"></i>
						</label>
						<input placeholder="Email" class="form-control" name="f4" id="email" type="email" required="">

                        <?php
						  $event_name=$_GET['a'];
						  ?>
						<input placeholder="" class="form-control" name="f5" id="" type="hidden" value="<?php echo $event_name ?>">

					</div>
				
					
					<input type="submit" value="Register" name="submit">
					
				
					
					<div class="form-style-agile form-group">
						<label id="message">
							 							<i class="fas fa-unlock-alt"></i>
						</label>
						
					</div>
					
				</form>
				
			</div>
			<!-- //content -->
		</div>
	</div>
	<!-- //register -->

	


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- password-script -->
	<script>
		window.onload = function () {
		   document.getElementById("Rollno").onchange =  validateRollNo;
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
			
		}
		
		function hideMessage() {
    document.getElementById("message").style.display = "none";	
};
setTimeout(hideMessage, 8000);

		function validateRollNo()
		{
		    var rollno = document.getElementById("Rollno").value;
		    

           /* var patt1 = /(16881A12)?([0][1-9] | [1-9][0-9] | [AB][0-9] | [C][0])/g;  */
		   
		   var r1=new RegExp("^1(5|6|7|8)881(A|a)(0|1)(5|2|1|3|4)[A-Za-z0-9]{1}[0-9]+$");
           
             
             


			//var result = rollno.match(r1);
         document.getElementById("Rollno").setCustomValidity(rollno);
            }
		}
	</script>
	<!-- //password-script -->

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




</html>