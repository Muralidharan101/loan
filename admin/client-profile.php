<?php 
    include('../datab.php');

    session_start();

    if(isset($_SESSION['admin_id']))
    {
        $admin_id = $_SESSION['admin_id'];
        
    }
    else
    {
        header('Location: '.$path.'admin/Login');
    }


    if(isset($_GET['client_id']))
    {
        $client_id = $_GET['client_id'];
        
    }
    else
    {
        header('Location: '.$path.'admin/Index');
    }
?>
<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Loan Management</title>
    <meta charset="utf-8" />
    <meta name="description" content="Loan Management CRM Created by <?php echo $res['name'];?> @ Cryptographicsolutions KK Nagar Trichy
        " />
    <meta name="keywords" content="Loan Management, CRM, Custom Software, Cryptographicsolutions
        " />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="
            Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, 
            Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template
        " />
    <meta property="og:url" content="https://Cryptographicsolutions.in/" />
    <meta property="og:site_name" content="Loan Management Cryptographicsolutions" />
    <!-- <link rel="canonical" href="https://preview.keenthemes.com/metronic8" /> -->
    <link rel="shortcut icon" href="<?php echo $path; ?>assets/media/logos/favicon.ico" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="<?php echo $path; ?>assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet"
        type="text/css" />
    <!--end::Vendor Stylesheets-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="<?php echo $path; ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $path; ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <!--Begin::Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '<?php echo $path; ?><?php echo $path; ?><?php echo $path; ?><?php echo $path; ?>www.googletagmanager.com/gtm5445.html?id=' +
                i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
    </script>
    <!--End::Google Tag Manager -->

    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->
