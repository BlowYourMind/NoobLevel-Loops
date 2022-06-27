<?php
$coefficient = 1;

$number  =(int) readline("Enter number: ");

for ($i = 0; $i < $number; $i++) {
    for ($j = 0; $j <= $number - $i; $j++) {
        echo " ";
    }
   for($j =0 ; $j <= $i; $j++){
       if($j == 0 || $i == 0){
           $Coefficient = 1;
       }
       else{
           $coefficient = $coefficient * ($i-$j + 1)/$j;
       }
       echo $coefficient. " ";
   }
    echo PHP_EOL;
}