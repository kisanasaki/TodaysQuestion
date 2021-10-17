<?php
fscanf(STDIN,"%d %d %d",$A,$B,$C);
$X = floor($B/$C);
$Y = $X * $C;

if($Y >= $A){
    echo $Y;
}else if($Y <$A){
    echo "-1";
}


?>
