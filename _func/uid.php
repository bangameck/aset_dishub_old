<?php
function uid($jml_kar)
{
    $karakter = '1234567890';
    $string = '';
    for ($i = 0; $i < $jml_kar; $i++) {
        $pos = rand(0, strlen($karakter) - 1);
        $string .= $karakter[$pos];
    }
    return $string;
}
