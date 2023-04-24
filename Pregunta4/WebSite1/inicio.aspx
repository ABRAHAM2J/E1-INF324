<%@ Page Language="C#" AutoEventWireup="true" CodeFile="inicio.aspx.cs" Inherits="inicio" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <link rel="stylesheet" type="text/css" href="./css/estilos.css"/>
</head>
<body>
    <form id="form1" runat="server">
    <img src="images/EscudoFCPN.png" style="text-align:center;"/>
    <h1 style="color:blue; text-align:center;"> <asp:Label ID="LabelRol" runat="server" Text=""></asp:Label> </h1>
    <h2 class="main-title">Facultad de Ciencias Puras y Naturales</h2>
    <h4 class="main-subtitle">PRINCIPAL</h4>
    <div class="menu">
        <div class="container">
            <a href="#" class="card">
                <h3 class="title">Carrera de Informatica</h3>
                <img src="./images/informatica.jpg" style="height: 230px; width: 90%;"/>
            </a>
        </div>
        <div class="container">
            <a href="#" class="card">
                <h3 class="title">Carrera de Matematica</h3>
                <img src="./images/matematica.jpg" style="height: 230px; width: 90%;"/>
            </a>
        </div>
        <div class="container">
            <a href="#" class="card">
                <h3 class="title">Carrera de Biologia</h3>
                <img src="./images/biologia.jpg" style="height: 230px; width: 90%;"/>
            </a>
        </div>
    </div>
         <div>

        <asp:Button CssClass="btn" ID="Button1" runat="server" OnClick="Button1_Click" Text="Cerrar Sesion" />

    </div>
    </form>
</body>
</html>
