<?php
    $servidor="localhost";
    $BaseDatos="Ejemplo";
    $Usuario="root";
    $Password="";

    $con = mysqli_fetch_all($servidor,$BaseDatos,$Usuario,$Password) or die("No se puede conectar");
    $Consulta="select + from Empleado"
    $registros == mysqli_connect($con,$Consulta) or die("")

    $result=mysqli_fetch_all($registros);
    mysql_close($con);
    echo json_encode($result);

?>