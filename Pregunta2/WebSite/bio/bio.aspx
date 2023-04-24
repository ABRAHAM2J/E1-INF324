<%@ Page Language="C#" AutoEventWireup="true" CodeFile="bio.aspx.cs" Inherits="bio_bio" %>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregunta 1</title>
    <link rel="stylesheet" type="text/css" href="../estilos.css">
</head>
<body>
    <img src="../images/bio.jpeg">
    <h2 class="main-title">Facultad de Ciencias Puras y Naturales</h2>
    <h4 class="main-subtitle">Carrera de Biologia</h4>
    <div class="menu">
        <div class="container">
            <a href="../inf/inf.aspx" class="card">
                <h3 class="title">Carrera de Informatica</h3>
                <img src="../images/informatica.jpg" style="height: 230px; width: 90%;">
            </a>
        </div>
        <div class="container">
            <a href="../mat/mat.aspx" class="card">
                <h3 class="title">Carrera de Matematica</h3>
                <img src="../images/matematica.jpg" style="height: 230px; width: 90%;">
            </a>
        </div>
        <div class="container">
            <a href="./bio.aspx" class="card">
                <h3 class="title">Carrera de Biologia</h3>
                <img src="../images/biologia.jpg" style="height: 230px; width: 90%;">
            </a>
        </div>
        <div class="btn">
            <a href="../index.aspx">Regresar al menu</a>
        </div>
    </div>
</body>
</html>