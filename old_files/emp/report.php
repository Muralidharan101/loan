<?php 
    include('../datab.php');

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
    <!--end::Global Stylesheets Bundle-->
    <link href="<?php echo $path; ?>assets/css/daterangepicker.css" rel="stylesheet" type="text/css" />

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
            #reportrange {
            background: #fff;
            cursor: pointer;
            width: 100%;
            font-size: 14px;
            border: 0.0625rem solid #d2d4e4;
            border-radius: 8px;
            padding: 10px;
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
                                        Loan Report
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
                                <div class="card mb-4">
                                    <div class="card-body row">
                                        <div class="col-lg-4 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="#reportrange">Date Range</label>
                                                    <div id="reportrange">
                                                        <i class="fa fa-calendar"></i>&nbsp;
                                                        <span></span> <i class="fa fa-caret-down"></i>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-12 pt-3">
                                            <label for="">Client</label>
                                                <select name="" id="client" class="form-select">
                                                    <option value="">All</option>
                                                    <?php
                                                
                                                        $sql = mysqli_query($conn, "SELECT * FROM client_data cd, loan_data ld WHERE cd.status = 'Active'
                                                        AND cd.id = ld.client_id AND ld.emp_id = '$emp_id'");
                                                        while($ed = mysqli_fetch_assoc($sql)){
                                                        ?>
                                                        <option value="<?php echo $ed['id'];?>"><?php echo $ed['name'];?></option>
                                                        <?php };?>
                                                </select>
                                        </div>
                                        <div class="col-4 pt-4 mt-4">
                                            <button class="btn btn-primary" id="get_report">Get Report</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card report_result">
                                    <div class="card-body table-responsive">
                                        <table class="table table-bordered table-striped table-hover" id="loan_table">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Client Name</th>
                                                    <th class="text-center">Payment Date</th>
                                                    <th class="text-center">Paid Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody id="table_result">
                                                
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
    <script src="<?php echo $path; ?>assets/js/daterangepicker.min.js"></script>
    <script src="<?php echo $path; ?>assets/js/moment.min.js"></script>
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

        $("#get_report").click(function(){
            var starting_date = $("#reportrange").data('daterangepicker').startDate.format('YYYY-MM-DD');
            var end_date = $("#reportrange").data('daterangepicker').endDate.format('YYYY-MM-DD');
            var emp = '<?php echo $emp_id;?>';
            var client = $("#client").val();
            
            var fd = new FormData();

            fd.append('starting_date', starting_date);
            fd.append('end_date', end_date);
            fd.append('emp', emp);
            fd.append('client', client);

            $.ajax({
                url:'<?php echo $path;?>ajax/emp/report.php',
                processData: false,
                contentType: false,
                data: fd,
                type: 'post',
                success: function(response){
                   console.log(response);

                   var res = JSON.parse(response); 

                   if(res.status = 'Success')
                   {
                    $("#table_result").html("");
                       var rec = res.data;
                      var sno = 1;
                    rec.map((array, index) => 
                        {
                           $("#table_result").append(`
                                <tr>
                                    <td>`+ sno++ +`</td>
                                    <td>${array.name}</td>
                                    <td class="text-center">${new Date(array.payment_date).toLocaleDateString('en-GB')}</td>
                                    <td class="text-end">₹${array.paid_amount}.00</td>
                                </tr>
                           `);
                       })
                   }
                }   
            })
        })
    });
    var start = moment().subtract(29, 'days');
                    var end = moment();


                    function cb(start, end) {
                        $('#reportrange span').html(start.format('D/M/YYYY') + ' - ' + end.format(
                            'D/M/YYYY'));
                    }

                    $('#reportrange').daterangepicker({
                        startDate: start,
                        endDate: end,

                        ranges: {
                            'Today': [moment(), moment()],
                            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                            'This Month': [moment().startOf('month'), moment().endOf('month')],
                            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment()
                                .subtract(1, 'month').endOf('month')
                            ]
                        }
                    }, cb);

                    cb(start, end);
</script>
</body>
<!--end::Body-->


</html>