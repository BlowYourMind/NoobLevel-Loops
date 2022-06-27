<?php
$number  =(int) readline("Enter number: ");


for($i = 0;$i<$number;$i++){
    for($j=0;$j<$number;$j++){
        if($i%2!==0){
            echo " " . "#";
        }
        else{
            echo "# ";
        }
    }
    echo PHP_EOL;
}