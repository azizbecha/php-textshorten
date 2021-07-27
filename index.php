<?php 

// Import the function
include("textshorten.php");

// String to shorten
$string = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

// String shortned
echo textShorten($string, 5); //output will be ABCDE

?>
