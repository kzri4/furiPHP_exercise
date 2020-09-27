<?php

function displayMsg($top,$bottom,$height,$area,$top1,$bottom2,$height3,$area4){
    $area = calcArea($top, $bottom, $height);
    $area4 = calcArea2($top1, $bottom2, $height3);
    
    $msg=<<<EOM
    台形のサイズ
    上辺:$top
    下辺:$bottom
    高さ:$height
    面積:$area

    台形のサイズ
    上辺:$top1
    下辺:$bottom2
    高さ:$height3
    面積:$area4
EOM;

    echo $msg;
}

function calcArea($top, $bottom, $height)
{
    $area = ($top + $bottom) * $height / 2;
    return $area;
}

function calcArea2($top1, $bottom2, $height3)
{
    $area4 = ($top1 + $bottom2) * $height3 / 2;
    return $area4;
}


?>