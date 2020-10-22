<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores de enlace</title>
</head>
<body>
<?php

if (empty($_GET['contador'])) {
   $contador=1;
}

else {
    $contador=$_GET['contador']+1;
}
?>
    <h1>La página es: <?php echo $_SERVER ["PHP_SELF"]; ?></h1>
    <h1>Recargas: <?php echo $contador; ?></h1>
    <p>Dia: <?php echo $_GET ["dia"] ?></p>
    <p>Mes: <?php echo $_GET ["mes"] ?> </p>
    <?php echo "<p><a href='$_SERVER[PHP_SELF]?dia=domingo&mes=octubre&contador=$contador'>Recargar pagina</p>";?>


</body>
</html>