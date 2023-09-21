<?php
    include('../datab.php');
    session_start();

    if(isset($_SESSION['admin_id']))
    {
        header('Location: '.$path.'admin/Index');
    }
?>
<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->


<head>
    <title>Admin | Mudra Finance</title>
    <meta charset="utf-8" />
    <meta name="description" content="
    Get the perfect loan for your needs at Mudra Finance. We offer personal and business loans with great rates. Let's achieve your financial goals together.
        " />
    <meta name="keywords" content="
            metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, 
            Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, 
            free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, 
            bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon
        " />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="
            Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, 
            Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template
        " />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="<?php echo $path;?>assets/media/logos/favicon.ico" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->



    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="<?php echo $path;?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $path;?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <link href="<?php echo $path; ?>assets/css/toastr.min.css" rel="stylesheet" type="text/css" />

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
                '../../../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
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

<body id="kt_body" class="app-blank">
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

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">

        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Logo-->
            <a href="javascript:void(0)" class="d-block d-lg-none mx-auto py-20">
                <img alt="Logo" src="<?php echo $path;?>assets/media/logos/logo.png" class="theme-light-show h-100px" />
                <img alt="Logo" src="<?php echo $path;?>assets/media/logos/logo.png" class="theme-dark-show" />
            </a>
            <!--end::Logo-->

            <!--begin::Aside-->
            <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
                <!--begin::Wrapper-->
                <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
                    <!--begin::Header-->
                    <div class="d-flex flex-stack py-2">
                        <!--begin::Back link-->
                        <div class="me-2">

                        </div>
                        <!--end::Back link-->

                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="py-20">

                        <!--begin::Form-->
                        <!-- <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"
                            data-kt-redirect-url="/metronic8/demo1/../demo1/index.html" action="#"> -->
                            <!--begin::Body-->
                            <div class="card-body">
                                <!--begin::Heading-->
                                <div class="mb-5 d-none d-lg-block">
                                    <img src="../assets/images/logo/logo.jpg" width="30%" alt="">
                                </div>
                                <div class="text-start mb-10">
                                    <!--begin::Title-->
                                    <h1 class="text-dark mb-3 fs-3x" data-kt-translate="sign-in-title">
                                        Sign In
                                    </h1>
                                    <!--end::Title-->

                                    <!--begin::Text-->
                                    <!-- <div class="text-gray-400 fw-semibold fs-6" data-kt-translate="general-desc">
                                        Get unlimited access & earn money
                                    </div> -->
                                    <!--end::Link-->
                                </div>
                                <!--begin::Heading-->

                                <!--begin::Input group--->
                                <div class="fv-row mb-8">
                                    <!--begin::Email-->
                                    <input type="text" placeholder="Username" name="Username" autocomplete="off" id="username" class="form-control form-control-solid" />
                                    <!--end::Email-->
                                </div>

                                <!--end::Input group--->
                                <div class="fv-row mb-7">
                                    <!--begin::Password-->
                                    <input type="text" placeholder="Password" name="password" id="password"
                                        autocomplete="off" data-kt-translate="sign-in-input-password"
                                        class="form-control form-control-solid" />
                                    <!--end::Password-->
                                </div>
                                <!--end::Input group--->

                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-10">
                                    <div></div>

                                    <!--begin::Link-->
                                    <!-- <a href="reset-password.html" class="link-primary" data-kt-translate="sign-in-forgot-password">
                Forgot Password ?
            </a> -->
                                    <!--end::Link-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Actions-->
                                <div class="d-flex flex-stack">
                                    <button id="signin" class="btn btn-primary">Signin</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--begin::Body-->
                        <!-- </form> -->
                        <!--end::Form-->


                    </div>
                    <!--end::Body-->

                    <!--begin::Footer-->
                    <div class="m-0">
                        <p>&copy; Mudra Finance <?php echo date('Y');?></p>
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Aside-->

            <!--begin::Body-->
            <div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat"
                style="background-image: url(<?php echo $path;?>assets/images/login/login_cash_1.jpg)">
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->

    <!--begin::Javascript-->
    <script>
        var hostUrl = "<?php echo $path;?>assets/index.html";
    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="<?php echo $path;?>assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?php echo $path;?>assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->


    <!--begin::Custom Javascript(used for this page only)-->
    <script src="<?php echo $path;?>assets/js/custom/authentication/sign-in/general.js"></script>
    <script src="<?php echo $path;?>assets/js/custom/authentication/sign-in/i18n.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
    <script src="<?php echo $path; ?>assets/js/toastr.min.js"></script>


    <script>
        $(document).ready(function () {

            $("#signin").click(function () {
                var username = $('#username').val();
                var password = $('#password').val();

                if (username == '') {
                    toastr.warning('Please Fill Your Username!!');

                } else if (password == '') {
                    toastr.warning('Please Fill Your Pan Number!!');
                } else {
                    var fd = new FormData();

                    fd.append("username", username);
                    fd.append("password", password);

                    $.ajax({
                        url: '<?php echo $path;?>ajax/admin/login.php',
                        data: fd,
                        type: 'post',
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            data = JSON.parse(response);
                            if (data.status == 'Success') {
                                window.location.href = '<?php echo $path;?>admin/Login';

                               
                            } else {
                                toastr.error('Username Password incorrect!',
                                    'Invalid Account!');
                            }
                        }
                    });
                }
            });

        });
    </script>
</body>
<!--end::Body-->

</html>