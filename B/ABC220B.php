<?php
$K = fgets(STDIN);
fscanf(STDIN,"%d %d",$A,$B);
$BaseK = new BaseK;
$AA = $BaseK->trans($A,$K);
$BB = $BaseK->trans($B,$K);
$ANS = $BaseK->multiplication($AA,$BB);
echo $ANS;
class BaseK {
    public static function trans($x,$y){
        $arr = str_split($x);
        $n = count($arr);
        $answer = 0;
        for($i = 0;$i<$n;$i++){
            $array[] = array_pop($arr);
            $ans =(int)$array[$i]*pow($y,$i);
            $answer = $answer +(int)$ans;
        }
        return $answer;
    }
    public static function multiplication($x,$y){
        $ans = $x * $y;
        return $ans;
    }
}
?>