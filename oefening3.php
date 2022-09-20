<?php

$x = 0;
if ($x === 0) {
    echo '$x is 0';
}

$x = 0;
$y = 5;
if ($x === $y) {
    echo '$x en $y zijn gelijk';
}

$x = 0;
$y = 5;
if ($x !== 0 && $x === $y) {
    echo '$x en $y zijn gelijk, en $x is niet 0';
}

$x = 5;
$y = 0;
if ($x > $y) {
    echo '$x is groter dan $y';
} elseif ($x === 0) {
    echo '$x is 0';
} else {
    echo '$x en $y zijn kleiner dan 0';
}

$x = 0;
$y = 5;
if ($x !== 0) {
    echo '$x is niet 0';
}

for ($x = 0; $x < 5; $x++) {
    echo $x . "<br>";
}

for ($x = 5; $x >= 0; $x--) {
    echo $x . "<br>";
}

for ($x = 9; $x > 0; $x = $x - 2) {
    echo $x . "<br>";
}

for ($x = 100; $x >= 0; $x = $x - 50) {
    echo $x . "<br>";
}

$arr = [100, 200, 300, 400, 500];
for ($x = 0; $x < count($arr); $x++) {
    echo $arr[$x] . "<br>";
}

$arr = ["Jan" => 122, "Pedro" => 455, "Anna" => 987, "Vic" => 2212];
foreach ($arr as $key => $value) {
    echo "$key heeft $value euro" . "<br>";
}

$mysqli = new mysqli('localhost', 'root', 'root', 'shop');
$sql = 'SELECT product FROM shoppingcart';
$mysqli_result = $mysqli->query($sql);
while ($row = mysqli_fetch_array($mysqli_result)) {
    echo $row['product'] . "<br>";
}