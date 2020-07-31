<?php

class Animal{
    public $name;
    public $legs;
    public $cold_blooded = false;

    public function __construct($name){
        $this->name = $name;
    }

    public function set_legs($legs){
        $this->legs = $legs;
    }

    public function get_legs(){
        return $this->legs;
    }

    public function set_cold_blooded($cold_blooded){
        $this->cold_blooded = $cold_blooded;
    }

    public function get_cold_blooded(){
        return $this->cold_blooded;
    }
}

?>