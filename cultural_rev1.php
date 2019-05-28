<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Not connected : ' . mysql_error());
}
$db_selected = mysql_select_db('gallery', $link);
if (!$db_selected) {
    die ('Database error : ' . mysql_error());
}
        $sql = "select * from cultural";
       
        $result = mysql_query($sql) or die("Invalid query: "  .mysql_error());
    
        while ($pic = mysql_fetch_array($result)){
            echo "<div style='float:left'>";
            echo " <div class='card' style='width:20rem; height:rem' >";
        echo "<img src='$pic[path]' width='300'  height='300'  hspace='10' vspace='5' />" ;
        echo "</div>";
        echo "</div>";
        }
        
?>