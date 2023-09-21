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
                <?php include('../side-bar.php');?>

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
                                        <div class="col-lg-6 col-sm-6 col-xs-12 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="client_name">Name</label>
                                                <input type="text" class="form-control" id="client_name">
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
                                                <label for="client_address">Address</label>
                                                <input type="text" class="form-control" id="client_address">
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
                                                <label for="client_loan">Loan Amount</label>
                                                <input type="text" class="form-control" id="client_loan">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="client_duration">Duration (Days)</label>
                                                <input type="text" class="form-control" id="client_duration">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="client_charges">Document charges (%)</label>
                                                <input type="text" class="form-control" id="client_charges" value="2">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="client_interest">Interest (%)</label>
                                                <input type="number" class="form-control" id="client_interest" value="3">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="sales_person">Collection person</label>
                                                <select name="" id="collection_person" class="form-select">
                                                    <option value="">-- Select Collection Person --</option>
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
                                        <div class="col-lg-6 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="client_email">Email</label>
                                                <input type="text" class="form-control" id="client_email">
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
                                                            <td id="sum_loan_balance"></td>

                                                        </tr>
                                                        <tr>
                                                            <th>Total Credit Amount</th>
                                                            <td>:</td>
                                                            <td id="sum_loan_total"></td>

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
                var loan_value = $("#client_loan").val();
                var loan_duration = $(this).val();
                var charge_percentage = $("#client_charges").val();
                var charge_inetrest = $("#client_interest").val();
                // var loan_duration = $("#client_duration").val();

                var charge_percentage_amount = loan_value * (charge_percentage/100);
                var interest_percentage_amount = loan_value * (charge_inetrest/100);

                var interest = loan_duration * interest_percentage_amount;

                var loan_amt_with_interst = parseInt(loan_value) + parseInt(interest) + parseInt(charge_percentage_amount);

                var per_day_charge = loan_value / loan_duration;

                var after_loan_value = (loan_value - interest_percentage_amount) - charge_percentage_amount;
                // $("#client_interest").val('₹'+Math.round(interest));

                // $("#autopop").val('Loan Amount: ₹'+Math.round(after_loan_value)+' - Per Day Charge: ₹'+Math.round(per_day_charge));
                // console.log('Loan Amount: ₹'+after_loan_value+' - Per Day Charge: ₹'+per_day_charge);

                $("#sum_loan_amount").html('₹'+loan_value).attr('data-value', loan_value);
                $("#sum_loan_charge").html('₹'+charge_percentage_amount+'('+charge_percentage+'%)').attr('data-value', charge_percentage_amount);
                $("#sum_loan_interest").html('₹'+interest+'(Rate of Interest)').attr('data-value', interest);
                $("#sum_loan_balance").html('₹'+after_loan_value).attr('data-value', after_loan_value);
                $("#sum_loan_total").html('₹'+loan_amt_with_interst).attr('data-value', loan_amt_with_interst);
                $("#sum_loan_daily_charge").html('₹'+per_day_charge).attr('data-value', per_day_charge);
                $("#sum_loan_duration").html(loan_duration).attr('data-value', loan_duration);

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
                var client_name = $('#client_name').val().trim();
                var client_mobile = $('#client_mobile').val().trim();
                var client_alt_mobile = $('#client_alt_mobile').val().trim();
                var client_address = $('#client_address').val().trim();
                var client_map_link = $('#client_map_link').val().trim();
                var client_adhaar = $('#client_adhaar').val();
                var client_pan = $('#client_pan').val();
                var client_loan = $('#client_loan').val();
                var client_duration = $('#client_duration').val();
                var client_charges_percent = $('#client_charges').val();
                var client_interest_percent = $('#client_interest').val().trim();
                var client_email = $('#client_email').val().trim();
                var collection_person = $('#collection_person').val();
                var charge_amount = $('#sum_loan_charge').data('value');
                var interest_amount = $('#sum_loan_interest').data('value');
                var debit_amount = $('#sum_loan_balance').data('value');
                var credit_amount = $('#sum_loan_total').data('value');
                var per_day_charge = $('#sum_loan_daily_charge').data('value');
                

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
                    
                    $.ajax({
                        url:'<?php echo $path;?>ajax/admin/client-create.php',
                        processData: false,
                        contentType: false,
                        data: fd,
                        type: 'post',
                        success: function(response){
                           console.log(response);
                           var data = JSON.parse(response);
                           if(data.status == "Ok")
                           {
                                toastr.success('OTP Sent Successfully!', 'Success!');
                                $('.phone_no').html('+91 '+client_mobile);
                                $("#client_id").val(data.client_id);
                                $('#staticBackdrop').modal('show');

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