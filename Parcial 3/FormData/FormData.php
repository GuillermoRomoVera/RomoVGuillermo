<?php
$id =$_POST['IDCliente'];
//echo $id;

$servidor="localhost";
$basedatos="registrodatos";
$usuario="root";
$password="";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die ("No se puede conectar");
$consulta="SELECT * FROM registrodatos.registro where IDCliente=$id";
//echo $consulta;
$registros= mysqli_query($con,$consulta) or die("problemas");

$result = mysqli_fetch_array($registros,MYSQLI_ASSOC);
echo json_encode($result);

?>