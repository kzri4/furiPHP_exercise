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
    $damage_variable =  rand(100,500);
    return $damage_variable  * $attack_point;
}