<?php
    include('../../datab.php');
    $ex_emp_id = mysqli_escape_string($conn, $_POST['ex_emp_id']);
    $emp_id = mysqli_escape_string($conn, $_POST['emp_id']);

    mysqli_query($conn, "UPDATE `loan_data` SET `updateTime`='$dateTime',`emp_id`='$emp_id' WHERE emp_id = '$ex_emp_id'");

    $res['status'] = 'Success';
    $res['remarks'] = 'Emp Changed Success';
echo json_encode($res);
?>