<style>
    .photo_dp img
    {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50px;
        
    }
    @media print {
   .example-screen {
       display: none;
    }
    .example-print {
       display: block;
    }
}
</style>
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!--End::Google Tag Manager (noscript) -->


    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">


            <?php include('header.php');?>
            <!--begin::Wrapper-->
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
                <?php include('side-bar.php');?>

                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">

                        <!--begin::Toolbar-->
                        <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

                            <!--begin::Toolbar container-->
                            <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">



                                <!--begin::Page title-->
                                <div class="row col-12">
                                    <div class="col-6">
                                        <!--begin::Title-->
                                        <h1
                                        class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                        Client Profile
                                    </h1>
                                    <!--end::Title-->
                                    </div>
                                   <div class="col-6">
                                    <div class="right-bar col-12 text-end">
                                            <button type="button" class="btn btn-sm btn-primary" onclick="window.print();">Print</button>
                                            <button class="btn btn-sm btn-success" id="payment-history">Payment History</button>
                                            <button class="btn btn-sm btn-danger" id="change-person">Change Agent</button>
                                        </div>
                                   </div>
                                </div>
                                <!--end::Page title-->
                                <!-- <button class="btn btn-sm btn-primary">test</button> -->
                            </div>
                            <!--end::Toolbar container-->
                        </div>
                        <!--end::Toolbar-->
                                    <?php
                                       
                                       $sql = mysqli_query($conn, "SELECT *, cd.id as client_id, nd.id as nominee_id, ed.id as empp_id, ld.id as loann_id FROM client_data cd, collection_data cld, nominee_data nd, client_business_data cbd, loan_data ld, emp_data ed WHERE cd.nominee_id = nd.id AND cbd.client_id = cd.id AND cld.loan_id = ld.id AND ld.client_id = cd.id AND cd.id = '$client_id' AND ed.id = ld.emp_id");

                                       $res = mysqli_fetch_assoc($sql);
                                   ?>

        <div class="modal fade show" id="collectingPerson" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="collectingPersonLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="collectingPersonLabel">Change Collecting Person For This Client/Loan</h5>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <label for="">From</label>
                            <input type="text" name="" value="<?php echo $res['emp_name'];?>" class="form-control" disabled>
                            <input type="text" name="" value="<?php echo $res['loann_id'];?>" class="form-control" hidden id="loan_id">
                        </div>
                        <div class="col-lg-6 col-12">
                            <label for="">To</label>
                            <select name="" id="emp_id" class="form-select">
                                <option value="">-- Choose an Employee --</option>
                                <?php
                                    $query = mysqli_query($conn, "SELECT * FROM emp_data WHERE status = 'Active'");
                                    while($emp = mysqli_fetch_assoc($query))
                                    {
                                ?>
                                <option value="<?php echo $emp['id'];?>"><?php echo $emp['emp_name'];?></option>
                                <?php };?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer m-auto">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Resend</button> -->
                    <button type="button" class="btn btn-primary client-otp" id="change_person">Change</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>

                </div>
                </div>
            </div>
        </div>

        <!--<style type="text/css" media="print">-->
        <!--    body * {-->
        <!--        visibility: hidden;-->
        <!--    }-->
        <!--    #printable-modal, #printable-modal * {-->
        <!--        visibility: visible;-->
        <!--    }-->
        <!--</style>-->

        <div class="modal fade show" id="paymentHistory_mdal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="paymentHistory_mdalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" >
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentHistory_mdalLabel">Payment History</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="printable-modal">
                    <div class="col-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Payment Date</th>
                                    <th>Payable Amount</th>
                                    <th>Collecting Person</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $tb = mysqli_query($conn, "SELECT *, cld.paid_amount as cpaid, cld.status as cstatus FROM collection_data cld, emp_data ed,loan_data ld WHERE ld.id = cld.loan_id AND cld.emp_id = ed.id AND ld.client_id = '$client_id' AND ld.status = 'Active'");

                                    while($tab = mysqli_fetch_assoc($tb)){
                                ?>

                                <tr>
                                    <td><?php echo $tab['payment_date'];?></td>
                                    <td>₹<?php echo $tab['cpaid'];?>.00</td>
                                    <td><?php echo $tab['emp_name'];?></td>
                                    <td>
                                        <?php 
                                            if($tab['cstatus'] == 'Paid')
                                            {
                                                echo '<span class="badge text-white bg-success">Paid</span>';
                                            }
                                            else
                                            {
                                                echo '<span class="badge text-white bg-danger">Unpaid</span>';

                                            }
                                        ?>
                                    </td>
                                    
                                </tr>
                                <?php };?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer m-auto">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Resend</button> -->
                    <button type="button" class="btn btn-primary client-otp" onclick="printModal();">Print</button>
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button> -->

                </div>
                </div>
            </div>
        </div>


                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content  flex-column-fluid ">


                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container  container-xxl ">
                                <div class="card mb-4">
                                        <div class="heading p-3">
                                            <h4>Client Details</h4>
                                        </div>
                                    <div class="row pt-4">
                                        
                                       
                                        <div class="col-lg-4 col-12 text-center photo_dp">
                                            <a href="<?php echo $path.'assets/media/profile-images/client/'.$res['client_id'].'/'.$res['photo'];?>" target="_blank">
                                                <img src="<?php echo $path.'assets/media/profile-images/client/'.$res['client_id'].'/'.$res['photo'];?>" alt="Client Photo">
                                            </a>
                                            <div class="loan-details">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <th>Loan Amount</th>
                                                            <td>:</td>
                                                            <td><?php echo $res['loan_amount'];?>.00</td>
                                                        </tr>
                                                        <!-- <tr>
                                                            <th>Paid Amount</th>
                                                            <td>:</td>
                                                            <td>101</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Pending Amount</th>
                                                            <td>:</td>
                                                            <td>809</td>
                                                        </tr> -->
                                                        <tr>
                                                            <th>Collecting Person</th>
                                                            <td>:</td>
                                                            <td><?php echo $res['emp_name'];?></td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                                <!-- <div class="change-person">
                                                    <button class="btn btn-primary btn-sm">Change Person</button>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-12 p-3 table-responsive">
                                            
                                                <table class="table table-bordered p-4">
                                                    <tbody>
                                                        <tr>
                                                            <th>Name</th>
                                                            <td>:</td>
                                                            <td><?php echo $res['name'];?></td>

                                                            <th>Date of birth</th>
                                                            <td>:</td>
                                                            <td><?php echo $res['dob'];?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Mobile </th>
                                                            <td>:</td>
                                                            <td><?php echo $res['mobile'];?></td>

                                                            <th>Alt. Mobile</th>
                                                            <td>:</td>
                                                            <td><?php echo $res['alt_mobile'];?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Email</th>
                                                            <td>:</td>
                                                            <td>Email</td>

                                                            <th>Map Location Link</th>
                                                            <td>:</td>
                                                            <td><?php echo $res['name'];?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Aadhaar No</th>
                                                            <td>:</td>
                                                            <td><?php echo $res['aadhaar_no'];?></td>

                                                            <th>Pan No</th>
                                                            <td>:</td>
                                                            <td><?php echo $res['pan_no'];?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Residential address</th>
                                                            <td>:</td>
                                                            <td colspan="4"><?php echo $res['address'];?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="heading p-3">
                                            <h4>Business Details</h4>
                                        </div>
                                    <div class="row pt-4">
                                        
                                        <div class="col-lg-12 col-12 p-3 table-responsive">
                                            
                                                <table class="table table-bordered p-4">
                                                    <tbody>
                                                        <tr>
                                                            <th>Company Name</th>
                                                            <td>:</td>
                                                            <td><?php echo $res['enterprise_name'];?></td>

                                                            <th>Business Premises</th>
                                                            <td>:</td>
                                                            <td><?php echo $res['business_premises'];?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Type of Business</th>
                                                            <td>:</td>
                                                            <td><?php echo $res['type_of_business'];?></td>

                                                            <th>Date of Establishment</th>
                                                            <td>:</td>
                                                            <td><?php echo $res['establishment_date'];?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Business turnover</th>
                                                            <td>:</td>
                                                            <td><?php echo 'Year - '.$res['turnover_year'].', Month - '.$res['turnover_month'];?></td>

                                                            <th>Nature of business</th>
                                                            <td>:</td>
                                                            <td><?php echo $res['nature_of_business'];?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>GST no</th>
                                                            <td>:</td>
                                                            <td><?php echo $res['gst_no'];?></td>

                                                            <th>MSME certificate</th>
                                                            <td>:</td>
                                                            <td><?php echo $res['msme_certificate'];?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Gumasta license</th>
                                                            <td>:</td>
                                                            <td><?php echo $res['gumasta_license'];?></td>

                                                            <th>Industry segment</th>
                                                            <td>:</td>
                                                            <td><?php echo $res['industry_segment'];?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Business Address</th>
                                                            <td>:</td>
                                                            <td colspan="4"><?php echo $res['business_address'];?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                        <div class="heading p-3">
                                            <h4>Nominee Details</h4>
                                        </div>
                                    <div class="row pt-4">
                                        <div class="col-lg-4 col-12 photo_dp text-center">
                                        <a href="<?php echo $path.'assets/media/profile-images/nominee/'.$res['nominee_id'].'/'.$res['nominee_photo'];?>" target="_blank">
                                                <img src="<?php echo $path.'assets/media/profile-images/nominee/'.$res['nominee_id'].'/'.$res['nominee_photo'];?>" alt="Nominee Photo">
                                            </a>
                                        </div>
                                        <div class="col-lg-8 col-12 p-3 table-responsive">
                                            
                                                <table class="table table-bordered p-4">
                                                    <tbody>
                                                        <tr>
                                                            <th>Nominee Name</th>
                                                            <td>:</td>
                                                            <td><?php echo $res['nominee_name'];?></td>

                                                            <th>Nominee Mobile no</th>
                                                            <td>:</td>
                                                            <td><?php echo $res['nominee_mobile'];?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nominee Email</th>
                                                            <td>:</td>
                                                            <td><?php echo $res['nominee_mail'];?></td>

                                                            <th>Nominee Aadhaar no</th>
                                                            <td>:</td>
                                                            <td><?php echo $res['nominee_aadhaar'];?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nominee Pan no</th>
                                                            <td>:</td>
                                                            <td><?php echo $res['nominee_pan'];?></td>

                                                            <th>Nominee Address</th>
                                                            <td>:</td>
                                                            <td><?php echo $res['nominee_address'];?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                <div class="heading p-3">
                                            <h4>Loan Details</h4>
                                        </div>
                                                <?php
                                                    $sql = mysqli_query($conn, "SELECT * FROM loan_data ld WHERE status = 'Active' AND client_id = '$client_id'");

                                                    $loan = mysqli_fetch_assoc($sql);
                                                ?>
                                                <div class="card-body">
                                                    <table class="table table-striped">
                                                        <tbody>
                                                            <tr>
                                                                <th>
                                                                    Loan ID
                                                                </th>
                                                                <td>:</td>
                                                                <td>
                                                                    #MuFi<?php echo $loan['id'];?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Loan Type
                                                                </th>
                                                                <td>:</td>
                                                                <td>
                                                                    <?php
                                                                        if($loan['loan_type'] == '1')
                                                                        {
                                                                            echo 'Unsecured Loan';
                                                                        }
                                                                        else{
                                                                            echo 'Secured Loan';
                                                                        }
                                                                    ?>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <th>
                                                                    Loan Amount
                                                                </th>
                                                                <td>:</td><td>
                                                                ₹<?php echo $loan['loan_amount'];?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Loan Date
                                                                </th>
                                                                <td>:</td><td>
                                                                    <?php echo date('d-m-Y', strtotime($loan['loan_date']));?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Document Charge
                                                                </th>
                                                                <td>:</td><td>
                                                                ₹<?php echo $loan['document_charge_amount'];?> (<?php echo $loan['document_charge_percentage'];?>%)
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Loan Duration
                                                                </th>
                                                                <td>:</td><td>
                                                                    <?php echo $loan['duration_days'];?> <?php
                                                                        if($loan['loan_type'] == '1')
                                                                        {
                                                                            echo 'Days';
                                                                        }
                                                                        else{
                                                                            echo 'Months';
                                                                        }
                                                                    ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Interest
                                                                </th>
                                                                <td>:</td><td>
                                                                ₹<?php echo $loan['interest_amount'];?> (<?php echo $loan['interest_percentage'];?>%)
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    2nd interest
                                                                </th>
                                                                <td>:</td><td>
                                                                    <?php echo $loan['2nd_interest_percentage'];?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Perday Payable Amount
                                                                </th>
                                                                <td>:</td><td>
                                                                ₹<?php echo $loan['per_day_charge'];?>
                                                                </td>
                                                            </tr><tr>
                                                                <th>
                                                                    Total Paid Amount
                                                                </th>
                                                                <td>:</td><td>
                                                                ₹<?php echo $loan['paid_amount'];?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Due Amount
                                                                </th>
                                                                <td>:</td><td>
                                                                ₹<?php echo $loan['due_amount'];?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Next Due Date
                                                                </th>
                                                                <td>:</td><td>
                                                                    <?php echo date('d-m-Y', strtotime($loan['next_due_date']));?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Loan End Date
                                                                </th>
                                                                <td>:</td><td>
                                                                    <?php echo date('d-m-Y', strtotime($loan['loan_end_date']));?>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                            </div>
                            <!--end::Content container-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Content wrapper-->


                    <?php include('../footer.php');?>
                </div>
                <!--end:::Main-->


            </div>
            <!--end::Wrapper-->


        </div>

        
        <!--end::Page-->
    </div>
    <!--end::App-->


    <!--begin::Javascript-->
    <script>
        var hostUrl = "<?php echo $path; ?>assets/index.html";
    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="<?php echo $path; ?>assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?php echo $path; ?>assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="<?php echo $path; ?>assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="<?php echo $path; ?>assets/js/custom/pages/user-profile/general.js"></script>
    <script src="<?php echo $path; ?>assets/js/widgets.bundle.js"></script>
    <script src="<?php echo $path; ?>assets/js/custom/widgets.js"></script>
    <script src="<?php echo $path; ?>assets/js/custom/apps/chat/chat.js"></script>
    <script src="<?php echo $path; ?>assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="<?php echo $path; ?>assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="<?php echo $path; ?>assets/js/custom/utilities/modals/offer-a-deal/type.js"></script>
    <script src="<?php echo $path; ?>assets/js/custom/utilities/modals/offer-a-deal/details.js"></script>
    <script src="<?php echo $path; ?>assets/js/custom/utilities/modals/offer-a-deal/finance.js"></script>
    <script src="<?php echo $path; ?>assets/js/custom/utilities/modals/offer-a-deal/complete.js"></script>
    <script src="<?php echo $path; ?>assets/js/custom/utilities/modals/offer-a-deal/main.js"></script>
    <script src="<?php echo $path; ?>assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
