<?php
declare(strict_types = 1);

function somar(int $x, int $y): int{
    $result = $x + $y;
    return $result;
}

echo somar(1,2);