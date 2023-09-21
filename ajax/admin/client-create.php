<?php
    include('../../datab.php');
    $client_name = mysqli_escape_string($conn, $_POST['client_name']);
    $client_mobile = mysqli_escape_string($conn, $_POST['client_mobile']);
    $client_alt_mobile = mysqli_escape_string($conn, $_POST['client_alt_mobile']);
    $client_address = mysqli_escape_string($conn, $_POST['client_address']);
    $client_map_link = mysqli_escape_string($conn, $_POST['client_map_link']);
    $client_adhaar = mysqli_escape_string($conn, $_POST['client_adhaar']);
    $client_pan = mysqli_escape_string($conn, $_POST['client_pan']);
    $client_loan = mysqli_escape_string($conn, $_POST['client_loan']);
    $client_duration = mysqli_escape_string($conn, $_POST['client_duration']);
    $client_charges_percent = mysqli_escape_string($conn, $_POST['client_charges_percent']);
    $client_interest_percent = mysqli_escape_string($conn, $_POST['client_interest_percent']);
    $charge_amount = mysqli_escape_string($conn, $_POST['charge_amount']);
    $emp_id = mysqli_escape_string($conn, $_POST['collection_person']);
    $interest_amount = mysqli_escape_string($conn, $_POST['interest_amount']);
    $debit_amount = mysqli_escape_string($conn, $_POST['debit_amount']);
    $credit_amount = mysqli_escape_string($conn, $_POST['credit_amount']);
    $per_day_charge = mysqli_escape_string($conn, $_POST['per_day_charge']);
    $client_email = mysqli_escape_string($conn, $_POST['client_email']);
    $client_dob = mysqli_escape_string($conn, $_POST['client_dob']);
    $interest_2nd_amt = mysqli_escape_string($conn, $_POST['interest_2nd_amt']);
    $interest_2nd_percent = mysqli_escape_string($conn, $_POST['interest_2nd_percent']);
    $loan_method = mysqli_escape_string($conn, $_POST['loan_method']);
    
    //Business

    $enterprise = mysqli_escape_string($conn, $_POST['enterprise']);
    $client_business_address = mysqli_escape_string($conn, $_POST['client_business_address']);
    $establishment = mysqli_escape_string($conn, $_POST['establishment']);
    $premises = mysqli_escape_string($conn, $_POST['premises']);
    $business_type = mysqli_escape_string($conn, $_POST['business_type']);
    $turnover_yr = mysqli_escape_string($conn, $_POST['turnover_yr']);
    $turnover_mo = mysqli_escape_string($conn, $_POST['turnover_mo']);
    $client_gst = mysqli_escape_string($conn, $_POST['client_gst']);
    $client_msme = mysqli_escape_string($conn, $_POST['client_msme']);
    $client_gumasta = mysqli_escape_string($conn, $_POST['client_gumasta']);
    $client_indus_segment = mysqli_escape_string($conn, $_POST['client_indus_segment']);
    $nature_business = mysqli_escape_string($conn, $_POST['nature_business']);

    //Nominee

    $nominee_name = mysqli_escape_string($conn, $_POST['nominee_name']);
    $nominee_address = mysqli_escape_string($conn, $_POST['nominee_address']);
    $nominee_adhaar = mysqli_escape_string($conn, $_POST['nominee_adhaar']);
    $nominee_pan = mysqli_escape_string($conn, $_POST['nominee_pan']);
    $nominee_mobile = mysqli_escape_string($conn, $_POST['nominee_mobile']);
    $nominee_email = mysqli_escape_string($conn, $_POST['nominee_email']);

    // Employee

    // $created_by = mysqli_real_escape_string($conn, $_POST['']);


    $otp_number1 = rand(100000,999999);
    $otp_number2 = rand(100000,999999);

    $enc_pass = md5($client_pan.'Loan');

    $sql = mysqli_query($conn, "SELECT * FROM `client_data` WHERE aadhaar_no = '$client_adhaar'");

        if($check_user = mysqli_fetch_assoc($sql))
        {
            $res['status'] = 'Available';
            $res['remarks'] = 'This Mobile no Already Used for Another User!';
            $res['clientotp'] = $otp_number1;
            $res['nomineeotp'] = $otp_number2;

        }
        else
        {
            $client_photo_name = $_FILES['client_photo']['name'];
            $client_photo_type = $_FILES['client_photo']['type'];
            $client_photo_size = $_FILES['client_photo']['size'];

            $nominee_photo_name = $_FILES['nominee_photo']['name'];
            $nominee_photo_type = $_FILES['nominee_photo']['type'];
            $nominee_photo_size = $_FILES['nominee_photo']['size'];
            // echo $file_ext;
            $allowed_extensions = array('image/jpg', 'image/png', 'image/jpeg', 'image/webp');
            
            if(in_array($client_photo_type, $allowed_extensions))
            {

                if($client_photo_size > '1000000')
                {
                    $res['status'] = 'ClientBigfile'; 
                    $res['remarks'] = 'FIle SIze is Large!';
                }
                else
                {
                    if (in_array($nominee_photo_type, $allowed_extensions)) {

                        if($nominee_photo_size > '1000000')
                        {
                            $res['status'] = 'NomineeBigfile'; 
                            $res['remarks'] = 'FIle SIze is Large!';
                        }
                        else
                        {
                            //Nominee Insert
                            mysqli_query($conn, "INSERT INTO `nominee_data`(`nominee_name`, `nominee_address`, `nominee_aadhaar`, `nominee_pan`, `nominee_mobile`, `nominee_mail`, `nominee_photo`, `status`, `updateTime`, `dateTime`) 
                                                        VALUES ('$nominee_name','$nominee_address','$nominee_adhaar','$nominee_pan','$nominee_mobile','$nominee_email','$nominee_photo_name','Active','$dateTime','$dateTime')");

                            $nominee_id = mysqli_insert_id($conn);

                            //Client Insert
                            mysqli_query($conn, "INSERT INTO `client_data`(`name`, `mobile`, `dob`, `alt_mobile`, `address`, `map_location_link`, `aadhaar_no`, `pan_no`, `status`, `created_by`, `updateTime`, `dateTime`, `client_otp`, `nominee_otp`, `password`, `nominee_id`, `photo`, `email`) 
                                                                VALUES ('$client_name','$client_mobile', '$client_dob','$client_alt_mobile','$client_address','$client_map_link','$client_adhaar','$client_pan','Active','$emp_id','$dateTime','$dateTime', '$otp_number1', '$otp_number2', '$enc_pass', '$nominee_id', '$client_photo_name','$client_email')");

                            $client_id = mysqli_insert_id($conn);

                            mysqli_query($conn, "INSERT INTO `client_business_data`(`client_id`, `enterprise_name`, `business_address`, `establishment_date`, `business_premises`, `type_of_business`, `turnover_year`, `turnover_month`, `gst_no`, `msme_certificate`, `gumasta_license`, `industry_segment`, `nature_of_business`, `status`, `dateTime`) VALUES ('$client_id','$enterprise','$client_business_address','$establishment','$premises','$business_type','$turnover_yr','$turnover_mo','$client_gst','$client_msme','$client_gumasta','$client_indus_segment','$nature_business','Active','$dateTime')");

                            
                            if($loan_method == '1')
                            {
                                //days
                                $next_due_date = date('Y-m-d', strtotime('+1 day'));
                                $loan_end_date = date('Y-m-d', strtotime('+'.$client_duration.' days'));
                            }
                            else
                            {
                                //month
                                $next_due_date = date('Y-m-d', strtotime('+1 month'));
                                $loan_end_date = date('Y-m-d', strtotime('+'.$client_duration.' month'));

                            }
                            $due_amount = $credit_amount - $per_day_charge;

                            //Loan Insert
                            mysqli_query($conn, "INSERT INTO `loan_data`(`client_id`, `loan_amount`, `document_charge_percentage`, `document_charge_amount`, `duration_days`, `interest_percentage`, `interest_amount`, `per_day_charge`, `debit_amount`, `credit_amount`, `status`, `created_by`, `updateTime`, `dateTime`, `loan_type`, `2nd_interest_percentage`, `2nd_interest_amount`, `loan_date`, `next_due_date`, `loan_end_date`, `paid_amount`, `due_amount`, `emp_id`) VALUES ('$client_id','$client_loan','$client_charges_percent','$charge_amount','$client_duration','$client_interest_percent','$interest_amount','$per_day_charge','$debit_amount','$credit_amount','Active','$emp_id','$dateTime','$dateTime','$loan_method','$interest_2nd_percent','$interest_2nd_amt', '$date', '$next_due_date', '$loan_end_date', '$per_day_charge', '$due_amount', '$emp_id')");
            
                            $loan_id = mysqli_insert_id($conn);

                            //Collection amount Insert
                            $next_due_date = date('Y-m-d', strtotime($date . '1+ month'));

                            mysqli_query($conn, "INSERT INTO `collection_data`(`loan_id`, `emp_id`, `paid_amount`, `status`, `dateTime`, `payment_date`, `next_due_date`) VALUES ('$loan_id','$emp_id','$per_day_charge','Unpaid','$dateTime', '$date', '$next_due_date')");

                            //Client Photo Path set
                            if (!file_exists('../../assets/media/profile-images/client/'.$client_id.'/')) {
                                mkdir('../../assets/media/profile-images/client/'.$client_id.'/', 0777, true);
                            }
                            $client_photo_path = '../../assets/media/profile-images/client/'.$client_id.'/';
                            
                            $clientFileName = $client_photo_path.$client_photo_name;

                            if(move_uploaded_file($_FILES["client_photo"]["tmp_name"], $clientFileName))
                            {
                                $res['photosttaus'] = 'ClientPhoto';
                                $res['remarks'] = 'Uploaded Client Photo!';
                            }

                            //Nominee Photo Path set
                            if (!file_exists('../../assets/media/profile-images/nominee/'.$nominee_id.'/')) {
                                mkdir('../../assets/media/profile-images/nominee/'.$nominee_id.'/', 0777, true);
                            }
                            $nominee_photo_path = '../../assets/media/profile-images/nominee/'.$nominee_id.'/';
                            
                            $nomineeFileName = $nominee_photo_path.$nominee_photo_name;

                            if(move_uploaded_file($_FILES["nominee_photo"]["tmp_name"], $nomineeFileName))
                            {
                                $res['photosttaus'] = 'NomineePhoto';
                                $res['remarks'] = 'Uploaded nominee Photo!';
                            }

                            $msg = "Welcome ".$client_name."!,<br>Client ID: ".$client_id."<br>Loan ID: ".$loan_id."<br> Next Due Date: ".$next_due_date."<br> Payable Amount: ".$per_day_charge."<br> <br>Loan Account Created Successfully.";

                            $msg = wordwrap($msg,70);
                            mail($client_email,"Welcome to Mudra Finance!",$msg);                        
            
                            $res['status'] = 'Success';
                            $res['remarks'] = 'New Emp has been Created Successfully!';
                            $res['clientotp'] = $otp_number1;
                            $res['nomineeotp'] = $otp_number2;
                            $res['client_id'] = $client_id;
                        }
                    }
                    else
                    {
                        //nomini photo type error
                    }
                }
            }
            else
            {
                        //client photo type error
            }
            
        } 


    echo json_encode($res);   
?>