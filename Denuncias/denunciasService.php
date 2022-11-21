<?php 
//Configuracion
include 'conexion.php';
$conectar=new Conexion();
//Metodo Get
if($_SERVER['REQUEST_METHOD']=='GET'){
    if(isset($_GET['id'])){
    $consulta=$conectar->prepare("Select * from denuncias WHERE Id=:id");
    $consulta->bindValue(':id',$_GET['id']);
    $consulta->execute();
    $consulta->setFetchMode(PDO::FETCH_ASSOC);
    header("HTTP/1.1 200 OK");
    echo json_encode($consulta->fetchAll());
    exit;
    }
    else{
    $consulta=$conectar->prepare("Select * from denuncias");
    $consulta->execute();
    $consulta->setFetchMode(PDO::FETCH_ASSOC);
    header("HTTP/1.1 200 OK");
    echo json_encode($consulta->fetchAll());
    exit;
}
}
//METODO POST
if($_SERVER['REQUEST_METHOD']=='POST'){
    $consulta=$conectar->prepare("INSERT INTO denuncias(Nombre,Edad,Telefono,Dia_Agresion,Tipo_Agresion,Nombre_Agresor,Telefono_Agresor,Domicilio_Agresor)
         VALUES(:nombre,:edad,:telefono,:dia_agresion,:tipo_agresion,:nombre_agresor,:telefono_agresor,:domicilio_agresor)");
    $consulta->bindValue(':nombre',$_POST['nombre']);
    $consulta->bindValue(':edad',$_POST['edad']);
    $consulta->bindValue(':telefono',$_POST['telefono']);
    $consulta->bindValue(':dia_agresion',$_POST['dia_agresion']);
    $consulta->bindValue(':tipo_agresion',$_POST['tipo_agresion']);
    $consulta->bindValue(':nombre_agresor',$_POST['nombre_agresor']);
    $consulta->bindValue(':telefono_agresor',$_POST['telefono_agresor']);
    $consulta->bindValue(':domicilio_agresor',$_POST['domicilio_agresor']);
    $consulta->execute();
    $ultimoId=$conectar->lastInsertId();
    if($ultimoId){
        header("HTTP/1.1 200 OK");
        echo json_encode($ultimoId);
        exit;
    }
}
//METODO PUT
if($_SERVER['REQUEST_METHOD']=='PUT'){
    $consulta=$conectar->prepare("UPDATE denuncias SET Nombre=:nombre,Edad=:edad,Telefono=:telefono,Dia_Agresion=:dia_agresion,Tipo_Agresion=:tipo_agresion,Nombre_Agresor=:nombre_agresor,Telefono_Agresor=:telefono_agresor,
    Domicilio_Agresor=:domicilio_agresor  WHERE Id=:id");
    $consulta->bindValue(':nombre',$_GET['nombre']);
    $consulta->bindValue(':edad',$_GET['edad']);
    $consulta->bindValue(':telefono',$_GET['telefono']);
    $consulta->bindValue(':dia_agresion',$_GET['dia_agresion']);
    $consulta->bindValue(':tipo_agresion',$_GET['tipo_agresion']);
    $consulta->bindValue(':nombre_agresor',$_GET['nombre_agresor']);
    $consulta->bindValue(':telefono_agresor',$_GET['telefono_agresor']);
    $consulta->bindValue(':domicilio_agresor',$_GET['domicilio_agresor']);
    $consulta->bindValue(':id',$_GET['id']);
    $consulta->execute();
    header("HTTP/1.1 200 OK");
    exit;
}
//METODO DELETE
if($_SERVER['REQUEST_METHOD']=='DELETE'){
    $consulta=$conectar->prepare("DELETE FROM denuncias WHERE Id=:id");
    $consulta->bindValue(':id',$_GET['id']);
    $consulta->execute();
    header("HTTP/1.1 200 OK");
    exit;
}
header("HTTP/1.1 400 Error");
?>