<?php 
                   



                      // echo "hello";
                $date1=date_create(date("02/2/19"));
                $date2=date_create(date("m/d/y"));
                $diff=date_diff($date2,$date1);
                $d= $diff->format("%R%a");
                $check=(int)$d;
                echo $check;
?>

