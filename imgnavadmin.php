<!DOCTYPE html>
<html>
<head>
       <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/lightbox.css">
    <!-- Banner-Slider-CSS -->
    <link rel="stylesheet" href="css/banner-style.css">
    <link rel="stylesheet" href="css/aos.css">
    <link href='css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <!-- Font-Awesome-Icons-CSS -->
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">

</head>

<body>
<?php $year1=$_GET['x'];
?>

    <section class="content-main-w3 inner-page" >
        <!--/nav-->
        <div class="header_top_w3ls">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                
                     
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        
                        <li class="nav-item " >
                            <a class="nav-link " href="img_rev.php?x=programming&y=<?php echo $year1 ?>" target="f1" >Programming Club</a>
                        </li>
                        <li class="">
                            <a class="nav-link" href="img_rev.php?x=communication&y=<?php echo $year1 ?>" target="f1">Communication Club</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="img_rev.php?x=research_development&y=<?php echo $year1 ?>" target="f1">Research And Development Club</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="img_rev.php?x=cultural&y=<?php echo $year1 ?>" target="f1">Cultural Club</a>
                        </li>
                       <li>
                       <button type="button" class="btn btn-secondary">Year:-<?php echo $year1 ?> </button>
                       </li>

                    </ul>
                </div>

            </nav>
            
        </div>
</section>
</body>
</html>
    