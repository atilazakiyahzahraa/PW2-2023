<?php

    require_once 'class_takjil.php';

    $makanan1 = new Makanan("Pisang Aroma", "Manis", 2000, "Coklat");
    $makanan2 = new Makanan("Lumpia", "Gurih", 15000, "Smoke Beef");
    $minuman1 = new Minuman("Thaitea", "Manis", 15000, "Boba" );
    $minuman2 = new Minuman("Lemon Squash", "Manis dan Segar", 10000, "Jelly");

    echo 'Rekomendasi Makanan Untuk Berbuka Puasa <br>';
    $makanan1->getInfoMakanan();
    echo '<br>';
    $makanan2->getInfoMakanan();
    echo '<br><br>';

    echo 'Rekomendasi Minuman Untuk Berbuka Puasa <br>';
    $minuman1->getInfoMinuman();
    echo '<br>';
    $minuman2->getInfoMinuman();
    echo '<br><br>';

?>