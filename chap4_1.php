<?php

require_once('chap4_area.php');

$top = 10;
$bottom = 20;
$height = 30;
$area = calcArea($top, $bottom, $height);

$top1=40;
$bottom2=50;
$height3=60;
$area4=calcArea($top, $bottom, $height);

displayMsg($top,$bottom,$height,$area,$top1,$bottom2,$height3,$area4);