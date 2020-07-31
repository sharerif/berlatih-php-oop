<?php

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

require "Animal.php";
require "Frog.php";
require "Ape.php";


$sheep = new Animal("shaun");
$sheep->set_legs(2);
$sheep->set_cold_blooded(false);
echo "Name : " .$sheep->name. "<br>"; // "shaun"
echo "Legs : " .$sheep->get_legs(). "<br>"; // 2
echo "Cold Blooded : " .$sheep->get_cold_blooded(). "<br><br>"; // false

$sungokong = new Ape("kera sakti");
$sungokong->set_legs(2);
$sungokong->set_cold_blooded(false);
echo "Name : " .$sungokong->name. "<br>";
echo "Legs : " .$sungokong->get_legs(). "<br>";
$sungokong->yell(); // "Auooo"
echo "<br>Cold Blooded : " .$sungokong->get_cold_blooded(). "<br><br>";

$kodok = new Frog("buduk");
$kodok->set_legs(4);
$kodok->set_cold_blooded(true);
echo "Name : " .$kodok->name. "<br>";
echo "Legs : " .$kodok->get_legs(). "<br>";
$kodok->jump() ; // "hop hop"
echo "<br>Cold Blooded : " .$kodok->get_cold_blooded(). "<br><br>";

?>