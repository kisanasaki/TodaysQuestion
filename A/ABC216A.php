<?php
fscanf(STDIN,"%d.%d",$X,$Y);
if((int)$Y >= 0 && (int)$Y <= 2){
    echo $X.'-';
}else if((int)$Y >=3 && (int)$Y <=6){
    echo $X;
}else if((int)$Y >= 7 && (int)$Y <= 9){
    echo $X.'+';
}
?>