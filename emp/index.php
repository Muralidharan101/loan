<?php 
    include('../datab.php');
    $emp_id = '1';

session_start();

if(isset($_SESSION['emp_id']))
{
    $emp_id = $_SESSION['emp_id'];
    
}
else
{
    header('Location: '.$path.'emp/Login');
}  
?>
<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>EMP Dashboard Loan Management</title>
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
<style>
    th{
        white-space: nowrap;
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
                                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                                    <!--begin::Title-->
                                    <h1
                                        class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                        Employee Dashboard
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
                                <div class="card p-4">
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
                                    
                                    <div class="">
                                        <div class="col-lg-12 col-12">
                                            
                                            <div class="card mt-3">
                                                <div class="p-5">
                                                    <h3>Today's Clients</h3>
                                                </div>
                                                <div class="card-body table-responsive">
                                                    <table class="table table-borderless table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Client Name</th>
                                                                <th>Address</th>
                                                                <th>Business Address</th>
                                                                <th>Map Link</th>
                                                                <th>Mobile No</th>
                                                                <th>Alt Mobile No</th>
                                                                <th>Payable Amount</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="table_body">
                                                            <?php
                                                                $sql = mysqli_query($conn, "SELECT *, cld.paid_amount as payable_amt, cld.id as cld_id, cd.id as c_id, cld.loan_id AS cld_loan_id 
                                                                                            FROM collection_data cld, client_business_data cbd, client_data cd, loan_data ld
                                                                                            WHERE cld.next_due_date = '$date' AND ld.id = cld.loan_id AND ld.client_id = cd.id AND cld.emp_id = '$emp_id' AND cbd.client_id = cd.id AND cld.status='Unpaid'");

                                                                while($pend = mysqli_fetch_assoc($sql))
                                                                {
                                                            ?>
                                                            <tr data-rowid="<?php echo $pend['cld_id'];?>" data-clientid="<?php echo $pend['c_id'];?>" data-loanid="<?php echo $pend['cld_loan_id'];?>">
                                                                <td><?php echo $pend['name'];?></td>
                                                                <td><?php echo $pend['address'];?></td>
                                                                <td><?php echo $pend['business_address'];?></td>
                                                                <td><a href="<?php echo $pend['map_location_link'];?>">Click Here</a></td>
                                                                <td><?php echo $pend['mobile'];?></td>
                                                                <td><?php echo $pend['alt_mobile'];?></td>
                                                                <td class="pay_amount"><?php echo $pend['payable_amt'];?></td>
                                                                <td><button class="btn btn-success btn-sm paid_btn">Pay</button></td>
                                                            </tr>
                                                            <?php };?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            
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
            $('.paid_btn').click(function(){
                var row_id = $(this).closest('tr').data('rowid');
                var client_id = $(this).closest('tr').data('clientid');
                var loan_id = $(this).closest('tr').data('loanid');
                var paid_amount = $(this).closest('tr').find('.pay_amount').html();
                var emp_id = '<?php echo $emp_id;?>';
                console.log(row_id);
                console.log(loan_id);

               
                    var fd = new FormData();

                    fd.append('row_id', row_id); 
                    fd.append('client_id', client_id); 
                    fd.append('emp_id', emp_id); 
                    fd.append('loan_id', loan_id);
                    fd.append('paid_amount', paid_amount); 

                    $.ajax({
                        url:'<?php echo $path;?>ajax/emp/emp_collection_paid.php',
                        processData: false,
                        contentType: false,
                        data: fd,
                        type: 'post',
                        success: function(response){
                           console.log(response);
                           var data = JSON.parse(response);
                           if(data.status == "Ok")
                           {
                            toastr.success('Payment Successfully!', 'Success!');
                            location.reload();
                           }
                           else
                           {
                            toastr.error('Somthing Error!', 'Error!');
                           }
                        }
                    })
                })
            });

    </script>

</body>
<!--end::Body-->


</html>