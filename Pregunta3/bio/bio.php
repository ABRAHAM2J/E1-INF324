<?php
    session_start();
    if(!isset($_SESSION['ci'])){
        header("Location: ../index.php");
    }

    include '../consultas.php';
    $row = DatoUsuario($_SESSION['ci']);

    $nombres = array("Informática", "Matemática", "Biologia");
    $links = array("../inf/inf.php", "../mat/mat.php", "./bio.php");
    $images = array("../images/informatica.jpg", "../images/matematica.jpg", "../images/biologia.jpg");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregunta 1</title>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>
    <img src="../images/bio.jpeg">
    <h1 style="color:blue;"><?php echo $row['nombre'];?></h1>
    <h2 class="main-title">Facultad de Ciencias Puras y Naturales</h2>
    <h4 class="main-subtitle">Carrera de Biologia</h4>
    <div class="menu">
        <?php 
            for ($i=0; $i < count($nombres); $i++) { 
                echo "<div class='container'>";
                echo    "<a href='$links[$i]' class='card'>";
                echo        "<h3 class='title'>Carrera de $nombres[$i]</h3>";
                echo        "<img src='$images[$i]' style='heigth: 230px; width: 90%;'>";
                echo    "</a>";
                echo "</div>";
            }
        ?>
        
    </div>
    <div class="btn">
            <a href="../inicio.php">Regresar al menu</a>
    </div>
</body>
</html>