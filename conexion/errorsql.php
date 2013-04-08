<?php
//Si el error es 1062 es un error de que ya existe la clave (CURP,Expediente)
if (mysql_errno() == 1062) {
//Avisa eso y regresa
  echo '<script> alert("El registro ya existe (CURP o Expediente)");history.go(-1);    </script>';
    $fhandle = fopen( $_SERVER['DOCUMENT_ROOT'].'/rankinginfo/errors/'.date('Ymd').'.txt', 'a' );
    if($fhandle){
    $sql.="\r\n El error es: ".mysql_error()."\r\n\r\n--------------------\r\n\r\n";
      fwrite( $fhandle, $sql );
      fclose(( $fhandle ));
}
}


else{
//Si el error no es esto hace una entrada en un log .txt con la fecha el sql 
//y el errrno 
    $fhandle = fopen( $_SERVER['DOCUMENT_ROOT'].'/rankinginfo/errors/'.date('Ymd').'.txt', 'a' );
   if($fhandle){
    $sql.="\r\n El error es: ".mysql_error()."\r\n\r\n";
      fwrite( $fhandle, $sql );
      fclose(( $fhandle ));
     }

//una explicación de que hubo un error en alert y regresa a la página anterior.
     
  echo '<script> alert("Error Desconocido en la Base de Datos");history.go(-1);</script>';
 }
?>