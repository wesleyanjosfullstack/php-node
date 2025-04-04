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
    echo 'É um int!<br>';
} else {
    echo 'Não é um int<br>';
}

echo '<hr>';

// float
$height = 1.77;
var_dump($height);
echo '<br>';
if (is_float($age)) {
    echo 'É um float!<br>';
} else {
    echo 'Não é um float<br>';
}
echo '<hr>';

// boolean
$adm = false;
var_dump($adm);
echo '<br>';
if (is_bool($adm)) {
    echo 'É um boolean!<br>';
} else {
    echo 'Não é um boolean<br>';
}
echo '<hr>';

// Compostos
// array
$cars = ['Gol', 'Uno', 'Camaro', 12, 20.6, true];
var_dump($cars);
echo '<hr>';

// object
class Customer 
{
    
    public $name;
    
    public function setName($n) 
    {
        $this->$name = $n;
    }
}

$customer = new Customer();
$customer->setName('Wesley');
var_dump($customer);

if (is_object($adm)) {
    echo 'É um object!<br>';
} else {
    echo 'Não é uma object<br>';
}
echo '<hr>';

// Especiais
// null
$city = null;
var_dump($city);

// resource

?>