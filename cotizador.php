<?php
   

   # Cotizador del dolar para WHMCS #
   # github.com/joselsp95 #

   /* MySQL Conexion*/
   $link = mysqli_connect("localhost", "usuario", "passwword", "db");
   // Chequea conex
   if($link === false){
    die("ERROR: No pudo conectarse con la DB. " . mysqli_connect_error());
}

    // Traigo los datos del dolar
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, 'https://api-dolar-argentina.herokuapp.com/api/dolaroficial'); 
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
   curl_setopt($ch, CURLOPT_HEADER, 0); 
   $data = curl_exec($ch); 
   $arreglo = json_decode($data, TRUE);
   curl_close($ch); 
   $valor = $arreglo['venta'];
   $valor = number_format($valor, 5);
   // cierra funcion de traer el valor del dolar

   // Ejecuta la actualizacion del registro
   // Aca tener en cuenta que puede ser diferente el ID de tu columna del dolar
   $sql = "UPDATE tblcurrencies SET rate = '$valor' WHERE id = 10";

   if(mysqli_query($link, $sql)){

       echo "Registro actualizado.";
   } else {
       echo "ERROR: No se ejecuto $sql. " . mysqli_error($link);
   }
   // Cierra la conexion
   mysqli_close($link);


   echo $valor;
?>
