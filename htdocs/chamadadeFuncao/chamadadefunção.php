<?php


$n1 = 20; 
$n2 = 10; 


function Soma($n1, $n2){ 
    $total = $n1 + $n2;
    return $total;      
} 
function Subtracao($n1, $n2){ 
    $total = $n1 - $n2;     
  return $total; 
} 
function Divisao($n1, $n2){ 
    $total = $n1 / $n2;     
    return $total;
} 
function Multiplicacao($n1, $n2){ 
    $total = $n1 * $n2;   
    return $total;  
} 


 echo Divisao($n1,$n2);  

?>