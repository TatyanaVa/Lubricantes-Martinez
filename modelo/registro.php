<?php
include 'conexion.php';
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];


$consulta="INSERT into cliente(nombre,apellido,correo) values ('$nombre','$apellido','$email',)";

$resultado=mysqli_query($conexion,$consulta);

if($resultado){
    echo "registro exitoso";
}else{
    echo "registro fallido";
}
?>