<?php
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
array_pop($planets);
array_pop($planets);
array_pop($planets);

function arrayRand ($array, $num) {
    $arrayFilter = array_filter($array);
    $arrayRand = array_rand($arrayFilter, $num);
    $finalArray = array_map(function ($e) use ($arrayFilter) {
        return $arrayFilter[$e];
    }, $arrayRand);
    return $finalArray;
}

print_r(arrayRand($planets, 4));
echo "<br>";
print_r(arrayRand($planets, 2));
echo "<br>";
print_r(arrayRand($planets, 5));
echo "<br>";
print_r(arrayRand($planets, 3));