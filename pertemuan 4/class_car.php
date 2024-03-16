<?php

    class Car {
        public $brand;
        public $color;

        function getBrand() {
            return $this->brand;
        }
        function getColor() {
            return $this->color;
        }
        
    }

    $rubicon = new Car();
    $tesla = new Car();


    $rubicon->brand = "Rubicon";
    $rubicon->color = "Silver";
    $tesla->brand = "Tesla";
    $tesla->color = "Black";

    echo $rubicon->getBrand();
    echo $rubicon->getColor();
    echo '<br>';
    echo $tesla->getBrand();
    echo $tesla->getColor();

?>