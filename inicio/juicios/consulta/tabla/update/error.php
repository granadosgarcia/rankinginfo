<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";

?>

<!DOCTYPE html>

<html>
<head>

<meta charset="UTF-8"/>
<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/header_juicios.php";
?>
<!--
<link rel="stylesheet" href="/rankinginfo/css/estilo.css" type="text/css" charset="utf-8">

  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
-->

  <script>
  $(function() {
    $( "#fecha_notificacion" ).datepicker({ dateFormat: "dd-mm-yy" });
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



        if(document.getElementById("fecha_notificacion").value=="" &&  document.getElementById("comentario").value==""){
document.getElementById("error").innerHTML="<p style='color:RED; font-size:20px;margin-left: 40px; '>Por lo menos llena un campo</p>";
return false;
        }
        if(document.getElementById("fecha_notificacion").value==""){
        document.getElementById("error").innerHTML="<p style='color:RED; font-size:20px;margin-left: 40px; '>Fecha Obligatoria</p>";
        return false;
        }


        else
        return true;
        }

</script>


</head>
<body>
  <div>
    <h1>Reportar Error</h1>
  </div>

  <div  id="error">
  </div>
  <div id="promociones">
    <form action="update_error.php" onsubmit="return verifica ()" method="GET">

    <ul style="list-style: none;">
      <li><label>Campo con el error</label>
        <select id="campo" name="campo">
          <option value="Actor Nombres">Actor Nombres</option>
          <option value="Actor Apellido Paterno">Actor Apellido Paterno</option>
          <option value="Actor Apellido Materno">Actor Apellido Materno</option>
          <option value="Representante Legal Nombres">Representante Legal Nombres</option>
          <option value="Representante Legal Apellido Paterno">Representante Legal Apellido Paterno</option>
          <option value="Representante Legal Apellido Materno">Representante Legal Apellido Materno</option>
          <option value="Abogado Patrono Nombres">Abogado Patrono Nombres</option>
          <option value="Abogado Patrono Apellido Paterno">Abogado Patrono Apellido Paterno</option>
          <option value="Abogado Patrono Apellido Materno">Abogado Patrono Apellido Materno</option>
          <option value="Demandado Nombres">Demandado Nombres</option>
          <option value="Demandado Apellido Paterno">Demandado Apellido Paterno</option>
          <option value="Demandado Apellido Materno">Demandado Apellido Materno</option>
          <option value="Juicio">Juicio</option>
          <option value="Juzgado">Juzgado</option>
          <option value="Distrito Judicial">Distrito Judicial</option>
        </select>
      </li>
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
