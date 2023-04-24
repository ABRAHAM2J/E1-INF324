<%@ Page Language="C#" AutoEventWireup="true" CodeFile="vistadirector.aspx.cs" Inherits="vistadirector" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <link rel="stylesheet" type="text/css" href="./css/estilos.css"/>
</head>
<body>
    <form id="form1" runat="server">
    <img src="images/EscudoFCPN.png"/>
    <h1 style="color:blue; text-align:center;">
        <asp:Label ID="LabelRol" runat="server" Text=""></asp:Label>
    </h1>
    <h2 class="main-title">Facultad de Ciencias Puras y Naturales</h2>
    <h4 class="main-subtitle">PRINCIPAL</h4>
    <asp:Label ID="LabelMostrar" runat="server" Text=""></asp:Label>
    
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
            <% for (int i = 0; i < resultados.Length; i++) { %>
                    <td><%= resultados[i] %></td>
            <% } %>
        </tr>
    </table>
    <div>

        <asp:Button CssClass="btn" ID="Button1" runat="server" OnClick="Button1_Click" Text="Cerrar Sesion" />

    </div>
    </form>
    </body>
</html>