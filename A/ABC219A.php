<?php
$input = fgets(STDIN);
if((int)$input >= 0 && (int)$input <=100 ){

    if((int)$input < 40){
        //echo '初級';
        $X = 40 - (int)$input;
        echo $X;
    }else if((int)$input < 70){
        //echo '中級';
        $X = 70 - (int)$input;
        echo $X;
    }else if((int)$input < 90){
        //echo '上級';
        $X = 90 - (int)$input;
        echo $X;
    }else{
        echo 'expert';
    }
}

?>