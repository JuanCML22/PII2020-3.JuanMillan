<?php

$hostname = "127.0.0.1";
$hostuser = "root";
$hostpass = "";
$database = "univa";

$connection = mysqli_connect($hostname,$hostuser,$hostpass,$database);

if($connection){
   $sqlquery  = "SELECT * FROM users;";
   $result = mysqli_query($connection, $sqlquery);

   if(mysqli_num_rows($result) > 0){
       
        echo "USUARIOS";
        while($row = mysqli_fetch_assoc($result)){
            echo "------------------------------------------------------"."</br>";
            echo "Id: ".$row['id']." - Nombre: ".$row['name']." - Correo: "
            .$row['email']." - Contraseña: ".$row['password']." - Estatus: "
            .$row['status']." - Creado: ".$row['create_at']." - Modificado: "
            .$row['update_at']."</br>";

        }
   }else{
        echo "No hay usuarios disponibles por el momento";
   }


}else{
    echo "Error en conexión";
}

?>