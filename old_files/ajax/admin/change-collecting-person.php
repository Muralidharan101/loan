<?php
    include('../../datab.php');
    $loan_id = mysqli_escape_string($conn, $_POST['loan_id']);
    $emp_id = mysqli_escape_string($conn, $_POST['emp_id']);

    mysqli_query($conn, "UPDATE `loan_data` SET `updateTime`='$dateTime',`emp_id`='$emp_id' WHERE id = '$loan_id'");

    $res['status'] = 'Success';
    $res['remarks'] = 'EMp Changed Success';
echo json_encode($res);
?>