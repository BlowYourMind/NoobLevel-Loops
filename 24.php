<?php
$number  =(int) readline("Enter number: ");
$times = ($number+1)/2;
for($i=0;$i<$number-1;$i++){
    for($j=0;$j<($number*2)-1;$j++){
        if($j == $times || $j == ($number - 1) * 2 - $times){
            echo "#";
        }
       else {
           echo ".";
       }
    }
    echo PHP_EOL;
}
for ($i = 0; $i <= $number - 1; $i++) {

    for ($j = 0; $j < $i; $j++) {
        echo ".";
    }
    for ($k = ($number - $i) * 2 - 1; $k >= 1; $k--) {
        if ($k === 1 || $k === ($number - $i) * 2 - 1 ) {
            echo "#";
        }
        elseif($i=== 0 && ($k === $times || $k=== ($number - $i) * 2 - $times)){
            echo "#";
        }
        else {
            echo ".";
        }

    }
    for ($j = 0; $j < $i; $j++) {
        echo ".";
    }
    echo PHP_EOL;
}