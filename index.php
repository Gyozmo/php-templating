<?php
require_once './vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');

$twig = new Twig_Environment($loader, array(
    'cache' => false,
));


$template = $twig->load("index.html");
echo $template -> render(array(
    "the" => "index",
    "is" => "here"
));

?>