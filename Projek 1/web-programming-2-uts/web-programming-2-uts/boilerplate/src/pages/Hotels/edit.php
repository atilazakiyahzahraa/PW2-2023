<?php
require_once '../../../config/Database.php';
require_once '../../../app/Hotels.php';

$database = new Database();
$db = $database->dbConnection();

$hotels = new Hotels($db);

if(isset($_POST['update'])) {
    $hotels->id = $_POST['id'];
    $hotels->name = $_POST['nama'];
    $hotels->address = $_POST['alamat'];
    $hotels->city = $_POST['kota'];
    $hotels->country = $_POST['negara'];

    $hotels->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $hotels->id = $_GET['id'];
    $stmt = $hotels->edit();
    $num = $stmt->rowCount();

    if($num > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        extract($row);
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak ditemukan.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <h1>Edit Data</h1>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="name">Nama:</label>
        <input type="text" name="name" value="<?php echo $name; ?>" required>
        <br>
        <label for="addres">Alamat:</label>
        <input type="text" name="address" value="<?php echo $address; ?>" required>
        <br>
        <label for="city">Kota:</label>
        <input type="text" name="city" value="<?php echo $city; ?>" required>
        <br>
        <label for="country">Negara:</label>
        <input type="text" name="country" value="<?php echo $country; ?>" required>
        <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>