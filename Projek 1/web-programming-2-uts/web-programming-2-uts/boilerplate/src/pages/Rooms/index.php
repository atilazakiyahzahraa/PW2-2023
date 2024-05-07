<?php
require_once '../../../config/Database.php';
require_once '../../../app/Rooms.php';

$database = new Database();
$db = $database->dbConnection();

$rooms = new Rooms($db);


if(isset($_GET['id'])){
    $rooms->id = $_GET['id'];

    if($rooms->delete()){
        header("Location: index.php");
    }else{
        echo "Gagal menghapus.";
    }
}


$data = $rooms->index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Reservasi</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .action-link {
            margin-right: 5px;
        }
    </style>
</head>
<body> 
    <div class="container mt-5">
        <h1>Daftar Reservasi</h1>
        <a href="create.php">Tambah</a>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Id Hotel</th>
                    <th scope="col">No. Ruangan</th>
                    <th scope="col">Tipe Ruangan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Ketersediaan</th>
                    <th scope="col">Aksi</th>
      
                </tr>
            </thead>
                <?php 
                $no = 1;
                foreach($data as $row) { ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['hotel_id']; ?></td>
                        <td><?php echo $row['room_number']; ?></td>
                        <td><?php echo $row['room_type']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['availability']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="index.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger action-link" onclick="return confirm('Apakah Anda yakin ingin menghapus ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</body>
</html>