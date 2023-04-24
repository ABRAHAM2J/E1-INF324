<?php
    include 'bd/conexion.php';

    if(isset($_POST['user']) && isset($_POST['password'])){
        $user = $_POST['user'];
        $password = $_POST['password'];
        $query = "SELECT * 
                FROM usuario 
                WHERE usuario = '$user'
                AND password = '$password'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            session_start();
            $_SESSION["ci"]=$row['ci'];
            $_SESSION["user"]=$row['usuario'];
            $_SESSION["pass"]=$row['password'];
            $_SESSION["rol"]=$row['rol'];
            
            header("Location: ./inicio.php");
        }
        else{
            header("Location: ./index.php");
        }
    }
    else{
        echo "Error";
    }
?>