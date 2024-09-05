<?php
include ("conexion.php");

session_start();

if (isset($_POST['enviar'])) {
$origen=$_POST['origen'];
$destino=$_POST['destino'];
$fecha=$_POST['fecha'];
$insertar = "INSERT INTO usuarios (origen,destino,fecha) VALUES ('$origen','$destino','$fecha')";

if (mysqli_query($conexion,$insertar)) {
    echo "<script language='JavaScript'>alert('¡Registro exitoso!'); window.location='registro.html'</script>";
    }else{
        echo "error en el registro" . $insertar . mysqli_error($conexion);
    }
}
mysqli_close($conexion);
?>
