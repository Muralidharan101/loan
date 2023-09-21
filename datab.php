<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "loan";

    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn)
	{
		die("Database connection failed : ".mysqli_connect_error());
	}
    
    if(function_exists('date_default_timezone_set')) 
    {
        date_default_timezone_set("Asia/Kolkata");
    }
    
    $date = date('Y-m-d');
    $dateTime = date('Y-m-d H:i:s');

    $path = '/mudra_final/';


    // session_start();
    $user_login_id = '1'; //admin or user
    $user_id = '1';
    $admin_id = '1';

    // if(isset($_SESSION['user_id']))
    // {
    //     $user_login_id = $_SESSION['user_id'];
    //     $user_type = 'user';
    //     $user_name = $_SESSION['user_name'];
    // }
    // else if(isset($_SESSION['admin_id']))
    // {
    //     $user_login_id = $_SESSION['admin_id'];
    //     $user_type = 'admin';
    //     $user_name = $_SESSION['user_name'];
    // }


?>