<?php

$number  =(int) readline("Enter number: ");
$word = readline("What should we print on it?");
$length = strlen($word);
for ($i = $number / 2; $i < $number; $i += 2) {
    for ($j = 1; $j < $number - $i; $j += 2) {
        echo " ";
    }
    for ($j = 1; $j < $i + 1; $j++) {
        echo "*";
    }
    for ($j = 1; $j <=$number - $i + 1; $j++) {
        echo " ";
    }
    for ($j = 1; $j <$i+1; $j++) {
        echo "*";
    }
    echo PHP_EOL;
}
for ($i = $number; $i > 0; $i--) {
    for ($j = 0; $j < $number - $i; $j++) {
        echo " ";
    }
    for ($j = 1; $j < ($i+1) * 2; $j++) {
        if($i == $number && $j== $number-(($length-1)/2)){
            echo $word;
        }else{
            echo "*";
        }
    }
    echo PHP_EOL;
}