<?php
    $servidor="localhost";
    $BaseDatos="registrodatos";
    $Usuario="root";
    $Password="";

    $con = mysqli_connect($servidor,$Usuario,$Password,$BaseDatos) or die("No se puede conectar");
    $Consulta="select * from registro";
    $registros = mysqli_query($con,$Consulta) or die("Consulta incorrecta");

    $result=mysqli_fetch_all($registros);
    mysqli_close($con);
    echo json_encode($result);

?>