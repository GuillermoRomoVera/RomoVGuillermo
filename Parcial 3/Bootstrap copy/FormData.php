<?php
$id = $_POST['Cliente'];  
//echo $id;

$servidor="localhost";
$basedatos="registrodatos";
$usuario="root";
$password="";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die ("No se puede conectar");
$consulta="select * from registrodatos.registro where Cliente='".$id."'";
//echo $consulta;
$registros= mysqli_query($con,$consulta) or die("problemas");

$result= mysqli_fetch_array($registros,MYSQLI_ASSOC);
print($result);
//echo json_encode($result);

?>