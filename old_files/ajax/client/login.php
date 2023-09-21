<?php

    include('../../datab.php');

 $number = mysqli_real_escape_string($conn, $_POST["number"]);
 $password = mysqli_real_escape_string($conn, $_POST["password"]);

 $enc = md5($password.'Loan');

 $sql = mysqli_query($conn, "SELECT * FROM client_data WHERE mobile = '$number' AND password = '$enc'");
 
if($row = mysqli_fetch_assoc($sql)){
    if($row['status'] != 'Active'){
        $res['status'] = "In-Active";
        $res['remarks'] = "Account not deactivated!";
    }
    else{
        $res['status'] = 'Success'; 
        $res['remarks'] = "Account logedin!";

        session_start();
        $_SESSION['client_id'] = $row['id'];
        $_SESSION['client_name'] = $row['name'];
    }
 
 }
 else
 {
     $res['status'] = 'Failed';
     $res['remarks'] = "Wrong email and password, user account not found!";

 }

echo json_encode($res);

?>
