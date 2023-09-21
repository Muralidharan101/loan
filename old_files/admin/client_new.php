<?php include('../datab.php');?>
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


            <?php include('../header.php');?>
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
                                        Client Creation
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
                                    <div class="row py-4">
                                        <div class="heading pt-5">
                                            <h4>Client Details</h4>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-12 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="client_name">Name of applicant</label>
                                                <input type="text" class="form-control" id="client_name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-12 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="enterprise">Name of enterprise</label>
                                                <input type="text" class="form-control" id="enterprise">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="client_mobile">Mobile</label>
                                                <input type="number" class="form-control" id="client_mobile" maxlength="12">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="client_alt_mobile">Alt. Mobile</label>
                                                <input type="number" class="form-control" id="client_alt_mobile">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-12 col-xs-12 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="client_address">Residential address</label>
                                                <input type="text" class="form-control" id="client_address">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-12 col-xs-12 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="client_business_address">Business address</label>
                                                <input type="text" class="form-control" id="client_business_address">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-12 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="client_map_link">Map Location Link</label>
                                                <input type="text" class="form-control" id="client_map_link">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="client_adhaar">Aadhaar No</label>
                                                <input type="text" class="form-control" id="client_adhaar">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="client_pan">Pan No</label>
                                                <input type="text" class="form-control" id="client_pan">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="establishment">Date of establishment</label>
                                                <input type="date" class="form-control" id="establishment">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="client_dob">Date of birth</label>
                                                <input type="date" class="form-control" id="client_dob">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="premises">Business premises</label>
                                                <select name="" id="premises"class="form-select">
                                                    <option value="">-- Business premises --</option>
                                                    <option value="Rental">Rental</option>
                                                    <option value="Owned">Owned</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-3 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="business_type">Type of Business</label>
                                                <select name="" id="business_type" class="form-select">
                                                    <option value="">-- Type of Business --</option>
                                                    <option value="proprietor">sole proprietor</option>
                                                    <option value="partnership">partnership firm</option>
                                                    <option value="LMT">LMT company</option>
                                                    <option value="co-op">co-op society</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="turnover_yr">Business turnover</label>
                                                <input type="text" class="form-control" id="turnover_yr" placeholder="Yearly">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="turnover_mo"></label>
                                                <input type="text" class="form-control" id="turnover_mo" placeholder="Monthly">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="client_gst">GST no</label>
                                                <input type="text" class="form-control" id="client_gst">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="client_msme">MSME certificate</label>
                                                <input type="text" class="form-control" id="client_msme">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="client_gumasta">Gumasta license</label>
                                                <input type="text" class="form-control" id="client_gumasta">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="client_indus_segment">Industry segment</label>
                                                <input type="text" class="form-control" id="client_indus_segment">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="nature_business">Nature of business</label>
                                                <input type="text" class="form-control" id="nature_business">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="client_email">Email</label>
                                                <input type="text" class="form-control" id="client_email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="client_photo">Client Photo</label>
                                                <input type="file" class="form-control" id="client_photo">
                                            </div>
                                        </div>
                                        <div class="heading pt-5">
                                            <h4>Nominee Details</h4>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="nominee_name">Nominee Name</label>
                                                <input type="text" class="form-control" id="nominee_name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="nominee_address">Nominee Address</label>
                                                <input type="text" class="form-control" id="nominee_address">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="nominee_adhaar">Nominee Aadhaar no</label>
                                                <input type="text" class="form-control" id="nominee_adhaar">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="nominee_pan">Nominee Pan no</label>
                                                <input type="text" class="form-control" id="nominee_pan">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="nominee_mobile">Nominee Mobile no</label>
                                                <input type="text" class="form-control" id="nominee_mobile">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="nominee_email">Nominee Email</label>
                                                <input type="text" class="form-control" id="nominee_email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="nominee_photo">Nominee Photo</label>
                                                <input type="file" class="form-control" id="nominee_photo">
                                            </div>
                                        </div>
                                        <div class="heading pt-5">
                                            <h4>Loan Details</h4>
                                        </div>
                                        <div class="col-12 py-4">
                                            <div class="col-lg-6 col-12">
                                                <div class="form-group">
                                                    <label for="">Choose Loan Method</label>
                                                    <select name="" id="loan_method" class="form-control">
                                                        <option value="">-- Choose Loan Method --</option>
                                                        <option value="1">Amount</option>
                                                        <option value="2">Jewel</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 loan_method d-none">
                                            <div class="row">
                                            <div class="col-lg-3 col-sm-6 col-xs-6 col-12 pt-3">
                                                <div class="form-group">
                                                    <label for="client_loan">Loan Amount</label>
                                                    <input type="text" class="form-control" id="client_loan">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-xs-6 col-12 pt-3">
                                                <div class="form-group">
                                                    <label for="client_duration">Duration <span class="duration_indicater">(Days)</span></label>
                                                    <input type="text" class="form-control" id="client_duration">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-6 col-xs-6 col-12 pt-3">
                                                <div class="form-group">
                                                    <label for="client_charges">Document charges (%)</label>
                                                    <input type="text" class="form-control" id="client_charges" value="2">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-6 col-xs-6 col-12 pt-3">
                                                <div class="form-group">
                                                    <label for="client_interest">Interest (%)</label>
                                                    <input type="number" class="form-control" id="client_interest" value="3">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-6 col-xs-6 col-12 pt-3 interest2">
                                                <div class="form-group">
                                                    <label for="client_interest2">2nd Interest (%)</label>
                                                    <input type="number" class="form-control" id="client_interest2" value="4">
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="collection_person">Loan Collecting person</label>
                                                <select name="" id="collection_person" class="form-select">
                                                    <option value="">-- Select Collecting Person --</option>
                                                    <?php
                                                        $sql = mysqli_query($conn, "SELECT * FROM emp_data WHERE status = 'Active' ORDER BY emp_name ASC");
                                                        while($sal = mysqli_fetch_assoc($sql))
                                                        {
                                                    ?>
                                                    <option value="<?php echo $sal['id'];?>"><?php echo $sal['emp_name'];?></option>
                                                    <?php };?>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12 col-sm-12 col-xs-12 col-12 mt-3 pt-5">
                                            <b>Summary</b>
                                            <div class="col-lg-6 col-12 p-3">
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <th>Loan Amount</th>
                                                            <td>:</td>
                                                            <td id="sum_loan_amount"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Document Charge</th>
                                                            <td>:</td>
                                                            <td id="sum_loan_charge"></td>

                                                        </tr>
                                                        <tr>
                                                            <th>Duration (Days)</th>
                                                            <td>:</td>
                                                            <td id="sum_loan_duration"></td>

                                                        </tr>
                                                        <tr>
                                                            <th>Perday Charge</th>
                                                            <td>:</td>
                                                            <td id="sum_loan_daily_charge"></td>

                                                        </tr>
                                                        <tr>
                                                            <th>Rate of Interest</th>
                                                            <td>:</td>
                                                            <td id="sum_loan_interest"></td>

                                                        </tr>
                                                        <tr>
                                                            <th>Debit Amount</th>
                                                            <td>:</td>
                                                            <td id="sum_loan_debit"></td>

                                                        </tr>
                                                        <tr>
                                                            <th>Total Credit Amount</th>
                                                            <td>:</td>
                                                            <td id="sum_loan_credit"></td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12 col-xs-12 col-12 py-3 text-end">
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary" id="create_client" value="Create Client">
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

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">OTP Verification</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
        <div class="col-12">
            <div class="form-group">
                <label for="otp">Enter OTP</label>
                <input type="number" name="" id="otp" class="form-control">
                <input type="text" id="client_id" hidden>
            </div>
            <div class="message pt-4">
                <ul>
                    <li>OTP Sent to this Number <b class="phone_no">+91 89989XXXX87</b>.</li>
                    <li>Check Your Message, Enter 6 Digit OTP</li>
                </ul>
            </div>
        </div>
      </div>
      <div class="modal-footer m-auto">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Resend</button> -->
        <button type="button" class="btn btn-primary" id="verify_otp">Verify OTP</button>
      </div>
    </div>
  </div>
