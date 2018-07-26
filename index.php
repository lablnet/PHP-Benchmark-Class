<?php

require_once 'classes/Benchmark.php';

$bench = new Benchmark();

$bench->start();
$x = 1;
while ($x <= 100) {
    echo "hay i'm $x<br>";
    $x++;
}
$bench->end();
echo "elapse time {$bench->elapsedTime()}";
