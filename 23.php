<?php

$number  =(int) readline("Enter number: ");
for ($i = $number + 1; $i >=0; $i--) {
    for ($j = 0; $j< $i; $j++) {
        echo ".";
    }
    for($k=1;$k<=$number+1;$k++){
        if($k==1 || $k==2){
            echo "/";
            }
        }
    echo PHP_EOL;
}
for ($i = $number +1; $i >=0; $i--){
for ($j = $number - $i; $j >= 0; $j--) {
    echo ".";
}
    for($k=1;$k<=$number+1;$k++){
        if($k==1 || $k==2){
            echo "\\";
        }
        else{
            echo "_";
        }
    }
    echo PHP_EOL;
}


//