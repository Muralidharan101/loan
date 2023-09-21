<?php
session_start();
session_destroy();

header('Location: '.$path.'emp/Login');
?>