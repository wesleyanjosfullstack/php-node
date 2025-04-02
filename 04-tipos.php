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

?>