<?php
require_once '../../../config/Database.php';
require_once '../../../app/Reservations.php';

$database = new Database();
$db = $database->dbConnection();

$reservations = new Reservations($db);

if(isset($_POST['update'])) {
    $reservations->id = $_POST['id'];
    $reservations->guest_id = $_POST['id_tamu'];
    $reservations->room_id = $_POST['id_ruangan'];
    $reservations->check_in_date= $_POST['tanggal_checkin'];
    $reservations->check_out_date = $_POST['tanggal_checkout'];
    
    $reservations->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $reservations->id = $_GET['id'];
    $stmt = $reservations->edit();
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
        <label for="guest_id">Id Tamu:</label>
        <input type="number" name="id_tamu" value="<?php echo $guest_id; ?>" required>
        <br>
        <label for="room_id">Id Ruangan:</label>
        <input type="number" name="id_ruangan" value="<?php echo $room_id; ?>" required>
        <br>
        <label for="check_in_date">Tanggal Check In:</label>
        <input type="date" name="tanggal_checkin" value="<?php echo $check_in_date; ?>" required>
        <br>
        <label for="check_out_date">Tanggal Check Out:</label>
        <input type="date" name="tanggal_checkout" value="<?php echo $check_out_date; ?>" required>
        <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>