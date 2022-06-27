
<?php

$number  =(int) readline("Enter number: ");
$type = readline("Select the type: (a/b/c/d)");

switch ($type){
    case "a":
        for($i = 1 ; $i<=$number;$i++){

            for($j=1;$j<=$i;$j++){
                echo $j ." ";

            }
            echo PHP_EOL;
        }
        break;

    case "b":
        for($i =0 ; $i<$number;$i++){
            for ($j = 0; $j < $i*2; $j++) {
                echo " ";
            }
            for($j=1;$j<=$number-$i;$j++){
                echo $j ." ";

            }
            echo PHP_EOL;
        }
        break;

    case "c":
        for($i = 1 ; $i<=$number;$i++){
            for ($j = $number; $j > $i; $j--) {
                echo str_repeat(' ',2);
            }
            for($j=1;$j<=$i;$j++){
                echo $j ." ";

            }
            echo PHP_EOL;
        }
        break;

    case "d":
        for($i = 0 ; $i<$number;$i++){

            for($j=$number-$i;$j>0;$j--){
                echo $j ." ";

            }
            echo PHP_EOL;
        }
        break;

}

