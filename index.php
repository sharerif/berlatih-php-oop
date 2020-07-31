<?php

require "Animal.php";
require "Frog.php";
require "Ape.php";

$sheep = new Animal("shaun");

echo $sheep->name. "<br>"; // "shaun"
echo $sheep->legs. "<br>"; // 2
echo $sheep->cold_blooded. "<br><br>"; // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

// index.php
$sungokong = new Ape("kera sakti");
echo $sungokong->name. "<br>";
$sungokong->yell(); // "Auooo"

echo "<br><br>";

$kodok = new Frog("buduk");
echo $kodok->name. "<br>";
$kodok->jump() ; // "hop hop"

?>