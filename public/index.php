<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$name = 'Wilder';
$persons = [
    ['name' => 'riri', 'age' => 10],
    ['name' => 'fifi', 'age' => 20],
    ['name' => 'loulou', 'age' => 30],
 ];

 

//echo $twig->render('home.html.twig', ['name' => $name]);
//echo $twig->render('hello.html.twig', ['name' => $name]);
echo $twig->render('person.html.twig', ['persons' => $persons]);

