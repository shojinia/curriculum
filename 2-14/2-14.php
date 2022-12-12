<?php
$fruits = ["apple" , "banana" , "orange"];
$eat = implode( "+" , $fruits);
$minus = explode( "+" , $eat);
$number = [15, 21, 48, 36, 7];

echo count($fruits);
echo "<br/>";
sort($fruits);
var_dump($fruits);
echo "<br/>";
sort($number);
var_dump($number);
echo "<br/>";
if (in_array("banana", $fruits)){
    echo "バナナが１つあります";
}else{
    echo "バナナは売り切れです";
}
echo "<br/>";
var_dump($eat);
echo "<br/>";
var_export($minus);

?>