<?php
$N = fgets(STDIN);
$A = fgets(STDIN);
str_replace( "\xc2\xa0", " ", $A);
$array = explode(" ",$A);
$count =0;
$set = 0;
$flag= true;
while($flag) {
    for($i=0;$i<$N;$i++){
        if((int)$array[$i]%2 == 0){
            $count++;
        }else {
            $flag = false;
            break;
        }
    }
    for($i=0;$i<$N;$i++){
        (int)$array[$i] = (int)$array[$i]/2;  
    }
    $set++;
}

echo $set -1;
?>