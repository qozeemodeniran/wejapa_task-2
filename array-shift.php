<?php
/*
This program is aimed at sorting an array(in ascending order).accordion
and recording the number of shift until sorting was achieved.
*/
// function insertionSort(){
//     $sum = 0; //to hold array shift sum
//     $arr = array(4, 6, 2, 22, 11);
//     for()
//     sort($arr);
//     print_r($arr);
// }
// insertionSort();

function insertionSort($arr, $n){
    $n0 = $n;
    for($i = $n - 1; $i >= 0; $i--){
        if($arr[$i] == $n0){
            $n0--;
        }
    }
    return $n0;
}

$arr = array(4, 6, 2, 22, 11);
$n = count($arr);
echo insertionSort($arr, $n);

?>