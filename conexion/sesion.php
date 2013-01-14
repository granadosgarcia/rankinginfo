<?php

session_start();
  if(!isset($_SESSION['nombreusuario'])){
    echo '<script> window.location = "/rankinginfo/index.php"; </script>';
	}
	
	
	
?> 