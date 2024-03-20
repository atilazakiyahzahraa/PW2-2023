<?php
    class Vehicle {
        protected $type;
        protected $fuel;
       
        protected function __construct($type, $fuel) {
            $this->type = $type;
            $this->fuel = $fuel;
        }

        protected function getInfo(){
            echo "Jenis Kendaraan:" . $this->type . "<br>";
            echo "Jenis Bahan Bakar:" . $this->fuel . "<br>";
        } 
    }

    class Motor extends Vehicle {
        public $wheels;

        public function __construct($type, $fuel, $wheels){
            parent::__construct($type, $fuel, $wheels);
            $this->wheels = $wheels;
        }

        public function getInfoMotor(){
            parent::getInfo();
            echo "Jumlah Roda: " . $this->wheels . "<br>";
        }
    }
    
    class Submarine extends Vehicle {
        public $max_depth;

        public function __construct($type, $fuel, $max_depth){
            parent::__construct($type, $fuel, $max_depth);
            $this->max_depth = $max_depth;
        }

        public function getInfoSubmarine(){
            parent::getInfo();
            echo "Maksimal Kedalaman: " . $this->max_depth . "<br>";
        }
    }
?>