</div>
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
            $('#loan_method').change(function(){
                var value = $(this).val();

                if(value == '1')
                {
                    $(".loan_method").removeClass('d-none');
                    $(".interest2").addClass('d-none');
                    $(".duration_indicater").html('(Days)');
                    
                }
                else
                {
                    $(".loan_method").removeClass('d-none');
                    $(".duration_indicater").html('(Month)');
                    $(".interest2").removeClass('d-none');

                }

            })
            $('body').on('click', '#verify_otp', function(){
                var otp = $("#otp").val();
                var client_id = $("#client_id").val();
                if(otp == "")
                {
                    toastr.warning('Please Enter OTP!', 'Empty Feild!');  
                }
                else if(otp.length != '6')
                {
                    toastr.warning('Please Enter Valid OTP!', 'Wrong OTP!');  
                }
                else
                {
                    var fd = new FormData();

                    fd.append('otp', otp); 
                    fd.append('client_id', client_id); 

                    $.ajax({
                        url:'<?php echo $path;?>ajax/admin/otp-verify.php',
                        processData: false,
                        contentType: false,
                        data: fd,
                        type: 'post',
                        success: function(response){
                           console.log(response);
                           var data = JSON.parse(response);
                           if(data.status == "Success")
                           {
                                toastr.success('Mobile number Verified!', 'Success!');
                                $('#staticBackdrop').modal('hide');
                           }
                           else
                           {
                            toastr.error('Please Enter Valid OTP!', 'Wrong OTP!');
                           }
                        }

                    })


                }
                
            });
            $('body').on('keyup','#client_duration',function(){
                // $("#client_duration").keyup(function(){
                var loan_value = $("#client_loan").val(); //1000000
                var loan_duration = $(this).val(); //6, 180
                var charge_percentage = $("#client_charges").val();
                var charge_inetrest = $("#client_interest").val(); //3%
                var loan_method = $("#loan_method").val(); //3%
                
                // var loan_duration = $("#client_duration").val();

                    if(loan_method == '1')
                    {
                        //Document Charge Calcualtion ----
                        var charge_percentage_amount = loan_value * (charge_percentage/100); // 2000
                        var round_amount_charge_percentage_amount = parseInt(charge_percentage_amount); //2000

                        // Loan Calcualtion ----
                        var per_day_payment_without_interest = loan_value / loan_duration; //100000 / 180 = 555.55
                        var percent_loan_of_value = loan_value * (charge_inetrest/100); // 3000
                        var per_day_interest = percent_loan_of_value / 30; // 100

                        var rounded_interest = Math.ceil(parseFloat(per_day_interest));

                        console.log(rounded_interest);
                        var perday_payment_with_interest = parseInt(per_day_payment_without_interest) + parseInt(rounded_interest); //655.555

                        var round_amount_perday_charge = parseInt(perday_payment_with_interest); //656

                        $("#client_interest2").attr('data-amount', '').attr('data-interest', '');
                    }
                    else
                    {
                        //Document Charge Calcualtion ----
                        var charge_percentage_amount = loan_value * (charge_percentage/100); // 2000
                        var round_amount_charge_percentage_amount = parseInt(charge_percentage_amount); //2000

                        var interest_2nd = $("#client_interest2").val();
                        // Loan Calcualtion ----
                        var per_day_payment_without_interest = loan_value / loan_duration; //500000 / 5 = 100000
                        var percent_loan_of_value = loan_value * (charge_inetrest/100); // 20000
                        var interest2_loan_of_value = loan_value * (interest_2nd/100); // 20000
                        var per_day_interest = percent_loan_of_value; // 20000
                        
                        var rounded_interest = Math.ceil(parseFloat(per_day_interest));

                        var perday_payment_with_interest = per_day_payment_without_interest + per_day_interest; //120000
                        var round_amount_perday_charge = parseInt(perday_payment_with_interest); //120000

                        $("#client_interest2").attr('data-amount', interest2_loan_of_value).attr('data-interest', interest_2nd);
                    }
                    
                    var total_interest_amount = rounded_interest * loan_duration;
                    
                    var loan_amt_with_interst = parseInt(loan_value) + parseInt(percent_loan_of_value);


                    $("#sum_loan_amount").html('₹'+loan_value).attr('data-value', loan_value);
                    $("#sum_loan_charge").html('₹'+round_amount_charge_percentage_amount+'('+charge_percentage+'%)').attr('data-value', round_amount_charge_percentage_amount);
                    $("#sum_loan_duration").html(loan_duration).attr('data-value', loan_duration);
                    $("#sum_loan_daily_charge").html('₹'+parseInt(perday_payment_with_interest)).attr('data-value', parseInt(perday_payment_with_interest));
                    $("#sum_loan_interest").html('₹'+total_interest_amount+'(Rate of Interest)').attr('data-value', total_interest_amount);

                    var final_debit_amt = loan_value - parseInt(perday_payment_with_interest);
                    var total_credit_amt = parseInt(loan_value) + parseInt(total_interest_amount);
                    $("#sum_loan_debit").html('₹'+final_debit_amt).attr('data-value', final_debit_amt);
                    $("#sum_loan_credit").html('₹'+total_credit_amt).attr('data-value', total_credit_amt);
                    

            });
            $("body").on('keyup','#client_charges',function(){
                $('#client_duration').trigger('keyup');
            }); 
            $("body").on('keyup','#client_interest',function(){
                $('#client_duration').trigger('keyup');
            });
            $("body").on('keyup','#client_loan',function(){
                var loan_duration = $("#client_duration").val();
                if(loan_duration != "")
                {
                    $('#client_duration').trigger('keyup');
                }
            });
            $('#create_client').click(function(){

                $('#create_client').prop('disabled', true);
                // Client
                var client_name = $('#client_name').val().trim();
                var client_mobile = $('#client_mobile').val().trim();
                var client_alt_mobile = $('#client_alt_mobile').val().trim();
                var client_address = $('#client_address').val().trim();
                var client_map_link = $('#client_map_link').val().trim();
                var client_adhaar = $('#client_adhaar').val();
                var client_pan = $('#client_pan').val();
                
                var client_charges_percent = $('#client_charges').val();
                var client_interest_percent = $('#client_interest').val().trim();
                var client_email = $('#client_email').val().trim();
                var collection_person = $('#collection_person').val();
                var client_dob = $('#client_dob').val();
                var client_photo = $('#client_photo')[0].files[0];

                // Loan
                var loan_method = $("#loan_method").val();
                if(loan_method == '1')
                {
                    var interest_2nd_percent = '';
                    var interest_2nd_amt = '';
                }
                else
                {
                    var interest_2nd_percent = $("#client_interest2").data('interest');;
                    var interest_2nd_amt = $("#client_interest2").data('amount');;
                }
                var client_loan = $('#client_loan').val();
                var client_duration = $('#client_duration').val();
                var charge_amount = $('#sum_loan_charge').data('value');
                var interest_amount = $('#sum_loan_interest').data('value');
                var debit_amount = $('#sum_loan_debit').data('value');
                var credit_amount = $('#sum_loan_credit').data('value');
                var per_day_charge = $('#sum_loan_daily_charge').data('value');
                
                //business

                var enterprise = $('#enterprise').val().trim();
                var client_business_address = $('#client_business_address').val().trim();
                var establishment = $('#establishment').val();
                var premises = $('#premises').val().trim();
                var business_type = $('#business_type').val().trim();
                var turnover_yr = $('#turnover_yr').val().trim();
                var turnover_mo = $('#turnover_mo').val().trim();
                var client_gst = $('#client_gst').val().trim();
                var client_msme = $('#client_msme').val().trim();
                var client_gumasta = $('#client_gumasta').val().trim();
                var client_indus_segment = $('#client_indus_segment').val().trim();
                var nature_business = $('#nature_business').val().trim();

                //Nominee

                var nominee_name = $('#nominee_name').val().trim();
                var nominee_address = $('#nominee_address').val().trim();
                var nominee_adhaar = $('#nominee_adhaar').val().trim();
                var nominee_pan = $('#nominee_pan').val().trim();
                var nominee_mobile = $('#nominee_mobile').val().trim();
                var nominee_email = $('#nominee_email').val().trim();
                var nominee_photo = $('#nominee_photo')[0].files[0];


                if(client_name == "")
                {
                    toastr.warning('Please Fill Name!', 'Empty Feild!');
                }
                else if(client_mobile == "")
                {
                    toastr.warning('Please Choose DOB!', 'Empty Feild!');
                }
                else if(client_address == null)
                {
                    toastr.warning('Please Select Photo!', 'Empty Feild!');
                }
                else if(client_map_link == "")
                {
                    toastr.warning('Please Fill Mobile!', 'Empty Feild!');
                }
                else if(client_adhaar == "")
                {
                    toastr.warning('Please Fill Address!', 'Empty Feild!');
                }
                else if(client_pan == "")
                {
                    toastr.warning('Please Choose Join Date!', 'Empty Feild!');
                }
                else if(client_loan == "")
                {
                    toastr.warning('Please Fill Username!', 'Empty Feild!');
                }
                else if(client_duration == "")
                {
                    toastr.warning('Please Fill Password!', 'Empty Feild!');
                }
                else if(client_charges_percent == "")
                {
                    toastr.warning('Please Fill Password!', 'Empty Feild!');
                }
                else if(client_interest_percent == "")
                {
                    toastr.warning('Please Fill Password!', 'Empty Feild!');
                }
                else if(collection_person == "")
                {
                    toastr.warning('Please Fill Password!', 'Empty Feild!');
                }
                else
                {
                    var fd = new FormData();

                    fd.append('client_name', client_name); 
                    fd.append('client_mobile', client_mobile); 
                    fd.append('client_alt_mobile', client_alt_mobile); 
                    fd.append('client_address', client_address); 
                    fd.append('client_map_link', client_map_link); 
                    fd.append('client_adhaar', client_adhaar);
                    fd.append('client_pan', client_pan);
                    fd.append('client_loan', client_loan);
                    fd.append('client_duration', client_duration);
                    fd.append('client_charges_percent', client_charges_percent);
                    fd.append('client_interest_percent', client_interest_percent);
                    fd.append('charge_amount', charge_amount);
                    fd.append('collection_person', collection_person);
                    fd.append('interest_amount', interest_amount);
                    fd.append('debit_amount', debit_amount);
                    fd.append('credit_amount', credit_amount);
                    fd.append('per_day_charge', per_day_charge);
                    fd.append('client_email', client_email);
                    fd.append('client_dob', client_dob);
                    fd.append('client_photo', client_photo);
                    fd.append('interest_2nd_amt', interest_2nd_amt);
                    fd.append('interest_2nd_percent', interest_2nd_percent);
                    fd.append('loan_method', loan_method);
                    
                    //Business
                    fd.append('enterprise', enterprise);
                    fd.append('client_business_address', client_business_address);
                    fd.append('establishment', establishment);
                    fd.append('premises', premises);
                    fd.append('business_type', business_type);
                    fd.append('turnover_yr', turnover_yr);
                    fd.append('turnover_mo', turnover_mo);
                    fd.append('client_gst', client_gst);
                    fd.append('client_msme', client_msme);
                    fd.append('client_gumasta', client_gumasta);
                    fd.append('client_indus_segment', client_indus_segment);
                    fd.append('nature_business', nature_business);

                    //Nominee
                    fd.append('nominee_name', nominee_name);
                    fd.append('nominee_address', nominee_address);
                    fd.append('nominee_adhaar', nominee_adhaar);
                    fd.append('nominee_pan', nominee_pan);
                    fd.append('nominee_mobile', nominee_mobile);
                    fd.append('nominee_email', nominee_email);
                    fd.append('nominee_photo', nominee_photo);


                    $.ajax({
                        url:'<?php echo $path;?>ajax/admin/client-create.php',
                        processData: false,
                        contentType: false,
                        data: fd,
                        type: 'post',
                        success: function(response){
                           console.log(response);
                           var data = JSON.parse(response);
                           if(data.status == "Success")
                           {
                                toastr.success('OTP Sent Successfully!', 'Success!');
                                $('.phone_no').html('+91 '+client_mobile);
                                $("#client_id").val(data.client_id);
                                $('#staticBackdrop').modal('show');
                                $('#create_client').prop('disabled', false);

                           }
                           else if(data.status == 'Available')
                           {
                                toastr.error('This Mobile no. Already Used for Another Emp!!', 'Change Mobile Number!');
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