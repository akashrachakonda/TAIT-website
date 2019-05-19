<html>
<body>
<?php
$event=$_GET['a'];
?>
<script>
var p="<?php echo $_GET['a'] ?>";
if(alert("Already Registered")==null)
{
    window.location.assign("registration.php?a="+p);
}
</script>

</body>
</html>