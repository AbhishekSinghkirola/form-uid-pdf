<?php
require_once('functions.php');
session_start();

// Site Path Constant
define('SITE_PATH', 'http://localhost/php/Practise/Intern%20Assignment/WorkControl/');

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'work_control_intern';
$con = mysqli_connect($host, $user, $password, $database) or die('Connection Failed!! :(');
