<html>
<script>
<?php
$z=$_GET['y'];
$ye=$_GET['m'];
?>
if(alert("Uploaded Successsfully")==null)
{
    window.location.assign("img_rev.php?x=<?php echo $z ?>&y=<?php echo $ye ?>");
}
</script>
</html>