<?php include('../datab.php');

session_start();

if(isset($_SESSION['admin_id']))
{
    $admin_id = $_SESSION['admin_id'];
    
}
else
{
    header('Location: '.$path.'admin/Login');
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
                                        Employee Creation
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
                                    <div class="row py-4">
                                        <div class="col-lg-6 col-sm-6 col-xs-12 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="emp_name">Name</label>
                                                <input type="text" class="form-control" id="emp_name">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="emp_co">C/O</label>
                                                <input type="text" class="form-control" id="emp_co">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="emp_dob">DOB</label>
                                                <input type="date" class="form-control" id="emp_dob">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-12 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="emp_photo">Photo</label>
                                                <input type="file" class="form-control" id="emp_photo">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="emp_mobile">Mobile</label>
                                                <input type="number" class="form-control" id="emp_mobile" maxlength="12">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="emp_alt_mobile">Alt. Mobile</label>
                                                <input type="number" class="form-control" id="emp_alt_mobile">
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-sm-9 col-xs-12 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="emp_address">Address</label>
                                                <input type="text" class="form-control" id="emp_address">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-3 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="emp_join_date">Joining Date</label>
                                                <input type="date" class="form-control" id="emp_join_date">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="emp_username">Username</label>
                                                <input type="text" class="form-control" id="emp_username">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-6 col-12 pt-3">
                                            <div class="form-group">
                                                <label for="emp_password">Password</label>
                                                <input type="text" class="form-control" id="emp_password">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12 col-xs-12 col-12 py-3 text-end">
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary" id="create_emp" value="Create Employee">
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
                                toastr.error('This Username. Already Used for Another Emp!!', 'Change Username!');
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