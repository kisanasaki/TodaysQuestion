<?php 
$input = fgets(STDIN);
$figure_length = strlen((int)$input);
if((int)$input >= 0 || (int)$input <= 9999){
    if($figure_length == 1){
        $input = "000".$input;
        echo $input; 
    }else if($figure_length == 2){
        $input = "00".$input;
        echo $input; 
    }else if($figure_length == 3){
        $input = "0".$input;
        echo $input; 
    }else if($figure_length == 4){
        echo $input; 
    }
}