<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/privilegios5.php";


if(isset($_SESSION['privilegios'])){

?>

<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  

<link rel="stylesheet" href="/rankinginfo/css/estilo.css" type="text/css" charset="utf-8">
<script>	
    function verifica (){
        if(document.getElementById("query").value==""){
        alert("Busqueda Vacia");
        return false;}
        

        
        else
        return true;
    }
</script>

</head>
<body>
<div id="entero">
  
   			<div id="wrapper">
	   				<div id="header">

    <h1 class="titulo2">Busque Para Editar</h1>

<img src='/rankinginfo/img/third1.jpg' height='150' width='150' style='float: left;
margin: -130px 0px 0px -160px;'>
    </div>
	   				<div id="calificacion">
 <h3 style="color: #808080; margin: -30px 0px 20px 30px;"> Estás en <?php 
                          $imprim = str_replace('rankinginfo/inicio/', "", $_SERVER["REQUEST_URI"]);
                        $imprim = str_replace(' /', "",$imprim);
                                          echo $imprim; ?></h3>
	   				<?php include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu.php";?>


<br>
		<div id="busqueda">
		<form action="consulta/" onsubmit="return verifica();" method="GET">
			<label>Indique su b&uacute;squeda:</label>
			<input type="text" name="query" id="query" class="busquedatexto">
			<div class="submitquery">
			<input type="submit" value="Buscar" class="logout">
			</div>
		</form>
		<div id="querycasual">
<p>Hay <?php $sql= "SELECT * FROM arrendado";
$result=mysql_query($sql, $con);
$resul = mysql_num_rows($result);
echo $resul;
mysql_close($con);
 ?> arrendados registrados</p>

					</div>
		</div>


					</div>
   			</div>
   			
   </div>
</body>
		</html>
		<?php }

		else{
	echo "<script>window.location='../index.php'; </script>";
}?>
