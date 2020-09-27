<?php

function displayMsg($name,$sum,$price){

    $msg=<<<EOM

    {$name} 様
    ご注文承りました。
    合計{$sum} 円です。
    {$price} 円（税込）になります。
EOM;

echo $msg;
}

?>





