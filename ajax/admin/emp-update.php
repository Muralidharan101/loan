<?php
    include('../../datab.php');
    $emp_id = mysqli_escape_string($conn, $_POST['emp_id']);

    if(isset($_FILES['photo']))
    {
        
        $file_name = $_FILES['photo']['name'];
        $file_ext = $_FILES['photo']['type'];
        $file_size = $_FILES['photo']['size'];
        $allowed_extensions = array('image/jpg', 'image/png', 'image/jpeg', 'image/webp');
        
        if (in_array($file_ext, $allowed_extensions)) {

            if($file_size > '1000000')
            {
                $res['status'] = 'Bigfile'; 
                $res['remarks'] = 'FIle SIze is Large!';
            }
            else
            {
                mysqli_query($conn, " UPDATE `emp_data` SET `emp_photo`='$file_name', `updatedTime`='$dateTime' WHERE id = '$emp_id'" );

                if (!file_exists('../../assets/media/profile-images/employee/'.$emp_id.'/')) {
                    mkdir('../../assets/media/profile-images/employee/'.$emp_id.'/', 0777, true);
                }
                $photo_path = '../../assets/media/profile-images/employee/'.$emp_id.'/';
                
                $newFileName = $photo_path.$file_name;
                
                move_uploaded_file($_FILES["photo"]["tmp_name"], $newFileName);
                
    
                $res['status'] = 'Ok';
                $res['remarks'] = 'Emp Photo updated!';  
            }
        } 
        else 
        {
            $res['status'] = 'InvalidFile';
            $res['remarks'] = 'FIle FOrmat Not Support!';
        }
    }
    else if(isset($_POST['password']))
    {
        $password = mysqli_escape_string($conn, $_POST['password']);
        $enc_pass = md5($password.'Loan');

        $pass_change = " UPDATE `emp_data` SET `emp_password`='$enc_pass',`updatedTime`='$dateTime' WHERE id = '$emp_id'";

        if(mysqli_query($conn, $pass_change))
        {
            $res['status'] = 'Ok';
            $res['remarks'] = 'Password updated!'; 
        }
        else
        {
            $res['status']  = 'Failed';
            $res['remarks'] = 'Failed to update password';
        }
    }
    else if(isset($_POST['delete']))
    {
        mysqli_query($conn, "UPDATE `emp_data` SET `status`='In-Active',`updatedTime`='$dateTime' WHERE id = '$emp_id'");
        $res['status'] = 'Ok';
        $res['remarks'] = 'Emp Removed!'; 
    }
    else if(isset($_POST['emp_name']))
    {
        $emp_name = mysqli_escape_string($conn, $_POST['emp_name']);
        $emp_co = mysqli_escape_string($conn, $_POST['emp_co']);
        $emp_dob = mysqli_escape_string($conn, $_POST['emp_dob']);
        $emp_mobile = mysqli_escape_string($conn, $_POST['emp_mobile']);
        $emp_alt_mobile = mysqli_escape_string($conn, $_POST['emp_alt_mobile']);
        $emp_address = mysqli_escape_string($conn, $_POST['emp_address']);
        $emp_username = mysqli_escape_string($conn, $_POST['emp_username']);
        $emp_join_date = mysqli_escape_string($conn, $_POST['emp_join_date']);
        
        // $sql = mysqli_query($conn, "SELECT * FROM `emp_data` WHERE emp_username = '$emp_username' AND id != '$emp_id'");
    
        // if($check_user = mysqli_fetch_assoc($sql))
        // {
        //     $res['status'] = 'Available';
        //     $res['remarks'] = 'This Mobile no Already Used for Another User!';
        // }
        // else
        // {
            mysqli_query($conn, "UPDATE `emp_data` SET `emp_name`='$emp_name',`emp_co`='$emp_co',`emp_dob`='$emp_dob',`emp_mobile`='$emp_mobile',`emp_alt_mobile`='$emp_alt_mobile',`emp_address`='$emp_address',`emp_join_date`='$emp_join_date',`emp_username`='$emp_username',`updatedTime`='$dateTime' WHERE id = '$emp_id'");

            $res['status'] = 'Ok';
            $res['remarks'] = 'New Emp has been Created Successfully!';  
              
        // }
    }

    echo json_encode($res);

?>