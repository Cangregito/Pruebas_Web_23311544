<?php
$conexion = mysqli_connect("localhost", "root", "", "vuelos");
if(!$conexion) {
        die("error en la conexion" . mysqli_connect_error());
    }else{
    echo "Base de datos conectada";
}
?>