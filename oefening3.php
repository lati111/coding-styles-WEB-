<?php
//oefening 3a
$x = 0;
if ($x === 0) {
    echo '$x is 0';
}
// Resultaat na uitvoer:
//$x is 0

//oefening 3b
$x = 0;
$y = 5;
if ($x === $y) {
    echo '$x en $y zijn gelijk';
}
// Resultaat na uitvoer:


//oefening 3c
$x = 0;
$y = 5;
if ($x !== 0 && $x === $y) {
    echo '$x en $y zijn gelijk, en $x is niet 0';
}
// Resultaat na uitvoer:


//oefening 3d
$x = 5;
$y = 0;
if ($x > $y) {
    echo '$x is groter dan $y';
} elseif ($x === 0) {
    echo '$x is 0';
} else {
    echo '$x en $y zijn kleiner dan 0';
}
// Resultaat na uitvoer:
//$x is groter dan $y

//oefening 3e
$x = 0;
$y = 5;
if ($x !== 0) {
    echo '$x is niet 0';
}
// Resultaat na uitvoer:


//oefening 3f
for ($x = 0; $x < 5; $x++) {
    echo $x . "<br>";
}
// Resultaat na uitvoer:
// 0
// 1
// 2
// 3
// 4


//oefening 3g
for ($x = 5; $x >= 0; $x--) {
    echo $x . "<br>";
}
// Resultaat na uitvoer:
// 5
// 4
// 3
// 2
// 1
// 0

//oefening 3h
for ($x = 9; $x > 0; $x = $x - 2) {
    echo $x . "<br>";
}
// Resultaat na uitvoer:
// 1 
// 3
// 5
// 7
// 9

//oefening 3i
for ($x = 100; $x >= 0; $x = $x - 50) {
    echo $x . "<br>";
}
// Resultaat na uitvoer:
// 100
// 50
// 0


//oefening 3j
$arr = [100, 200, 300, 400, 500];
for ($x = 0; $x < count($arr); $x++) {
    echo $arr[$x] . "<br>";
}
// Resultaat na uitvoer:
// 100 
// 200 
// 300 
// 400 
// 500


//oefening 3k
$arr = ["Jan" => 122, "Pedro" => 455, "Anna" => 987, "Vic" => 2212];
foreach ($arr as $key => $value) {
    echo "$key heeft $value euro" . "<br>";
}
// Resultaat na uitvoer:
// Jan heeft 122euro
// Pedroheeft455euro
// Anna heeft 987 euro
// Vic heeft 2212euro


//oefening 3l
$mysqli = new mysqli('localhost', 'root', 'root', 'shop');
$sql = 'SELECT product FROM shoppingcart';
$mysqli_result = $mysqli->query($sql);
while ($row = mysqli_fetch_array($mysqli_result)) {
    echo $row['product'] . "<br>";
}
// Resultaat na uitvoer:
// Fiets
// Bureau
// Laptop
// Pen