<script>
    $(document).ready(function(){
        $("#loan_table").dataTable();
            $("#payment-history").click(function(){
                $('#paymentHistory_mdal').modal('show');

            });
            $("#change-person").click(function(){
                $('#collectingPerson').modal('show');

            });
            $('body').on('click', '#change_person', function(){
                var loan_id = $("#loan_id").val();
                var emp_id = $("#emp_id").val();
                var ex_emp_id = '<?php echo $res['empp_id'];?>';

                if(emp_id == ex_emp_id)
                {
                    toastr.warning('Employee is same, Change To another Employee!', 'Same Employee!');
                    $("#emp_id").focus();
                }
                else
                {
                    var fd = new FormData();

                    fd.append('loan_id', loan_id); 
                    fd.append('emp_id', emp_id);

                    $.ajax({
                        url:'<?php echo $path;?>ajax/admin/change-collecting-person.php',
                        processData: false,
                        contentType: false,
                        data: fd,
                        type: 'post',
                        success: function(response){
                           console.log(response);
                           var data = JSON.parse(response);
                           if(data.status == "Success")
                           {
                                toastr.success('Collecting Person Changed!', 'Success!');
                                location.reload();
                           }
                           else
                           {
                                toastr.error('Error!', 'Error!');
                           }
                        }

                    });
                }
                
            });

            
    });

    function printModal() {
        let printWindow = window.open('', '', 'width=1000,height=1000');

        printWindow.document.write('<html><head><title>Print</title></head><body>');
        printWindow.document.write('<style>');
        printWindow.document.write(`
            /* Define your inline CSS styles here */
            body {
                font-family: Arial, sans-serif;
            }
            table {
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            th {
                background-color: #f2f2f2;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
        `);
        printWindow.document.write('</style>');
        printWindow.document.write('<h2 style="text-align: center;">Transaction History</h2>')
        printWindow.document.write('<div class="modal-body">' + document.getElementById('printable-modal').innerHTML + '</div>');
        printWindow.document.write('</body></html>');
        printWindow.document.close();

        printWindow.print();
    }

</script>
</body>
<!--end::Body-->


</html>