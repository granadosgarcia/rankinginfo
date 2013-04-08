<?php
//Si el error es 1062 es un error de que ya existe la clave (CURP,Expediente)
if (mysql_errno() == 1062) {
//Avisa eso y regresa
alert("El registro ya existe en la base de datos");
echo "<script>javascript: history.go(-1);<script>";
}



//Si el error no es esto hace una entrada en un log .txt con la fecha el sql 
//y el errrno 

//una explicación de que hubo un error en alert y regresa a la página anterior.
?>