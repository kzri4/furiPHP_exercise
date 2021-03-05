<?php

function createMsg($attaker, $enemy, $attack_point) {
    $damage = getDamage($attack_point);
    $msg = <<< EOM
{$attaker}は、
{$enemy}に攻撃した。

クリティカルヒット!!

{$enemy}は、{$damage}のダメージを受けた。

EOM;
    echo $msg . "\n";
}

function getDamage ($attack_point) {
    $select =  rand(100,500);
    return $select * $attack_point;
}