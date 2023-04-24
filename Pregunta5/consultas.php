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

    function TablaNotas(){
        include 'bd/conexion.php';
        $query = "SELECT 
                sum(case when departamento='La Paz' then promedio else 0 end) as LPZ,
                sum(case when departamento='Oruro' then promedio else 0 end) as ORU,
                sum(case when departamento='Potosi' then promedio else 0 end) as PTS,
                sum(case when departamento='Cochabamba' then promedio else 0 end) as CBBA,
                sum(case when departamento='Santa Cruz' then promedio else 0 end) as STC,
                sum(case when departamento='Tarija' then promedio else 0 end) as TAR,
                sum(case when departamento='Pando' then promedio else 0 end) as PND,
                sum(case when departamento='Beni' then promedio else 0 end) as BENI,
                sum(case when departamento='Chuquisaca' then promedio else 0 end) as CHQS
                FROM
                (
                SELECT departamento,AVG(ins.notafinal) promedio, Count(ins.notafinal) estudiantes
                FROM persona per, inscripcion ins
                WHERE per.ci=ins.ci_estudiante
                GROUP BY per.departamento) as depto";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
    }


    
?>