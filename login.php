<?php
header('Content-Type: application/json');
$data = json_decode(file_get_contents("php://input"));

$usuario = $data->usuario;
$password = hash('sha256', $data->password);

$conn = new mysqli("localhost", "root", "", "tienda_juegos");
if ($conn->connect_error) {
    echo json_encode(["success" => false]);
    exit();
}

$stmt = $conn->prepare("SELECT * FROM administradores WHERE usuario = ? AND password = ?");
$stmt->bind_param("ss", $usuario, $password);
$stmt->execute();
$result = $stmt->get_result();

echo json_encode(["success" => $result->num_rows > 0]);
$conn->close();
?>
