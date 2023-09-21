<?php 

include('../datab.php');
$client_id = '1';
session_start();

if(isset($_SESSION['client_id']))
{
    $client_id = $_SESSION['client_id'];
    
}
else
{
    header('Location: '.$path.'client/Login');
}
?>
<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Loan Management</title>
    <meta charset="utf-8" />
    <meta name="description" content="Loan Management CRM Created by Arun @ Cryptographicsolutions KK Nagar Trichy
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
    <link href="<?php echo $path; ?>assets/css/toastr.min.css" rel="stylesheet" type="text/css" />
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
                                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                                    <!--begin::Title-->
                                    <h1
                                        class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                        Client Dashboard
                                    </h1>
                                    <!--end::Title-->



                                </div>
                                <!--end::Page title-->
                                <!-- <button class="btn btn-sm btn-primary">test</button> -->
                            </div>
                            <!--end::Toolbar container-->
                        </div>
                        <!--end::Toolbar-->

                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content  flex-column-fluid ">


                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container  container-xxl ">
                                <div class="s p-4">
                                <!-- i.	Name 
                                    ii.	C/O 
                                    iii.	DOB 
                                    iv.	mobile 
                                    v.	Alt mobile
                                    vi.	Photo
                                    vii.	Address
                                    viii.	Joining Date
                                    ix.	Username
                                    x.	password. -->
                                    <?php 
                                    $sql = mysqli_query($conn, "SELECT *, SUM(cld.paid_amount) as total_paid FROM loan_data ld, collection_data cld WHERE ld.client_id = '$client_id' AND ld.status = 'Active' AND ld.id = cld.loan_id AND cld.status = 'Paid'");
                                        $lon = mysqli_fetch_assoc($sql);

                                        $loan_amount = $lon['credit_amount'];
                                        $paid_amount = $lon['total_paid'];
                                        $pending_amount = $loan_amount - $paid_amount;
                                        $temp_loan_amt = 1;
                                        if($loan_amount != 0)
                                        {
                                            $temp_loan_amt = $loan_amount;
                                        }

                                        $paid_amt_percentage = ($paid_amount/$temp_loan_amt)*100;
                                        if($paid_amt_percentage < 40)
                                        {
                                            $process_bar_color = 'bg-danger';
                                        }
                                        else if($paid_amt_percentage > 80 )
                                        {
                                            $process_bar_color = 'bg-success';

                                        }
                                        else
                                        {
                                            $process_bar_color = '';
                                        }

                                    ?>
                                    <div class="">
                                        <div class="col-lg-12 col-12">
                                            <div class="card">
                                                <div class="heading p-4">
                                                    <h4>Payment Progress</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="progress h-20px">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated <?php echo $process_bar_color;?>" role="progressbar" aria-valuenow="70"
                                                        aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $paid_amt_percentage;?>%">
                                                        <span class=""><?php echo $paid_amt_percentage;?>%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mt-3">
                                                <div class="heading p-4">
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
                                            <!-- <div class="card mt-3">
                                                <div class="p-5">
                                                    <h3>Loan Details</h3>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table table-borderless table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Loan Amount</th>
                                                                <th>Loan with Interest</th>
                                                                <th>Paid Amount</th>
                                                                <th>Balance Amount</th>
                                                                <th>Days</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1000</td>
                                                                <td>1200</td>
                                                                <td>200</td>
                                                                <td>1000</td>
                                                                <td>17</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div> -->
                                        </div>
                                        
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
    <script src="<?php echo $path; ?>assets/js/toastr.min.js"></script>
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
            $('#create_emp').click(function(){
                var emp_name = $('#emp_name').val().trim();
                var emp_co = $('#emp_co').val().trim();
                var emp_dob = $('#emp_dob').val();
                var emp_photo = $('#emp_photo')[0].files[0];
                var emp_mobile = $('#emp_mobile').val().trim();
                var emp_alt_mobile = $('#emp_alt_mobile').val().trim();
                var emp_address = $('#emp_address').val().trim();
                var emp_join_date = $('#emp_join_date').val();
                var emp_username = $('#emp_username').val().trim();
                var emp_password = $('#emp_password').val().trim();

                if(emp_name == "")
                {
                    toastr.warning('Please Fill Name!', 'Empty Feild!');
                }
                else if(emp_dob == "")
                {
                    toastr.warning('Please Choose DOB!', 'Empty Feild!');
                }
                else if(emp_photo == null)
                {
                    toastr.warning('Please Select Photo!', 'Empty Feild!');
                }
                else if(emp_mobile == "")
                {
                    toastr.warning('Please Fill Mobile!', 'Empty Feild!');
                }
                else if(emp_address == "")
                {
                    toastr.warning('Please Fill Address!', 'Empty Feild!');
                }
                else if(emp_join_date == "")
                {
                    toastr.warning('Please Choose Join Date!', 'Empty Feild!');
                }
                else if(emp_username == "")
                {
                    toastr.warning('Please Fill Username!', 'Empty Feild!');
                }
                else if(emp_password == "")
                {
                    toastr.warning('Please Fill Password!', 'Empty Feild!');
                }
                else
                {
                    var fd = new FormData();

                    fd.append('emp_name', emp_name); 
                    fd.append('emp_co', emp_co); 
                    fd.append('emp_dob', emp_dob); 
                    fd.append('emp_photo', emp_photo); 
                    fd.append('emp_mobile', emp_mobile); 
                    fd.append('emp_alt_mobile', emp_alt_mobile);
                    fd.append('emp_address', emp_address);
                    fd.append('emp_join_date', emp_join_date);
                    fd.append('emp_username', emp_username);
                    fd.append('emp_password', emp_password);

                    $.ajax({
                        url:'<?php echo $path;?>ajax/admin/emp-create.php',
                        processData: false,
                        contentType: false,
                        data: fd,
                        type: 'post',
                        success: function(response){
                           console.log(response);
                           var data = JSON.parse(response);
                           if(data.status == "Ok")
                           {
                            toastr.success('New Emp Created Successfully!', 'Success!');
                            $("#emp_name").val("");
                            $("#emp_co").val("");
                            $("#email").val("");
                            $("#emp_dob").val("");
                            $("#emp_photo").val(null);
                            $("#emp_mobile").val("");
                            $("#emp_alt_mobile").val("");
                            $("#emp_address").val("");
                            $("#emp_join_date").val("");
                            $("#emp_username").val("");
                            $("#emp_password").val("");
                           }
                           else if(data.status == 'Available')
                           {
                                toastr.error('This Mobile no. Already Used for Another Emp!!', 'Change Mobile Number!');
                           }
                           else if(data.status == 'Bigfile')
                           {
                                toastr.error('File Size is Large, Upload <1MB!', 'File Size Big!');
                           }
                           else if(data.status == 'InvalidFile')
                           {
                                toastr.error('Only Accept JPG,PNG,JPEG,WEBP!!', 'Invalid File Format!');
                           }
                           else
                           {
                            toastr.error('Somthing Error!', 'Error!');
                           }
                        }

                    })

                }
            });
        });
    </script>

</body>
<!--end::Body-->


</html>