<?php


$number  =(int) readline("Enter number: ");
for($i=0; $i<$number;$i++){
    for($j = 0;$j<$number;$j++) {
       if($j == 0 || $j == $number-1){
           if($i !==0 && $i !== $number-1 ){
               echo "| ";
           }
           else {
               echo "+ ";
           }
       }
       else{
           echo "- ";
       }
    }
    echo PHP_EOL;
}



//0123 - 0
//0123 - 1
//0123 - 2
//0123 - 3
