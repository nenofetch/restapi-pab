<?php
header("Content-Type: application/json");
include 'db_config.php';
// Get the posted data
$data = json_decode(file_get_contents("php://input"));
// Validate the data
if (!isset($data->name) || !isset($data->email) || !isset($data->$password) || !isset($data->hobi)) {
    die(json_encode(["error" => "Invalid input"]));
}
$name = $koneksi->real_escape_string($data->name);
$email = $koneksi->real_escape_string($data->email);
$password = $koneksi->real_escape_string($data->password);
$hobi = $koneksi->real_escape_string($data->hobi);
$sql = "INSERT INTO users (name, email, password, hobi) VALUES ('$name', 
'$email', '$password', '$hobi')";
if ($koneksi->query($sql) === TRUE) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["error" => $koneksi->error]);
}
$koneksi->close();
