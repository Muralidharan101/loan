<?php

    include('../../datab.php');

 $username = mysqli_real_escape_string($conn, $_POST["username"]);
 $password = mysqli_real_escape_string($conn, $_POST["password"]);

if($username == 'sagarmali7304' && $password == '@SAGAR730'){

        $res['status'] = 'Success'; 
        $res['remarks'] = "Account loggedin!";

        session_start();
        $_SESSION['admin_id'] = '78789';
        $_SESSION['admin_name'] = 'Mudra';
 }
 else
 {
     $res['status'] = 'Failed';
     $res['remarks'] = "Wrong email and password, user account not found!";

 }

echo json_encode($res);

?>
