<?php 


/* Includes de PHP */
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";


if(isset($_SESSION['privilegios'])&&$_SESSION['privilegios']>=10){

//Query todas las actividades
$sql= "SELECT  a.fecha, a.actividad, u.nombre
FROM actividades a, usuario u
ORDER BY a.fecha DESC";





/* Comprobación de error y ejecución del query */
if(!($resultado=mysql_query($sql,$con)))
{
	die ('<br>ERROR '.mysql_error());
}
else echo
"<html>
		<head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>  
	   
	   <title>Administración del Sistema</title>
<link rel='stylesheet' href='/rankinginfo/css/estilo.css' type='text/css' charset='utf-8'>
<link rel='stylesheet' href='/rankinginfo/css/jquery.dataTables.css' type='text/css' charset='utf-8'>
<script type='text/javascript' language='javascript' src='/rankinginfo/js/jquery.js'></script>
<script type='text/javascript' language='javascript' src='/rankinginfo/js/jquery.dataTables.js'></script>

<script type='text/javascript' charset='utf-8'>
			$(document).ready(function() {
				$('#tabla').dataTable();
			} );
		</script>
		
<script language='javascript'>
$(function(){
 
    // add multiple select / deselect functionality
    $('#selectall').click(function () {
          $('.case').attr('checked', this.checked);
    });
 
    // if all checkbox are selected, check the selectall checkbox
    // and viceversa
    $('.case').click(function(){
 
        if($('.case').length == $('.case:checked').length) {
            $('#selectall').attr('checked', 'checked');
        } else {
            $('#selectall').removeAttr('checked');
        }
 
    });
});
</SCRIPT>

<meta charset='UTF-8'>
		</head>
	<body>

<div id='entero'>
  
   			<div id='wrapper'>
	   				<div id='header'>
	   					<h1>Actividades Realizadas en el Sistema</h1>
					 <img src='/rankinginfo/img/third1.jpg' height='150' width='150' style='float: left;
margin: -68px 0px 0px -160px;'>
						<h3> Estás en ".str_replace('rankinginfo/inicio/', "", $_SERVER["REQUEST_URI"])."</h3>
					</div>
					
					<div id='contenedortabla'>";
					
		include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu_inicio.php";
echo " 	

		 <table id ='tabla'>
		<thead>	
					<tr role='row'>
		<th class='sorting' role='columnheader' tabindex='0'>Nombre</th>
		<th class='sorting' role='columnheader' tabindex='0'>Fecha</th>
		<th class='sorting' role='columnheader' tabindex='0'>Actividad</th>
			
					</tr>
		</thead>
		<tbody>";


while($row = mysql_fetch_array($resultado)){ 
			
		echo "<tr class='infooo'>";
			
				echo "<td>". $row['nombre']. " </td>";
				echo "<td>". $row['fecha']. "</td>";
				echo "<td>". htmlentities($row['actividad']). "</td>";
		
				
		echo "</tr>";
		}


echo "</tbody>
</table>

	
</div>

	
	</div>

</div>
</body>

</html>";
mysql_close($con);}

else{
	echo "<script>window.location='../index.php'; </script>";
}
?>