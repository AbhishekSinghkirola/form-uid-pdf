<?php
require_once('db-config.php');

if (isset($_POST['submit'])) {
    extract($_POST);
    $full_name = get_safe_value($con, $full_name);
    echo "{$_POST['full_name']} &nbsp; -- &nbsp; $city";
}
