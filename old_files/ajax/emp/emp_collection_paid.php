<?php
    include('../../datab.php');
    $row_id = mysqli_escape_string($conn, $_POST['row_id']);
    $client_id = mysqli_escape_string($conn, $_POST['client_id']);
    $emp_id = mysqli_escape_string($conn, $_POST['emp_id']);
    $loan_id = mysqli_escape_string($conn, $_POST['loan_id']);
    $paid_amount = mysqli_escape_string($conn, $_POST['paid_amount']);
    $next_due_date = date('Y-m-d', strtotime($date . ' +1 month'));

    $paid_status_update = "UPDATE collection_data SET `status`='Paid' WHERE `id`='$row_id'";
    $paid_amount_query  = "INSERT INTO collection_data (loan_id, emp_id, paid_amount, payment_date, next_due_date, status, dateTime) 
                                                VALUES ($loan_id, $emp_id, $paid_amount, '$date', '$next_due_date','Unpaid', '$dateTime')";
    if(mysqli_query($conn, $paid_status_update))
    {
        $res['status'] = 'Ok';
        $res['remarks'] = 'Amount Paid';
    }

    if(mysqli_query($conn, $paid_amount_query))
    {
        $res['status'] = 'Ok';
        $res['remarks'] = 'Amount Paid';
    }
    // mysqli_query($conn, "UPDATE `collection_data` SET `dateTime`='$dateTime',`emp_id`='$emp_id', `status`='Paid' WHERE id = '$row_id'");

    $sql = mysqli_query($conn, "SELECT * FROM client_data WHERE id = '$client_id'");
    $mai = mysqli_fetch_assoc($sql);

    $client_email = $mai['email'];
    $client_name = $mai['name'];
    $send_otp_mobile = $mai['mobile'];
    $payment_id = $row_id;

    $msg = "Helo ".$client_name."!,<br>Payment ID: ".$payment_id."<br>Payment Date: ".$date."<br> Payable Amount: ".$paid_amount."<br> <br>Payment Successfull.. ";

    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);

    // send email
    mail($client_email,"Payment Receved!",$msg);

    $username="mudhra";
    $Password="Mudhra@1234$$";
    $sender='MUFINA';
    $priority='ndnd';
    $stype='normal';

    $message=urlencode("Valued customer, Our providing agent received your ".$paid_amount."-rupee loan installment.\nFrom Mudra Finance");

    $var="user=".$username."&pass=".$Password."&sender=".$sender."&phone=".$send_otp_mobile."&text=".$message."&priority=".$priority."&stype=".$stype."";

    $curl=curl_init('http://sms.cryptographicsolutions.in/api/sendmsg.php?'.$var);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    $response=curl_exec($curl);
    curl_close($curl);

    echo json_encode($res);
?>