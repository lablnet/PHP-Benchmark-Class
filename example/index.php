<?php

require_once '../vendor/autoloader.php';

$bench = new Lablnet\Benchmark();

$bench->start();
$x = 1;
while ($x <= 100) {
    echo "hay i'm $x<br>";
    $x++;
}
$bench->end();
echo "elapse time {$bench->elapsedTime()}";
