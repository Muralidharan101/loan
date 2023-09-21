<?php
    include('../../datab.php');
    $otp = mysqli_escape_string($conn, $_POST['otp']);
    $type = mysqli_escape_string($conn, $_POST['type']);
    $client_id = mysqli_escape_string($conn, $_POST['client_id']);

    if($type == 'client')
    {
        $sql = mysqli_query($conn, "SELECT id,client_otp FROM client_data WHERE id = '$client_id'");

        $check_otp = mysqli_fetch_assoc($sql);
        if($otp == $check_otp['client_otp'])
        {
            mysqli_query($conn, "UPDATE client_data SET `client_otp`='Verified' WHERE id = '$client_id'");
            $res['status'] = 'ClientSuccess';
            $res['remarks'] = 'OTP Verified';
        }
        else
        {
            $res['status'] = 'Wrong';
            $res['remarks'] = 'Client OTP Wrong';
        }
    
    }
    else if($type == 'nominee')
    {
        $sql = mysqli_query($conn, "SELECT id,nominee_otp FROM client_data WHERE id = '$client_id'");

        $check_otp = mysqli_fetch_assoc($sql);
        if($otp == $check_otp['nominee_otp'])
        {
            mysqli_query($conn, "UPDATE client_data SET `nominee_otp`='Verified', `status`='Active' WHERE id = '$client_id'");
            $res['status'] = 'NomineeSuccess';
            $res['remarks'] = 'OTP Verified';
        }
        else
        {
            $res['status'] = 'Wrong';
            $res['remarks'] = 'Nominnee OTP Wrong';
        }
    }

    echo json_encode($res);
?>