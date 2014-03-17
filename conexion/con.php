<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$database=mysql_select_db("rankinginfo");
if (!$database)
  {
  die('Could not connect: ' . mysql_error());
  }
//password crazyMarines910208
	
?> 