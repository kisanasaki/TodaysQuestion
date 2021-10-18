<?php
$input = fgets(STDIN);
if((int)$input < 100){
    echo 'No';
}else if((int)$input == 100){
    echo 'Yes';
}else if((int)$input > 100){
    if((int)$input % 100 == 0){
        echo 'Yes';
    }else {
        echo 'No';
    }
}
