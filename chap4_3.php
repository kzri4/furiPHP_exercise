<?php

require_once __DIR__ . "/chap4_pet.php";
$owners = [
 //配列０//
    ["name" => "斎藤", "animal" => ["猫", "猫", "猫"]],
                                 //  0     1     2   //
  //配列1//   
    ["name" => "鈴木", "animal" => ["柴犬"]],
 //配列2//
    ["name" => "藤井", "animal" => ["猫", "チワワ", "うさぎ"]],
];                                //  0     1         2   //
foreach ($owners as $owner) {
    displayMsg($owner);
}
?>