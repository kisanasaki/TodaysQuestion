<?php
$N = fgets(STDIN);
$S = fgets(STDIN);
$arr1 = str_split($S);
$str = str_replace('ABC', '', $S);
$arr2 = str_split($str);

if(!(count($arr1) == count($arr2))){
    $count = count($arr1) - count($arr2);
    $res = $count /3;
    echo $res;
}else {
    echo '0';
}
?>