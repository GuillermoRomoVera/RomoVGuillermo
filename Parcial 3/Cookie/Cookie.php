<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $FechaDeHoy = date('d/m/y H:i:s');
    $SiguienteSemana = time()+(7*24*60);
    $FechaExpiracion = date('d/m/y H:i:s', $SiguienteSemana). '<br>';

    echo '<b>Fecha de Creación del Cookie: </b>'.$FechaDeHoy.'<br>';
    echo '<b>Fecha de Expiración: </b>' .$FechaExpiracion.'<br>';

    setcookie("Ultima_Visita", $FechaDeHoy,time()+(7*24*60));

?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>