<?php
require_once '../../../config/Database.php';
require_once '../../../app/Guests.php';

$database = new Database();
$db = $database->dbConnection();

$guests = new Guests($db);

if(isset($_POST['tambah'])){
    $guests->first_name = $_POST['first_name'];
    $guests->last_name = $_POST['last_name'];
    $guests->email = $_POST['email'];
    $guests->phone = $_POST['phone'];

    $guests->store(); 
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
        <label for="fnama">Nama Depan:</label>
        <input type="text" name="first_name" required>
        <br>
        <label for="lname">Nama Belakang:</label>
        <input type="text" name="last_name" required>
        <br>
        <label for="email">Email:</label>
        <input type="text" name="email" required>
        <br>
        <label for="numphone">No.Hp:</label>
        <input type="number" name="phone" required>
        <br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>