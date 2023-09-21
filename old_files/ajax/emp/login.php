<?php

    include('../../datab.php');

 $username = mysqli_real_escape_string($conn, $_POST["username"]);
 $password = mysqli_real_escape_string($conn, $_POST["password"]);

 $enc = md5($password.'Loan');

 $sql = mysqli_query($conn, "SELECT * FROM emp_data WHERE emp_username = '$username' AND emp_password = '$enc'");
 
if($row = mysqli_fetch_assoc($sql)){
    if($row['status'] != 'Active'){
        $res['status'] = "In-Active";
        $res['remarks'] = "Account is deactivated!";
    }
    else{
        $res['status'] = 'Success'; 
        $res['remarks'] = "Account loggedin!";

        session_start();
        $_SESSION['emp_id'] = $row['id'];
        $_SESSION['emp_name'] = $row['emp_name'];
    }
 
 }
 else
 {
     $res['status'] = 'Failed';
     $res['remarks'] = "Wrong email and password, user account not found!";

 }

echo json_encode($res);

?>
