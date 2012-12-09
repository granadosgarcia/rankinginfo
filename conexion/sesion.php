<?php
session_start();


  if(!isset($_SESSION['nombreusuario'])){
		header('Location:/rankinginfo/index.php');
	}
	
?> 