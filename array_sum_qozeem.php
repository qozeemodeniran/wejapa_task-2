<?php
/*
This program is aimed at calculating the sum
of elements of  an array
*/
//USING LOOPS.........
// $ar = array(2, 2, 2, 2);
// $arlen = count($ar);
// $sum = 0;
// for($i = 0; $i <= $arlen; $i++)
// {
//     $sum = $sum + $i;
// }
// echo $sum;

//USINF FUNCTION
function simpleArraySum($ar)
{
    $sum = 0;
    $ar = array(1, 2, 3, 4, 10, 11);
    $arlen = count($ar);
    for($i = 0; $i <= $arlen; $i++)
    {
        $sum += $i;
    }
    return $sum;   
}
echo simpleArraySum(1, 2, 3, 4, 10, 11);
?>