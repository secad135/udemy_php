<?php

class Item {
    public $name ;
    public $description;

    function __construct($name = 'default name', $description = 'default description') {
        $this->name = $name;
        $this->description = $description;
    }
    
}