‘<?php

//課題1

function double($number) {
    echo $number*2;
}
echo double(100);



//課題2

function fix($a,$b){
    echo $a + $b ;
}
echo fix(10,20);



//課題3

function maptiple($arr) {
  $result = 1;
  foreach($arr as $valu) {
// $result に　$valu を順番に掛けていく
    $result *= $valu;
   }
   echo $result;
 }

echo maptiple(array(1,3,5,7,9));


 
//課題4

 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 if ($max_number < $a) {
     $max_number = $a;}
 }

 return $max_number;
 }

echo max_array(array(1,2,3,4,5,5,6,7,8));



//課題5 ①strip_tag

$test = '<p>test paragraph</p><!---coment---> <a href=""#>Other text<a/>';
echo strip_tags($test);
echo "\n";

//課題5 ②array_pusha

$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);


//課題5 ③array_maege

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);


//課題5 ④time,mktime

echo time();
echo mktime();



//課題5 ⑤tate

echo date();










?>