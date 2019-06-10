<?php

$a = 5;
$b = 10;

function zadanie($a, $b){
    if ($a*$b>=0) {
        if ($b>=0) {
            return $a - $b;
        } else {
            return $a * $b;
        }
    } else if ($a*$b<0) {
        return $a + $b;
    }
}

$rez = zadanie($a, $b);
echo "$rez";


function output ($num) {
    switch ($num) {
        case 1:
            echo "1 ";
        case 2:
            echo "2 ";
        case 3:
            echo "3 ";
        case 4:
            echo "4 ";
        case 5:
            echo "5 ";
        case 6:
            echo "6 ";
        case 7:
            echo "7 ";
        case 8:
            echo "8 ";
        case 9:
            echo "9 ";
        case 10:
            echo "10 ";
        case 11:
            echo "11 ";
        case 12:
            echo "12 ";
        case 13:
            echo "13 ";
        case 14:
            echo "14 ";
        case 15:
            echo "15 ";
            break;    
    }
}

echo "<br>";
$rez = output (7);
echo "$rez";

function add ($x, $y){
    return $x + $y;
}

function sub ($x, $y){
    return $x - $y;
}

function mul ($x, $y){
    return $x * $y;
}

function div ($x, $y){
    return $x / $y;
}

function operation ($arg1, $arg2, $oper){
    switch ($oper) {
        case "add":
            return add($arg1, $arg2);
        case "sub":
            return sub($arg1, $arg2);
        case "mul":
            return mul($arg1, $arg2);
        case "div":
            return div($arg1, $arg2);
    }
}

echo "<br>";
$rez = operation (5, 25, "div");
echo "$rez";

echo "<br>";
$year = date("Y");
echo "Текущий год $year";

function power($val, $pow) {
    $rez = 1;
    if ($pow > 0) {
        $rez = $val * power ($val, $pow-1);
    }
    return $rez;
}

echo "<br>";
$rez = power (2, 10);
echo "$rez";