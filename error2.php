<html>
<script>
<?php
$z=$_GET['y'];
$ye=$_GET['m'];
?>
if(alert("Erorr in Uploading file")==null)
{
    window.location.assign("pro_rev.php?x=<?php echo $z ?>&y=<?php echo $ye ?>");
}
</script>
</html>