<?php

function displayMsg($owner) {

    $animal_type = array_unique($owner["animal"]);
    $animal = implode("、",$animal_type);
    $count = count($owner["animal"]);

$msg = <<< EOM

    {$owner["name"]}さんは
    {$animal}を
    {$count}匹買っています。
EOM;

    echo $msg;
}

?>
