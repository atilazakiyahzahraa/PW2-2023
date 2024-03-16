<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
    class Calculator {
        public $bil1;
        public $bil2;

        public function __construct($bilangan1, $bilangan2) {
            $this->bil1 = $bilangan1;
            $this->bil2 = $bilangan2;
        }

        public function getTambah(){
           return $this->bil1 + $this->bil2; 
        }

        public function getKurang(){
            return $this->bil1 - $this->bil2;
        }

        public function getBagi(){
            return $this->bil1 / $this->bil2;
        }

        public function getKali(){
            return $this->bil1 * $this->bil2;
        }

        // Method lainnya
    }

    // Buat object dan tampilkan masing-masing method
    $calculator = new Calculator(10, 5);

    echo '<br> Calculator';
    echo '<br>';
    echo '<br> 10 + 5 = ' . $calculator->getTambah();
    echo '<br> 10 - 5 = ' . $calculator->getKurang();
    echo '<br> 10 : 5 = ' . $calculator->getBagi();
    echo '<br> 10 * 5 = ' . $calculator->getKali();

    
?>