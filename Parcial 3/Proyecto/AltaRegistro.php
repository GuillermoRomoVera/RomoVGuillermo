<?php
//echo $id;
$Email = $_POST['Email'];
$Nombre=$_POST['Nombre'];
$Usuario = $_POST['Usuario'];
$Contrasena = $_POST['Contrasena'];
$Direccion = $_POST['Direccion'];
$Estado = $_POST['Estado'];
$CodigoPostal = $_POST['CodigoPostal'];
$Ciudad = $_POST['Ciudad'];

$servidor="localhost";
$basedatos="registrodatos";
$usuario="root";
$password="";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die ("No se puede conectar");
$consulta = "INSERT INTO registro(Nombre, Ciudad, Estado, CodigoPostal, Usuario, Contrasena, Direccion, Email) VALUES('$Nombre', '$Ciudad', '$Estado', '$CodigoPostal', '$Usuario', '$Contrasena', '$Direccion', '$Email')";
$registros= mysqli_query($con,$consulta) or die("Problemas al traer los datos");

if($registros){

    header("Location:Formulario.html");

}

else{
    echo "Pero si caben o no";

}


//$result = mysqli_fetch_array($registros,MYSQLI_ASSOC);
//mysqli_close($con);
//  echo json_encode($result);

?>