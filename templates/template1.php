<?php
$loader = new Twig_Loader_Filesystem('./templates/template1.php');
$twig = new Twig_Environment($loader,array(
"cache" => false
));
echo $twig ->render('index.php',array("name" => "GyoGyo"))
?>