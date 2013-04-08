<?php
session_start();

include_once $_SERVER['DOCUMENT_ROOT']."/Altikamp/con.php";

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql="SELECT * FROM Usuario WHERE usuario='".$usuario."' AND password='".$password."'";



	if (!mysql_query($sql,$link))
  {
  echo $sql."<br>";
  die('ERROR ' . mysql_error());
  }
  
count()
?>