<?php
require_once '../../../config/Database.php';
require_once '../../../app/Rooms.php';

$database = new Database();
$db = $database->dbConnection();

$room = new Rooms($db);

if(isset($_POST['update'])) {
    $room->id = $_POST['id'];
    $room->hotel_id = $_POST['id_hotel'];
    $room->room_number = $_POST['no_ruangan'];
    $room->room_type= $_POST['tipe_ruangan'];
    $room->price = $_POST['harga'];
    $room->availability = $_POST['tersedia'];
    
    $room->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $room->id = $_GET['id'];
    $stmt = $room->edit();
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
</head>
<body>
    <h1>Edit Data</h1>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="hotel_id">Id Hotel:</label>
        <input type="number" name="id_hotel" value="<?php echo $hotel_id; ?>" required>
        <br>
        <label for="room_number">No. Ruangan:</label>
        <input type="number" name="no_ruangan" value="<?php echo $room_number; ?>" required>
        <br>
        <label for="room_type">Tipe Ruangan:</label>
        <input type="text" name="tipe_ruangan" value="<?php echo $room_type; ?>" required>
        <br>
        <label for="price">Harga:</label>
        <input type="number" name="harga" value="<?php echo $price; ?>" required>
        <br>
        <label for="availability">Ketersediaan:</label>
        <input type="number" name="tersedia" value="<?php echo $availability; ?>" required>
        <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>