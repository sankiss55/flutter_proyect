<?php
include_once './conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    if ($data) { 
        $consulta = $pdo->prepare("INSERT INTO usuarios (usurio, correo_user, password) VALUES (?, ?, ?)");
        $consulta->execute([$data['usurio'], $data['correo_user'], $data['password']]);
        echo json_encode($consulta->rowCount() > 0);
    } else {
        echo json_encode(["error" => "Error al decodificar JSON"]);
    }
}else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['password']) && isset($_GET['nombre'])) {
        $password = $_GET['password'];
        $nombre = $_GET['nombre'];

        $consulta = $pdo->prepare("SELECT * FROM usuarios WHERE password=? AND nombre=?");
        $consulta->execute([$password, $nombre]);

        echo json_encode($consulta->rowCount() > 0);
    } else {
        echo json_encode(["error" => "Faltan parámetros en la solicitud"]);
    }
}else{
    echo json_encode(value: true);
}
