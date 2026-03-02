<?php
require 'vendor/autoload.php';

$faker = Faker\Factory::create();

for($i = 1; $i <= 5; $i++) {

    echo "Ime: " . $faker->name() . "<br>";
    echo "Email: " . $faker->email() . "<br>";
    echo "Adresa: " . $faker->address() . "<br>";
    echo "<hr>";

}
?>
