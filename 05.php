<?php
$number  =(int) readline("Enter number: ");
$rowsAndColumn = $number+2;
for($i=1; $i<=$rowsAndColumn;$i++){
    for($j=1;$j<=$rowsAndColumn;$j++){
        if($j == $i || $j == $rowsAndColumn-$i+1){
            echo "*";
        }
        else {
            echo '.';
        }
    }
    echo PHP_EOL;
}
//0123456 - 0
//0123456 - 1
//0123456 - 2
//0123456 - 3
//0123456 - 4
//0123456 - 5
//0123456 - 6
