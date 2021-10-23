<?php
$K = fgets(STDIN);
fscanf(STDIN,"%d %d",$A,$B);

$BaseK = new BaseK;

$AA = $BaseK->trans($A,$K);
$BB = $BaseK->trans($B,$K);
$ANS = $BaseK->multiplication($AA,$BB);

//echo $BB;

class BaseK {
    public static function trans($x,$y){
        $arr = str_split($x);
        $n = count($arr);
        //echo $n;
        for($i = 0;$i<$n;$i++){
            $array = array_pop($arr);
            echo $array;
            $ans =+(int)$array*pow($y,$i);
        }
        return $ans;
    }

    public static function multiplication($x,$y){
        $ans = $x * $y;
        return $ans;
    }
}
?>