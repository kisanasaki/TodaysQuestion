<?php
$N = fgets(STDIN);
$S = fgets(STDIN);
// 一文字ずつ分解
$string = str_split($S);
if($string[$N-1] == 'o'){
    echo 'Yes';
}else if($string[$N-1] == 'x'){
    echo 'No';
}

?>