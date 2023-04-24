<?php
    session_start();

    if (!isset($_SESSION['dir_ci'])) {
        header("Location: ./index.php");
    }

    include './consultas.php';
    $row = DatoUsuario($_SESSION['dir_ci']);
    $rownts = TablaNotas();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregunta 1</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>

<body>

    <img src="images/EscudoFCPN.png">
    <h1 style="color:blue;"><?php echo $row['rol']; ?>: <?php echo $row['nombre']; ?></h1>
    <h2 class="main-title">Facultad de Ciencias Puras y Naturales</h2>
    <h4 class="main-subtitle">PRINCIPAL</h4>

    <table>
            <tr>
                <th><strong>Departamento</strong></th>
                <th>La Paz</th>
                <th>Oruro</th>
                <th>Potosi</th>
                <th>Cochabamba</th>
                <th>Santa Cruz</th>
                <th>Tarija</th>
                <th>Pando</th>
                <th>Beni</th>
                <th>Chuquisaca</th>
            </tr>
            
            <tr>
                <td><strong>Promedio de notas</strong></td>
                <td><?php echo $rownts['LPZ'];?></td>
                <td><?php echo $rownts['ORU'];?></td>
                <td><?php echo $rownts['PTS'];?></td>
                <td><?php echo $rownts['CBBA'];?></td>
                <td><?php echo $rownts['STC'];?></td>
                <td><?php echo $rownts['TAR'];?></td>
                <td><?php echo $rownts['PND'];?></td>
                <td><?php echo $rownts['BENI'];?></td>
                <td><?php echo $rownts['CHQS'];?></td>
            </tr>
    </table>
    <div class="btn">
        <a href="./control_logout.php">Cerrar Sesion</a>
    </div>

</body>

</html>


                
                
                
                
                
                
                