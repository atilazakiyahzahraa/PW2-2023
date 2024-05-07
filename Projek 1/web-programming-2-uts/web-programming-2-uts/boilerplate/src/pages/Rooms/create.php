<?php
require_once '../../../config/Database.php';
require_once '../../../app/Rooms.php';

$database = new Database();
$db = $database->dbConnection();

$room = new Rooms($db);

if(isset($_POST['tambah'])){
    $room->hotel_id = $_POST['id_hotel'];
    $room->room_number = $_POST['no_ruangan'];
    $room->room_type = $_POST['tipe_ruangan'];
    $room->price = $_POST['harga'];
    $room->availability = $_POST['tersedia'];

    $room->store(); 
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <h1>Tambah Data</h1>
    <form method="POST" action="">
        <label for="hotel_id">Id Hotel:</label>
        <input type="number" name="id_hotel" required>
        <br>
        <label for="room_number">No. Ruangan:</label>
        <input type="number" name="room_number" required>
        <br>
        <label for="room_type">Tipe Ruangan:</label>
        <input type="text" name="tipe_ruangan" required>
        <br>
        <label for="price">Harga :</label>
        <input type="number" name="harga" required>
        <br>
        <label for="availability">Ketersediaan :</label>
        <input type="number" name="tersedia" required>
        <br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>