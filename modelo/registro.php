<?php
include 'conexion.php';
$ci_ruc=$_POST['ci_ruc_cliente'];
$nombre=$_POST['nombre_cliente'];
$correo=$_POST['correo_cliente'];
$direccion=$_POST['direccion_cliente'];
$telefono=$_POST['celular_cliente'];

$consulta="INSERT INTO datos_factura(ci_ruc, nombre, correo, direccion, telefono) VALUES ('${ci_ruc}', '${nombre}', '${correo}', '${direccion}', '${telefono}')";

$resultado=mysqli_query($conexion, $consulta);

if ($resultado) {
    echo "Registro exitoso";
}else {
    echo "Registro fallido";
}
?>