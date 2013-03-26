

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
<title> Insertar Arrendado </title>
<link rel="stylesheet" href="/rankinginfo/css/estilo.css" type="text/css" charset="utf-8">
<script> 
    function verifica (){
        if(document.getElementById("comentario").value=="")
        {
	        alert("Comentario Vacio");
	        return false;
        }
        
                else
        return true;
        }
</script>

	 <script>
 window.onunload = function() {
    if (window.opener && !window.opener.closed) {
        window.opener.popUpClosed();
    }
};
 </script>
</head>



	<body>
			<ul style="  list-style-type: none;">
		
		
		<h1>Notificación</h1>
<form method="GET" onsubmit="return verifica ()" action="update_notificacion.php" enctype="multipart/form-data">
			
			
			<li>
			<br><textarea rows="40" cols="55" id="comentario" name="comentario"></textarea>
			
			
						<div id="botonesrow">
	
<div id="modificarrow">
				<input type="submit" name="ok" value="Insertar" class="edita">
</div>
</form>


	</body>

</html>
