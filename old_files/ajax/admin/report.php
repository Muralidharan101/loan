<?php
    include('../../datab.php');
    $starting_date = mysqli_escape_string($conn, $_POST['starting_date']);
    $end_date = mysqli_escape_string($conn, $_POST['end_date']);
    $emp = mysqli_escape_string($conn, $_POST['emp']);
    $client = mysqli_escape_string($conn, $_POST['client']);

    $dateQuery = "";
    if($starting_date != "")
    {
        // $date_correct = date('Y-m-d', strtotime($date));
        $dateQuery = "AND cld.payment_date BETWEEN '$starting_date' AND '$end_date'";
    }
    $employeeQuery = '';
    if($emp != "")
    {
        $employeeQuery = "AND ed.id = '$emp'";
    }
    $clientQuery = '';
    if($client != "")
    {
        $clientQuery = "AND cd.id = '$client'";
    }
    $res = [];
    $sql = mysqli_query($conn, "SELECT  cd.id AS loan_client_id, cd.name, cld.payment_date, ed.emp_name, cld.paid_amount 
                                FROM client_data cd, collection_data cld, emp_data ed, loan_data ld
                                WHERE cld.status = 'Paid' AND ed.id = ld.emp_id AND ld.id = cld.loan_id AND ld.client_id = cd.id $employeeQuery $employeeQuery $dateQuery $clientQuery");
                                
                                while($result = mysqli_fetch_assoc($sql))
                                {
                                    $res['data'][] = $result;
                                    $res['status'] = 'Success';
                                    $res['remarks'] = 'Report Data received success!';
                                }
    echo json_encode($res);
?>