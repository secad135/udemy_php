<?php

class car {

    public $model;
    public $color;
    public function __construct($model, $color) {
        $this->model = $model;
        $this->color = $color;
    }
}

$bmw = new car("BMW", "Black");
$benz = new car("Benz", "White");
echo $bmw->model . " " . $bmw->color . "<br>";
echo $benz->model . " " . $benz->color . "<br>";
