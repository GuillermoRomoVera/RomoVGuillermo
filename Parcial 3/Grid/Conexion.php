<?php
//echo $id;

$servidor="localhost";
$basedatos="registrodatos";
$usuario="root";
$password="";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die ("No se puede conectar");
$consulta="SELECT * FROM registrodatos.registro";
//echo $consulta;
$registros= mysqli_query($con,$consulta) or die("problemas");

$result = mysqli_fetch_all($registros,MYSQLI_ASSOC);
mysqli_close($con);
echo json_encode($result);

?>