<?php


$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];

function func($arr)
{
    foreach ($arr as $value) {
        if (is_array($value)) {
            func($value);
        } else {
            echo $value . ' ' . '<br>';
        }
    }
}

func($arr);

function funcSum($arr) {
    $sum = 0;

    foreach ($arr as $elem) {
        if (is_array($elem)) {
            $sum += funcSum($elem);
        } else {
            $sum += $elem;
        }
    }

    return $sum;
}

var_dump(funcSum([1, [2, 7, 8], [3, 4, [5, [6, 7]]]]));

