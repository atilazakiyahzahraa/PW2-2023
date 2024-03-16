<?php 
    require_once 'class_balok.php';
    
    $balok1 = new Balok(29,16,7);
    $balok2 = new Balok(21,12,2);
    $balok3 = new Balok(32,15,5);
    $balok4 = new Balok(37,17,7);

    echo '<br>Luas Balok 1 = ' . $balok1->getLuas() . ' cm^2';
    echo '<br>Keliling Balok 1 = '. $balok1->getKeliling() . ' cm^2';
    echo '<br>Volume Balok 1 = '. $balok1->getVolume() . ' cm^3';
    echo '<br><br>';

    echo '<br>Luas Balok 2 = ' . $balok2->getLuas() . ' cm^2';
    echo '<br>Keliling Balok 2 = '. $balok2->getKeliling() . ' cm^2';
    echo '<br>Volume Balok 2 = '. $balok2->getVolume() . ' cm^3';
    echo '<br><br>';

    echo '<br>Luas Balok 3 = ' . $balok3->getLuas() . ' cm^2';
    echo '<br>Keliling Balok 3 = '. $balok3->getKeliling() . ' cm^2';
    echo '<br>Volume Balok 3 = '. $balok3->getVolume() . ' cm^3';
    echo '<br><br>';
    
    echo '<br>Luas Balok 4 = ' . $balok4->getLuas() . ' cm^2';
    echo '<br>Keliling Balok 4 = '. $balok4->getKeliling() . ' cm^2';
    echo '<br>Volume Balok 4 = '. $balok4->getVolume() . ' cm^3';

    
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */

		// code..
?>