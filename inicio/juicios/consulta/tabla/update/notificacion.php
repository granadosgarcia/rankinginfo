<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";

?>

<!DOCTYPE html>

<html>
<head>

<meta charset="UTF-8"/>
<link rel="stylesheet" href="/rankinginfo/css/estilo.css" type="text/css" charset="utf-8">

  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

  <script>
  $(function() {
    $( "#fecha_notificacion" ).datepicker({ dateFormat: "dd-mm-yy" });
        $( "#fecha_promocion" ).datepicker({ dateFormat: "dd-mm-yy" });

  });
 </script>
 	 <script>
 window.onunload = function() {
    if (window.opener && !window.opener.closed) {
        window.opener.popUpClosed();
    }
};
 </script>
 
 <script> 
    function verifica (){
    
         
       
        if(document.getElementById("fecha_notificacion").value=="" &&  document.getElementById("fecha_promocion").value=="" &&  document.getElementById("comentario").value==""){
document.getElementById("error").innerHTML="<p style='color:RED; font-size:20px;margin-left: 40px; '>Por lo menos llena un campo</p>";        
return false;
        }
        
        else
        return true;
        }

</script>


</head>
<body>
	<div>
		<h1>Inserta Notificación</h1>
	</div>
	
	<div  id="error">
	</div>
	<div id="promociones">
		<form action="update_promocion.php" onsubmit="return verifica ()" method="GET">
				<input style ="display:none" type="text" value="Notificación" name="tipo" id="tipo"/>

		<ul style="list-style: none;">
			<li><label>Fecha de Notificación</label><input style ="float:right" type="text" name="fecha_notificacion" id="fecha_notificacion"/></li>
			<br>
			<li><label>Comentario</label><br>
			<textarea rows="10" cols="35" id="comentario" name="comentario"></textarea></li>

			<li><input class = "guardar" type="Submit" value="Guardar"/></li>
			
			<li><button class="descartar" type="button" onclick="window.open('', '_self', ''); window.close();">Descartar</button><li>

		</ul>

		</form>
	</div>

</body>
</html>
