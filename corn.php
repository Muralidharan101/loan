<?php
    include('datab.php');

    //Function 1 - Generate Daily collection

    $sql = mysqli_query($conn, "SELECT * FROM loan_data ld WHERE status = 'Active'");

    while($result = mysqli_fetch_assoc($sql))
    {

        if($result['next_due_date'] == $date)
        {
            $loan_id = $result['id'];
            $emp_id = $result['emp_id'];
            $payable_amount = $result['per_day_charge'];
            $loan_end_date = $result['loan_end_date'];
            
            mysqli_query($conn, "INSERT INTO `collection_data`(`loan_id`, `emp_id`, `paid_amount`, `payment_date`, `status`, `dateTime`) VALUES ('$loan_id','$emp_id','$payable_amount','$date','Unpaid','$dateTime'");
        }

        $nxt_due_date = $result['next_due_date'];
        $loan_end = $result['loan_end_date'];
        $loan_type = $result['loan_type'];
        $loan_id = $result['id'];
        
        if($loan_type == '1')
        {
            // +1 day
            $new_due_date = date('Y-m-d', strtotime($nxt_due_date . '+1 days'));
            if($new_due_date == $loan_end || $new_due_date < $loan_end)
            {
                mysqli_query($conn, "UPDATE loan_data SET `next_due_date`='$new_due_date', `updatedTime`='$dateTime' WHERE id = '$loan_id'");
            }
        }
        else
        {
            // +1 month
            $new_due_date = date('Y-m-d', strtotime($nxt_due_date . '+1 months'));
            if($new_due_date == $loan_end || $new_due_date < $loan_end)
            {
                mysqli_query($conn, "UPDATE loan_data SET `next_due_date`='$new_due_date', `updatedTime`='$dateTime' WHERE id = '$loan_id'");
            }
        }

        
    }

    // Function 2 - Check Over due And add fee 

    $query = mysqli_query($conn, "SELECT *, cld.id as cld_id, cld.paid_amount as payable_amt FROM collection_data cld, loan_data ld WHERE status = 'Unpaid' AND ld.id = cld.loan_id");
    while($unpay = mysqli_fetch_assoc($query))
    {
        $payment_date = $unpay['payment_date'];
        $payable_amt = $unpay['payable_amt']; //102
        $collection_id = $unpay['cld_id'];
        $loan_type = $unpay['loan_type'];
        $sec_percentage = $unpay['2nd_interest_percentage']; //3
        $interest_percentage = $unpay['interest_percentage']; //3
        $loan_amount = $unpay['loan_amount']; //100000
        $duration_days = $unpay['duration_days']; //10


        $grace_date = date('Y-m-d', strtotime($payment_date . '+15 days'));
        
        if($grace_date < $date)
        {
            if($loan_type == '1')
            {
                // Half % - Unsecured Loan

                $half_percentage = $interest_percentage / 2; // 2 / 2 = 1

                $per_day_amt = $loan_amount / $duration_days; // 100000 / 180 = 555.55

                $percent_loan_amt = $loan_amount * ($half_percentage/100); //1000

                $per_day_interest = $percent_loan_amt / 30; // 33
                
                $over_due_amt = $payable_amt + $per_day_interest; //655 + 33

                mysqli_query($conn, "UPDATE collection_data SET `paid_amount`='$over_due_amt', `overdue`='1', `updatedTime`='$dateTime' WHERE = '$collection_id'");
            }
            else
            {
                //2nd % - Secured Loan

                $per_day_amt = $loan_amount / $duration_days; // 500000 / 5 = 100000

                $percent_loan_amt = $loan_amount * ($sec_percentage/100); // 50000 % 5 = 25000
                
                $over_due_amt = $per_day_amt + $percent_loan_amt; // 125000

                mysqli_query($conn, "UPDATE collection_data SET `paid_amount`='$over_due_amt', `overdue`='1', `updatedTime`='$dateTime' WHERE = '$collection_id'");

            }
        }

    }


?>