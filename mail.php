<?php
$headers = "From: tatipamularatnakar98@gmail.com\r\n";
$headers .= "Reply-To: akashpintu09@gmail.com\r\n";


$to="akashpintu09@gmail.com";
$subject="BOOM";
$message="halwa";

if ( mail($to,$subject,$message,$headers) ) {
   echo "The email has been sent!";
   } else {
   echo "The email has failed!";
   }
?> 
