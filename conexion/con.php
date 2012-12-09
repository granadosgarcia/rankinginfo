<?php
$con = mysql_connect("localhost","root","crazyMarines910208");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$database=mysql_select_db("rankinginfo") ;
if (!$database)
  {
  die('Could not connect: ' . mysql_error());
  }

	
?> 