<?php

// Escalares
// string
$name = 'Wesley Anjos';
var_dump($name);
echo '<br>';

if (is_string($name)) {
    echo 'É uma string!<br>';
} else {
    echo 'Não é uma string<br>';
}

echo '<hr>';

// int
$age = 28;
var_dump($age);
echo '<br>';

if (is_int($age)) {
    echo 'É uma int!<br>';
} else {
    echo 'Não é uma int<br>';
}

echo '<hr>';

// float
$height = 1.77;
var_dump($height);
echo '<br>';
if (is_int($age)) {
    echo 'É uma int!<br>';
} else {
    echo 'Não é uma int<br>';
}
echo '<hr>';

// boolean
$adm = false;
var_dump($adm);
echo '<br>';
if (is_bool($adm)) {
    echo 'É uma boolean!<br>';
} else {
    echo 'Não é uma boolean<br>';
}
echo '<hr>';

// Compostos
// array
$cars = ['Gol', 'Uno', 'Camaro', 12, 20.6, true];
var_dump($cars);

?>