<?php
fscanf(STDIN,"%d %d",$N,$P);
$line = fgets(STDIN);
$array = explode(" ",$line);
$count = 0;
for ($i = 0;$i < count($array);$i++){
    if($array[$i] < $P){
        $count++;
    }
}
echo $count;
?>