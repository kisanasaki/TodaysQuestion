<?php
fscanf(STDIN,"%s %s",$S,$T);
$arr = array($S,$T);
usort($arr, "strcmp");
if($arr[0] == $S){
    echo 'Yes';
}else {
    echo 'No';
}
?>