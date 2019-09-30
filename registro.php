<?php
$N = $_GET['nombre'];
$A = $_GET['apellido'];
$C = $_GET['correo'];
$CL = $_GET['clave'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Datos Formularios</h1>
    </header>
    <main>
        <div>
            Nombre : <?php echo $N; ?> <br>
            Apellido : <?php echo $A; ?> <br>
            Correo : <?php echo $C;  ?> <br>
            Clave : <?php echo $CL; ?>
        </div>
    </main>

</body>
</html>