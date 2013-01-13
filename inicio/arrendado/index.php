<?php 
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  

	<link rel="stylesheet" type="text/css" href="/rankinginfo/css/estilo.css">
    	<title>Arrendados</title>
    	
    <script type="text/javascript">
    
    function init(){
    var privilegios =<?php echo $_SESSION['privilegios'];?>;
    var remove = document.getElementById("edicion");
    if( privilegios === 1)
    remove.parentNode.removeChild(remove);
    }
    </script>
   
    </head>
    <body onload="init()"><div id="entero">
  
   			<div id="wrapper">
	   				<div id="header">
	   			
   <h1 class="titulo">Ranking Information</h1>
   
<img src='/rankinginfo/img/third1.jpg' height='150' width='150' style='float: left;
margin: -200px 0px 0px -160px;'>
   
   					</div>
   				
   					<div id="contenido">
   					
   					            <h3 style="color: #808080; margin: -40px 0px 15px 30px;"> Estás en <?php 
                          $imprim = str_replace('rankinginfo/inicio/', "", $_SERVER["REQUEST_URI"]);
                        $imprim = str_replace(' /', "",$imprim);
                                          echo $imprim; ?></h3>

    <p class="bienvenida"><?php 
    
    echo "Bienvenido ". $_SESSION['nombreusuario'];?></p>
    
       	   				<?php include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/menu_inicio.php";?>
       	   				
    	
    	
    	<div class="botonera">
<a href="insercion/"><input type="button" value="Insertar" class="inserta"></a>
    	
  <?php if(isset($_SESSION['privilegios'])&&$_SESSION['privilegios']>=10){ 
 ?>
      <div id="edicion" >
<a href="edicion/"><input type="button" value="Editar" class="edita"></a>
    	</div>

      <?php } ?>

<a href="calificacion/"><input type="button" value="Calificar" class="califica"></a>

<a href="consulta/"><input type="button" value="Consultar" class="consulta"></a>

    	</div>

   					</div>
	
   			</div>

    </body>
</html>    

