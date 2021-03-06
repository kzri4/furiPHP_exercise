<?php

$hp = 10000;
$attack_methods = [1 => "剣", 2 => "魔法", 3 => "打撃"];

while ($hp > 0) {
    echo "攻撃技は？\n";

    foreach ($attack_methods as $select => $method) {
        echo $select . "." . $method . " ";
    }

    echo "\n";
    $input_number = trim(fgets(STDIN));

    switch ($input_number) {
        case 1:
        case 2:
        case 3:
            $atack_point = rand(500,3000);
            echo "攻撃力 " . $atack_point . " の攻撃!\n";
            if ($atack_point >= 2000) {
                echo "クリティカルヒット!!\n";
            }
            if ($hp - $atack_point < 0) {
                $hp = 0;
            } else {
                $hp = $hp - $atack_point;
            }
            echo "HP: " . $hp . "\n";
            break;
        default:
            echo "攻撃に失敗\n";
            break;
    }
}

if ($hp <= 0) {
    echo "敵を倒した!\n";
}