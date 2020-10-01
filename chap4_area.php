<?php

function displayMsg($top, $bottom, $height, $area){
    $msg = <<< EOM
\n台形のサイズ
上辺:{$top}
下辺:{$bottom}
高さ:{$height}
面積:{$area} \n
EOM;
    echo $msg;
}

function calcArea($top, $bottom, $height){
    return ($top + $bottom) * $height / 2;
}

?>