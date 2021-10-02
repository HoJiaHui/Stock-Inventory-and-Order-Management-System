<?php
session_start();
include 'config.php';
define('HOST', $host);
define('USER', $username);
define('PASSWORD', $password);
define('DATABASE', $database);
require 'config/hd_database.php';
require 'config/Users.php';
require 'config/Time.php';
require 'config/Tickets.php';
$database = new Database;
$users = new Users;
$time = new Time;
$tickets = new Tickets;
?>
