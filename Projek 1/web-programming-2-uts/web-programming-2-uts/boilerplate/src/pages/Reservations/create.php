<?php
require_once '../../../config/Database.php';
require_once '../../../app/Reservations.php';

$database = new Database();
$db = $database->dbConnection();

$reservations = new Reservations($db);

if(isset($_POST['tambah'])){
    $reservations->guest_id = $_POST['id_tamu'];
    $reservations->room_id = $_POST['id_ruangan'];
    $reservations->check_in_date = $_POST['tanggal_checkin'];
    $reservations->check_out_date= $_POST['tanggal_checkout'];

    $reservations->store(); 
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
        <label for="guest_id">Id Tamu:</label>
        <input type="number" name="id_tamu" required>
        <br>
        <label for="room_id">Id Ruangan:</label>
        <input type="number" name="room_id" required>
        <br>
        <label for="check_in_date">Tanggal Check In:</label>
        <input type="date" name="tanggal_checkin" required>
        <br>
        <label for="check_out_date">Tanggal Check Out :</label>
        <input type="date" name="tanggal_checkout" required>
        <br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>