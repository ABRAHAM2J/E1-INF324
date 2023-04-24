<%@ Page Language="C#" AutoEventWireup="true" CodeFile="index.aspx.cs" Inherits="_Default" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <link rel="stylesheet" type="text/css" href="./css/estiloslogin.css"/>
</head>
<body>
    <div class="main">
        <div class="container">
            <form id="form1" runat="server" class="form">
                <h2 class="brand">Facultad de ciencias puras y Naturales</h2>
                <div>
                    <asp:Label CssClass="lab" ID="Label1" runat="server" Text="Username"></asp:Label>
                    <br/>
                    <asp:TextBox CssClass="field" ID="TextBoxUsername" runat="server"></asp:TextBox>
                </div>
                <div>
                    <asp:Label CssClass="lab" ID="Label2" runat="server" Text="Password"></asp:Label>
                    <br />
                    <asp:TextBox CssClass="field" ID="TextBoxPassword" runat="server" TextMode="Password"></asp:TextBox>
                </div>
                <div>
                    <asp:Button CssClass="btn" ID="Button1" runat="server" OnClick="Button1_Click" Text="Validar" />
                </div>
                <div>
                    <asp:Label ID="LabelError" runat="server" Text=""></asp:Label>
                </div>
            </form>
            <div class="image">
            <img src="./images/EscudoFCPN.png" alt="fcpn"/>
        </div>
        </div>
    </div>
</body>
</html>
