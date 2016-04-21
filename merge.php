<?php
 
 function merge(&$array, $p, $q, $r)
 { 
     $lengthL = $q - $p + 1;
     $lengthR = $r - $q;    
     $arrayL = [];
     $arrayR = [];
     
     for($i = $p; $i <= $q; $i++)
     {
         $arrayL[] = $array[$i];
     }
     for($i = $q + 1; $i <= $r; $i++)
     {
         $arrayR[] = $array[$i];
     }
     
     $i = 0;
     $j = 0;
     
     
     for($k = $p; $k <= $r; $k++)
     {
         if($i >= $lengthL && $j < $lengthR)
         {
             $array[$k] = $arrayR[$j++];
         }
         else if ($j >= $lengthR && $i < $lengthL)
         {
             $array[$k] = $arrayL[$i++];
         }
         else if ($arrayL[$i] <= $arrayR[$j])
         {
             $array[$k] = $arrayL[$i++];
         }
         else {
             $array[$k] = $arrayR[$j++];
         }
     } 
 }
 
$array = [1, 3, 7, 4, 6];
merge($array, 0, 2, 4); 
var_export($array);