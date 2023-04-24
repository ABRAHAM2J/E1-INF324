<?php 
    function DatoUsuario($ci){
        include 'bd/conexion.php';
        $query = "SELECT u.rol, p.nombre 
                FROM usuario u, persona p 
                WHERE u.ci = $ci
                AND u.ci = p.ci";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
    }
?>