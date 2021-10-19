<?php
fscanf(STDIN,"%d",$N);
fscanf(STDIN,"%s",$S);
$Ss = str_split($S);
$result = 0;
for ($i=0;$i<=$N-3;$i++){
    if($Ss[$i] == 'A' && $Ss[$i+1] == 'B' && $Ss[$i+2] == 'C'){
        $result++;
    }
}
echo $result;
?>