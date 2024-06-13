<?php
require_once 'db_config.php';



// Get the posted data
$data = json_decode(file_get_contents("php://input"));

// Validate the data
if (!isset($data->name) || !isset($data->email)) {
  die(json_encode(["error" => "Invalid input"]));
}


$id = $koneksi->real_escape_string($data->id);
$name = $koneksi->real_escape_string($data->name);
$email = $koneksi->real_escape_string($data->email);
$pass = $koneksi->real_escape_string($data->password);
$hobi = $koneksi->real_escape_string($data->hobi);

$sql = "UPDATE users set name='$name', email='$email', password='$pass', hobi='$hobi' WHERE id=$id";

if ($koneksi->query($sql) === TRUE) {
  echo json_encode(["success" => true]);
} else {
  echo json_encode(["error" => $koneksi->error]);
}

$koneksi->close();
