<?php

    class Takjil {
        protected $nama;
        protected $rasa;
        protected $harga;

        protected function __construct($nama, $rasa, $harga){
            $this->nama = $nama;
            $this->rasa = $rasa;
            $this->harga = $harga;
        }
    
        protected function getInfo(){
          echo "Nama Takjil : " . $this->nama . "<br>";
          echo "Rasanya : " . $this->rasa . "<br>";
          echo "Harga : " . $this->harga . "<br>";
        }
    }
    
    class Makanan extends Takjil{
        public $varian;

        public function __construct($nama, $rasa, $harga, $varian){
            parent::__construct($nama, $rasa, $harga, $varian);
            $this->varian = $varian;
        }

        public function getInfoMakanan(){
            parent::getInfo();
            echo "Varian Favorit : " . $this->varian . "<br>";
        } 
    }

    class Minuman extends Takjil{
        public $toping;

        public function __construct($nama, $rasa, $harga, $toping){
            parent::__construct($nama, $rasa, $harga, $toping);
            $this->toping = $toping;
        }

        public function getInfoMinuman(){
            parent::getInfo();
            echo "Toping Favorit : " . $this->toping . "<br>";
        }
    }
?>




