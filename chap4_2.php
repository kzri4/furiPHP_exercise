<?php

var_dump("お名前は");
$name = trim(fgets(STDIN));

var_dump("1つ目の金額を入力");
$item1 = trim(fgets(STDIN));

var_dump("2つ目の金額を入力");
$item2 = trim(fgets(STDIN));

var_dump("3つ目の金額を入力");
$item3 = trim(fgets(STDIN));


function add($item1,$item2,$item3){
    return $item1+$item2+$item3;
}

$sum = $item1+$item2+$item3;

add($item1,$item2,$item3);


function totalTax($sum){
    return floor($sum*1.1);
    
}

$price = floor($sum*1.1);

totalTax($sum);


require_once('chap4_price.php');

displayMsg($name,$sum,$price);

?>