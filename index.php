<?php
require_once './vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');
$faker = Faker\Factory::create("fr_FR");

$twig = new Twig_Environment($loader, array(
    'cache' => false,
));


// $template = $twig->load("index.html");
echo $twig -> render("index.html",array(
    "fakename" => $faker->name,
    "jobTitle" => $faker->jobTitle,
    "company" => $faker->company,
    "catchPhrase" => $faker->catchPhrase,
));

?>