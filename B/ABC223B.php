<?php
$s=trim(fgets(STDIN));
$l=strlen($s);
$s.=$s;
$t=[];
for($i=0;$i<$l;$i++){
  $t[]=substr($s,$i,$l);
}
sort($t);
printf("%s\n%s",$t[0],$t[$l-1]);
//$string = str_split($input);


// sort($string);
// $string1 =implode($string);
// echo $string1."\n";
// $string2= array_reverse($string);
// $string3 =implode($string2);
// echo $string3;
// // foreach ($string2 as $key => $value){
// //     print $key.'=>'.$value.',';
// //   }
// $Shift = new Shift();
// class Shift{
//     //右シフト
//     //aabbなら$rshift=a,$string=abb
//     public function rightshift($string){
//         $rshift = array_shift($string);
//         array_push($string,$rshift);
//         return $string;
   
//     }
//     //左シフト
//     public function leftshift($string){
//         $lshift = array_pop($string);
//         array_unshift($string,$lshift);
//         return $string;
//     }

// }

?>