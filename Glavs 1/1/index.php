<?php

function amount($n)
{
    $result = 0;
    $num = str_split($n);
    $c = count($num);
    for ($i = 0; $i < $c; $i++) {
        if ($num[$i] < 5 && $num[$i] != 0) {
            $result++;
        }
    }
    echo 'Количество цифр, меньших 5: ' . $result;
}

amount(123456700);
