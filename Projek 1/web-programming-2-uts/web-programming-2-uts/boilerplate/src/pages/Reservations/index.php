<?php
require_once '../../../config/Database.php';
require_once '../../../app/Reservations.php';

$database = new Database();
$db = $database->dbConnection();

$reservations = new Reservations($db);


if(isset($_GET['id'])){
    $reservations->id = $_GET['id'];

    if($reservations->delete()){
        header("Location: index.php");
    }else{
        echo "Gagal menghapus.";
    }
}


$data = $reservations->index();
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
        <a href="create.php" class="btn btn-primary mb-3">Tambah</a>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                 <tr>
                     <th scope="col">Id</th>
                     <th scope="col">Id Tamu</th>
                     <th scope="col">Id Ruangan</th>
                     <th scope="col">Tanggal Check In</th>
                     <th scope="col">Tanggal Check Out</th>
                     <th scope="col">Aksi</th>
                 </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                foreach($data as $row) { ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['guest_id']; ?></td>
                        <td><?php echo $row['room_id']; ?></td>
                        <td><?php echo $row['check_in_date']; ?></td>
                        <td><?php echo $row['check_out_date']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning action-link">Edit</a>
                            <a href="index.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger action-link"onclick="return confirm('Apakah Anda yakin ingin menghapus ini?')">Hapus</a>
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
</html>