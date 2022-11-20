<?php
    //$id = $_POST['IDCliente'];
    $servidor="localhost";
    $BaseDatos="registrodatos";
    $Usuario="root";
    $Password="";

    $con = mysqli_connect($servidor,$Usuario,$Password,$BaseDatos) or die("No se puede conectar");
    $Consulta="select * from IDCliente where IDCliente='19100251'";
    $registros = mysqli_query($con,$Consulta) or die("Consulta incorrecta");

    $result = msqli_fecth_array($registros,MYSQLI_ASSOC);
    echo json_encode($result);

?>