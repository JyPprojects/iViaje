<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario de Registro</h1>
    
        <form action='' method='GET'>
            <p>Nombre:</p><input type="text" name="nombre">
            <p>Apellidos:</p><input type="text" name="apellidos">
            <p>Fecha Nacimiento:</p><input type="date" name="fecha">
            <br><br><br>
            <input type="submit" name="Enviar">
        </form>

        <h3>Tus datos son:</h3>
        <?php

            if (isset ($_GET['Enviar'])) {
                echo "Nombre: $_GET[nombre]";
                echo "Apellidos: $_GET[apellidos]";
                echo "Fecha Nacimiento: $_GET[fecha]";
            }
            
        ?>

</body>
</html>