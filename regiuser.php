<?php
include ("conexion.php");

session_start();

if (isset($_POST['enviar'])) {
$usuario=$_POST['usuario'];
$email=$_POST['correo'];
$password=$_POST['passwo'];
$insertar = "INSERT INTO usuarios (username,email,pass) VALUES ('$usuario','$email','$password')";

if (mysqli_query($conexion,$insertar)) {
    echo "<script language='JavaScript'>alert('¡Registro exitoso!'); window.location='registro.html'</script>";
    }else{
        echo "error en el registro" . $insertar . mysqli_error($conexion);
    }
}
mysqli_close($conexion);
?>
