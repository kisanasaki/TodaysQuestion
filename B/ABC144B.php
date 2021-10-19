<?php
$input = fgets(STDIN);
$array = array();
$flag = false;
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
       $array[$i][$j] =  $i*$j;
       if($input == $array[$i][$j]){
        $flag = true;
           break;
       }
    }
}
if($flag){
    echo 'Yes';
}else {
    echo 'No';
}
?>