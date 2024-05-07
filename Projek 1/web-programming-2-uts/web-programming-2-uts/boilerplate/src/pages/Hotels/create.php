<?php
require_once '../../../config/Database.php';
require_once '../../../app/Hotels.php';

$database = new Database();
$db = $database->dbConnection();

$hotels = new Hotels($db);

if(isset($_POST['tambah'])){
    $hotels->name = $_POST['nama'];
    $hotels->address = $_POST['alamat'];
    $hotels->city = $_POST['kota'];
    $hotels->country = $_POST['negara'];

    $hotels->store(); 
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
        <label for="name">Nama:</label>
        <input type="text" name="nama" required>
        <br>
        <label for="address">Alamat:</label>
        <input type="text" name="alamat" required>
        <br>
        <label for="city">Kota:</label>
        <input type="text" name="kota" required>
        <br>
        <label for="country">Country:</label>
        <input type="text" name="negara" required>
        <br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>