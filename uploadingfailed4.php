<html>
<?php
$z=0;
if(isset($_GET['y']))
{
$z=$_GET['y'];
$ye=$_GET['m'];
}
else
header("location:adminGallery.html");
?>
<script>

if(alert("Only image formates are allowed/No file chosen")==null)
{
    window.location.assign("img_rev.php?x=<?php echo $z ?>&y=<?php echo $ye ?>");
}
</script>
</html>