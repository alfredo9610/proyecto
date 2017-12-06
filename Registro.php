<?php
$mysqli = new mysqli("localhost","root","admin1234","Proyecto");

if($mysqli->connect_errno){
    echo "Fallo al conectar a MySQL: ".$mysqli->connect_error;
}

$consulta = "SELECT * FROM Proyecto";
$resultado = $mysqli->query($consulta);

    if(isset($_POST["enviar"])) {
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $comentario = $_POST["comentario"];

        $mysqli = new mysqli("localhost","root","admin1234","Proyecto");
        $consulta = "INSERT INTO Datos (nombre,correo,comentario) VALUES ('$nombre','$correo','$comentario')";

        $resultado = $mysqli->query($consulta); 

    }
?>