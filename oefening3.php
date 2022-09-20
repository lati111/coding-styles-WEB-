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