<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
$_SESSION['curp'] =  $_REQUEST['id'];
$expediente = $_SESSION['curp']; //Variable temporal para guardar el id del expediente en consulta


  $sql="SELECT * from relacion_juicios WHERE expediente='".$_SESSION['curp']."'";
  $result=mysql_query($sql); // Query para seleccionar todos los campos de un expediente

  $sql="SELECT DISTINCT * FROM promocion WHERE expediente='".$expediente."'";
  $resultado3=mysql_query($sql); // Query para obtener todas las promociones de un expediente

  $expedientillo = "SELECT DISTINCT * FROM relacion_juicios WHERE expedientillo='".$_SESSION['curp']."'";
  if(!($resultado5=mysql_query($expedientillo))) //Query para obtener los expedientillos de un expediente (si es que los tiene)
  {
    die ($expedientillo."Error".mysql_error());
  }
 ?>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <script src="/rankinginfo/conexion/jquery-1.9.1.js"></script>
  <title> Descargar Juicio </title>
</head>
<body>
  <div id="dvData">
<table>
<?php
    while($row = mysql_fetch_array($result)){
?>
    <thead>
      <tr>
        <th>
          Expediente
        </th>
        <th>
          Actor
        </th>
        <th>
          Representante Legal
        </th>
        <th>
          Abogado Patrono
        </th>
        <th>
          Demandado
        </th>
        <th>
          Juicio
        </th>
        <th>
          Juzgado
        </th>
        <th>
          Distrito Judicial
        </th>
        <th>
          Ultima Actuación
        </th>
        <th>
          Estado Procesal
        </th>
        <th>
          Fecha de Vencimiento de Termino
        </th>
        <th>
          Comentario
        </th>
        <th>
          Promoción/Notificación
        </th>
      </tr>

    </thead>
    <tr>
      <td>
<?php
        if ($row['expedientillo']== NULL)
        {
          echo $row['expediente'];
          $expe = 1;
          $expe2= $row['expediente'];
        }
        else
        {
          echo $row['expedientillo']."Expediente Principal: ".$row['expedientillo'];
          $expe = 0;
        }
?>
      </td>
      <td>
        <?php echo $row['actor_nombres']." ".$row['actor_apellido_paterno']." ".$row['actor_apellido_materno'] ?>
      </td>
      <td>
        <?php echo $row['persona_moral_nombres']." ".$row['persona_moral_apellido_paterno']." ".$row['persona_moral_apellido_materno'] ?>
      </td>
      <td>
        <?php echo $row['abogado_patrono_nombres']." ".$row['abogado_patrono_apellido_paterno']." ".$row['abogado_patrono_apellido_materno']?>
      </td>
      <td>
        <?php echo $row['demandado_nombres']." ".$row['demandado_apellido_paterno']." ".$row['demandado_apellido_materno'] ?>
      </td>
      <td>
        <?php echo $row['juicio']?>
      </td>
      <td>
        <?php echo $row['juzgado']?>
      </td>
      <td>
        <?php echo $row['distrito_juidicial']?>
      </td>
      <td>
        <?php echo $row['ultima_actuacion']?>
      </td>
      <td>
        <?php echo $row['estado_procesal']?>
      </td>
      <td>
<?php $originalDate = $row['fecha'] ; $newDate = date("d-m-Y", strtotime($originalDate)); echo $newDate; ?>
      </td>
      <td>
        <?php echo $row['comentario_01']?>
      </td>
<?php while($row = mysql_fetch_array($resultado3)){ ?>
      <td>
        <?php echo $row['tipo']."<br>Fecha:<br>".$row['fecha_notificacion']."<br>Comentario:<br>".$row['comentario'] ?>
      </td>
<?php } ?>
    </tr>
<?php } ?>
</table>
</div>

<script>
  window.open('data:application/vnd.ms-excel,' + $('#dvData').html(),"_self");
  // window.history.back();
</script>
  </body>

</html>
