<?php

    // $fruits = ["pisang", "stroberi", "jeruk"];
    // print_r($fruits);
    // echo '<br>';
    // var_dump($fruits);
    // echo '<br>';

    // foreach ($fruits as $fruit){
    //     echo $fruit;
    //     echo '<br>';
    // } 

    //   $dinos = [
    //     "dinoName" => "Tricera",
    //     "dinoAge" => "300",
    //     "isMarriage" = "false"
    //   ]

    //   foreach ($dinos as $dino){
    //     echo $dino;
    //     echo '<br>';
    // } 

    $dinos = [
        [
            "dinoName" => "Tricera",
            "dinoAge" => 300
        ],
        [
            "dinoName" => "Rex",
            "dinoAge" => 500
        ],
        [
            "dinoName" => "Ptera",
            "dinoAge" => 250
        ]
    ];
     echo $dinos[0]['dinoName'];
     echo "<br>";
     foreach ($dinos as $dino) {
        echo $dino["dinoName"] ."-" .$dino["dinoAge"] ."tahun";
        echo "<br>";
     }
      
?>