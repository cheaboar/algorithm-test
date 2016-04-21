<?php
require('./merge.php');

function merge_sort(&$array, $p, $r)
{
    if ($p < $r){
        $q = intval(($r + $p)/2);
        merge_sort($array, $p, $q);
        merge_sort($array, $q + 1, $r);
        merge($array, $p, $q, $r);
    }
}

$array = [1, 3, 2, 4,8, 2, 2, 3, 9];
merge_sort($array, 0, count($array) - 1);
var_export($array);