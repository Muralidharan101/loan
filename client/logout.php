<?php
require_once '../datab.php';
session_start();
session_destroy();

header('Location: '.$path.'client/Login');
?>