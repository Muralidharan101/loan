<?php
    include('../../datab.php');
    $emp_name = mysqli_escape_string($conn, $_POST['emp_name']);
    $emp_co = mysqli_escape_string($conn, $_POST['emp_co']);
    $emp_dob = mysqli_escape_string($conn, $_POST['emp_dob']);
    $emp_mobile = mysqli_escape_string($conn, $_POST['emp_mobile']);
    $emp_alt_mobile = mysqli_escape_string($conn, $_POST['emp_alt_mobile']);
    $emp_address = mysqli_escape_string($conn, $_POST['emp_address']);
    $emp_username = mysqli_escape_string($conn, $_POST['emp_username']);
    $emp_join_date = mysqli_escape_string($conn, $_POST['emp_join_date']);
    $emp_password = mysqli_escape_string($conn, $_POST['emp_password']);

    $enc_pass = md5($emp_password.'Loan');

    $sql = mysqli_query($conn, "SELECT * FROM `emp_data` WHERE emp_username = '$emp_username'");

    if($check_user = mysqli_fetch_assoc($sql))
    {
        $res['status'] = 'Available';
        $res['remarks'] = 'This Mobile no Already Used for Another User!';
    }
    else
    {
        $file_name = $_FILES['emp_photo']['name'];
        $file_ext = $_FILES['emp_photo']['type'];
        $file_size = $_FILES['emp_photo']['size'];
        // echo $file_ext;
        $allowed_extensions = array('image/jpg', 'image/png', 'image/jpeg', 'image/webp');
        
        if (in_array($file_ext, $allowed_extensions)) {

            if($file_size > '1000000')
            {
                $res['status'] = 'Bigfile'; 
                $res['remarks'] = 'FIle SIze is Large!';
            }
            else
            {
                mysqli_query($conn, "INSERT INTO `emp_data`( `emp_name`, `emp_co`, `emp_dob`, `emp_photo`, `emp_mobile`, `emp_alt_mobile`, `emp_address`, `emp_join_date`, `emp_username`, `emp_password`, `status`, `created_by`, `updatedTime`, `dateTime`) VALUES ('$emp_name','$emp_co','$emp_dob','$file_name','$emp_mobile','$emp_alt_mobile','$emp_address','$emp_join_date','$emp_username','$enc_pass','Active','1','$dateTime','$dateTime')");

                $emp_id = mysqli_insert_id($conn);
    
                // if (!file_exists('../../assets/media/profile-images')) {
                //     mkdir('../../assets/media/profile-images', 0777, true);
                // }
                if (!file_exists('../../assets/media/profile-images/employee/'.$emp_id.'/')) {
                    mkdir('../../assets/media/profile-images/employee/'.$emp_id.'/', 0777, true);
                }
                $photo_path = '../../assets/media/profile-images/employee/'.$emp_id.'/';
                
                $newFileName = $photo_path.$file_name;
                
                move_uploaded_file($_FILES["emp_photo"]["tmp_name"], $newFileName);
                
    
                $res['status'] = 'Ok';
                $res['remarks'] = 'New Emp has been Created Successfully!';  
            }
        } 
        else 
        {
            $res['status'] = 'InvalidFile';
            $res['remarks'] = 'FIle FOrmat Not Support!';
        }

    }


    echo json_encode($res);

?>