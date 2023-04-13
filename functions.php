<?php

function pr($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function prx($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    die();
}

function get_safe_value($con, $value)
{
    mysqli_real_escape_string($con, trim($value));
}
