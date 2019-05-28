<!DOCTYPE html>
<html>
<?php $year=$_GET['x']; 
//echo $year;
?>
    <title>AdminGallery</title>
<frameset rows="15%,*">

  <frame src="imgnavadmin.php?x=<?php echo $year; ?>" noresize="noresize" scrolling="no" frameborder="0" >
  <frame src="img_rev.php?x=programming&y=<?php echo $year; ?>" frameborder="0" name="f1" >
</frameset>
</html>
