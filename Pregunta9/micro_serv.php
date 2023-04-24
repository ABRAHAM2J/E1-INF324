<?php
include "conexion.php";
$con=new conexion();

//GET  
if($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_GET['ci'])) { // Verifica si la solicitud HTTP es de tipo GET y no tiene parámetro "ci".
    
    $consulta = "select * from persona"; // Define la consulta SQL 
    $resultado = $con->prepare($consulta); // Prepara la consulta SQL utilizando PDO y la asigna a la variable $resultado.
    $resultado->execute(); // Ejecuta la consulta SQL preparada.
    $resultado->setFetchMode(PDO::FETCH_ASSOC); // Establece el modo de recuperación de resultados en PDO::FETCH_ASSOC
    header("HTTP/1.1 200 OK"); // indica que la solicitud se ha completado correctamente.
    echo json_encode($resultado->fetchAll()); // Convierte los resultados obtenidos de la consulta SQL a formato JSON 
    exit; // Detiene la ejecución del script PHP después de enviar la respuesta HTTP al cliente.
}     

//GET:id
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['ci'])){
    $consulta = "select * from persona where ci = :ci";
    $resultado = $con->prepare($consulta);
    $resultado->bindValue(':ci', $_GET['ci']); //Vincula el valor del parámetro ci con la consulta SQL preparada.
    $resultado->execute();
    $resultado->setFetchMode(PDO::FETCH_ASSOC);
    header("HTTP/1.1 200 OK");
    echo json_encode($resultado->fetchAll());
    exit;

}

//POST(Alta)
if($_SERVER['REQUEST_METHOD']=='POST'){
        $consulta="insert into persona(ci,nombre, fecha_nac, telefono, departamento) VALUES (:ci,:nombre, :fecha_nac, :telefono,:departamento); ";
        $resultado=$con->prepare($consulta);
        $resultado->bindValue(':ci',$_POST['ci']);
        $resultado->bindValue(':nombre',$_POST['nombre']);
        $resultado->bindValue(':fecha_nac',$_POST['fecha_nac']);
        $resultado->bindValue(':telefono',$_POST['telefono']);
        $resultado->bindValue(':departamento',$_POST['departamento']);

        $resultado->execute();
        $ci=$con->lastInsertId();
        if($ci){
            header("HTTP/1.1 200");
            echo json_encode($ci);
            echo "resgistro existente";
            exit;
        }
}

//PUT(Cambio)
if($_SERVER['REQUEST_METHOD']=='PUT'){
    $consulta="update persona set ci =:ci, nombre=:nombre, fecha_nac=:fecha_nac, telefono=:telefono,departamento=:departamento where ci =:ci";
    
    $resultado=$con->prepare($consulta);
    $resultado->bindValue(':ci',$_GET['ci']);
    $resultado->bindValue(':nombre',$_GET['nombre']);
    $resultado->bindValue(':fecha_nac',$_GET['fecha_nac']);
    $resultado->bindValue(':telefono',$_GET['telefono']);
    $resultado->bindValue(':departamento',$_GET['departamento']);
    $resultado->execute();
    header("HTTP/1.1 200");
    echo "registro actualizado";
}

//DELETE(Baja)
if($_SERVER['REQUEST_METHOD']=='DELETE'){
    $consulta="delete from persona where ci=:ci ;";
    $resultado=$con->prepare($consulta);
    $resultado->bindValue(':ci',$_GET['ci']);
    $resultado->execute();
    header("HTTP/1.1 200");
    echo "resgistro eliminado exitosamente";
    exit;
}
header("HTTP/1.1 400")

?>