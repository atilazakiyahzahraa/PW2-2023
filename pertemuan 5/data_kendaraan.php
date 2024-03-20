<?php
    require_once 'class_kendaraan.php';

    $motor = new Motor('Motor', 'Bensin', 2);
    $submarine = new Submarine('Submarine', 'Solar', 1000);

    echo 'Info Motor:<br>';
    $motor->getInfoMotor();
    echo '<br>';

    echo 'Info Submarine:<br>';
    $submarine->getInfoSubmarine();
    echo '<br>';

?>