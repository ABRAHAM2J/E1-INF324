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
            if($row['rol'] == "director"){
                $_SESSION["dir_ci"]=$row['ci'];
                $_SESSION["dir_user"]=$row['usuario'];
                $_SESSION["dir_pass"]=$row['password'];
                $_SESSION["dir_rol"]=$row['rol'];
                
                header('Location: ./vistadirector.php');
            }
            elseif($row['rol'] == "estudiante"){
                $_SESSION["est_ci"]=$row['ci'];
                $_SESSION["est_user"]=$row['usuario'];
                $_SESSION["est_pass"]=$row['password'];
                $_SESSION["est_rol"]=$row['rol'];

                header('Location: ./inicio.php');
            }
        }
        else{
            header("Location: ./index.php");
        }
    }
    else{
        echo "Error";
    }
?>