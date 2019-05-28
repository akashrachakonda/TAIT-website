<!DOCTYPE html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">

<html  lang="en">
  <title>Gallery</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<?php $year=$_GET['y'];?>

<frameset rows="15%,*" >
  <frame src="imgnavUser.php?x=<?php echo $year; ?>" noresize="noresize" scrolling="no" frameborder="0" >
  <frame src="img_userRev.php?x=programming&y=<?php echo $year; ?>"  id="kk" frameborder="0" name="f1" >

</frameset>


</html>
