<?php 
    include ('../../datab.php');

    $send_otp_mobile = mysqli_real_escape_string($conn, $_POST['send_otp_mobile']);

    $res = array();
    $username="mudhra";
    $Password="Mudhra@1234$$";
    $rand = rand(100000,999999);
    $sender='MUFINA';
    $priority='ndnd';
    $stype='normal';

    $message=urlencode("Dear customer,\nWelcome to Mudra Finance family.Your OTP is ".$rand." please do not share it with anyone.");

    $var="user=".$username."&pass=".$Password."&sender=".$sender."&phone=".$send_otp_mobile."&text=".$message."&priority=".$priority."&stype=".$stype."";

    $curl=curl_init('http://sms.cryptographicsolutions.in/api/sendmsg.php?'.$var);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    $response=curl_exec($curl);
    curl_close($curl);

    $res['sms_report']  = $response;
    $res['status'] = 'Success';
    $res['otp'] = $rand;

    echo json_encode($res);
?>