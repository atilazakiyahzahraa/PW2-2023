<?php
    $fruits = [
        [
        "ID" => 1,
        "fruitName" => "Pisang",
        "fruitColor" => "Kuning",
        "fruitStok" => "20",
        "fruitPrice" => "15000",
        "fruitDescription" => "Manis dan Lezat",
        ],
        [
        "ID" => 2,
        "fruitName" => "Mangga",
        "fruitColor" => "Oranye",
        "fruitStok" => "35",
        "fruitPrice" => "20000",
        "fruitDescription" => "Manis dan segar",
        ],
        [
        "ID" => 3,
        "fruitName" => "Semangka",
        "fruitColor" => "Merah",
        "fruitStok" => "10",
        "fruitPrice" => "12000",
        "fruitDescription" => "Manis dan segar",
        ],
        [
        "ID" => 4,
        "fruitName" => "Anggur",
        "fruitColor" => "Ungu",
        "fruitStok" => "10",
        "fruitPrice" => "25000",
        "fruitDescription" => "Manis",
        ],
        [
        "ID" => 5,
        "fruitName" => "Stroberi",
        "fruitColor" => "Merah",
        "fruitStok" => "25",
        "fruitPrice" => "27000",
        "fruitDescription" => "Manis dan segar",
        ]
        ]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
        foreach ($fruits as $fruit){
        ?>
        
        <tr>
            <td><?=$fruit["ID"]?></td>
            <td><?=$fruit["fruitName"]?></td>
            <td><?=$fruit["fruitColor"]?></td>
            <td><?=$fruit["fruitStok"]?></td>
            <td><?=$fruit["fruitPrice"]?></td>
            <td><?=$fruit["fruitDescription"]?></td>



        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>