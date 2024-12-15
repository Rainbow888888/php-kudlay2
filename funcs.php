<?php

defined("MYAPP") or die('Вам сюда не полжено');
function dump($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

function dd($data) {
    dump($data);
    die();
}