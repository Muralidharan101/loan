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
                                        Employee List
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
                                <div class="card">
                                    <div class="card-body table-responsive">
                                        <table class="table table-bordered table-striped table-hover" id="loan_table">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">S.No</th>
                                                    <th class="text-center">Photo</th>
                                                    <th>Emp Name</th>
                                                    <th>DOB</th>
                                                    <th>Mobile</th>
                                                    <th>Address</th>
                                                    <th>Joining Date</th>
                                                    <th>Change</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $count = 1;
                                                    $sql = mysqli_query($conn, "SELECT * FROM emp_data ed WHERE ed.status = 'Active'");

                                                    while($loan = mysqli_fetch_assoc($sql)){
                                                ?>
                                                <tr onclick='window.location.href="Emp-Edit/<?php echo $loan["id"];?>/"' style="cursor:pointer;" data-id="<?php echo $loan['id'];?>" data-empname="<?php echo $loan['emp_name'];?>">
                                                    <td class="text-center"><?php echo $count++;?></td>
                                                    <td class="text-center"><img src="<?php echo $path;?>assets/media/profile-images/employee/<?php echo $loan['id'].'/'.$loan['emp_photo'];?>" width="100" alt="" style="object-fit: cover;width: 50px;height: 50px;"></td>
                                                    <td><?php echo $loan['emp_name'];?></td>
                                                    <td><?php echo date('d-m-Y', strtotime($loan['emp_dob']));?></td>
                                                    <td><?php echo $loan['emp_mobile'];?></td>
                                                    <td><?php echo $loan['emp_address'];?></td>
                                                    <td><?php echo date('d-m-Y', strtotime($loan['emp_join_date']));?></td>
                                                    <td onclick=event.stopPropagation()><button class="btn btn-sm btn-primary change-btn">Change</button></td>
                                                </tr>
                                                <?php };?>
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
    <div class="modal fade show" id="collectingPerson" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="collectingPersonLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="collectingPersonLabel">Transfer Clients to New Employee</h5>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <label for="">From</label>
                            <input type="text" name="" id="emp_name_modal" class="form-control" disabled>
                            <!-- <input type="text" name="" value="<?php echo $res['loann_id'];?>" class="form-control" hidden id="loan_id"> -->
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
                    <button type="button" class="btn btn-primary client-otp" id="change_person">Transfer</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>

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

        $('.change-btn').click(function(){
            var row_emp_id = $(this).closest('tr').data('id');
            var row_emp_name = $(this).closest('tr').data('empname');
            $("#emp_name_modal").val(row_emp_name);
            $("#emp_name_modal").attr('data-id', row_emp_id);

            $('#collectingPerson').modal('show');

        });

        $('body').on('click', '#change_person', function(){
                var emp_id = $("#emp_id").val();
                var ex_emp_id = $("#emp_name_modal").data('id');

                
                if(emp_id == "")
                {
                    toastr.warning('Please Choose Emp!', 'Empty Field!');

                }
                else if(emp_id == ex_emp_id)
                {
                    toastr.warning('Employee is same, Change To another Employee!', 'Same Employee!');
                    $("#emp_id").focus();
                }
                else
                {
                    var fd = new FormData();

                    fd.append('emp_id', emp_id);
                    fd.append('ex_emp_id', ex_emp_id);

                    $.ajax({
                        url:'<?php echo $path;?>ajax/admin/transfer-collecting-person.php',
                        processData: false,
                        contentType: false,
                        data: fd,
                        type: 'post',
                        success: function(response){
                           console.log(response);
                           var data = JSON.parse(response);
                           if(data.status == "Success")
                           {
                                toastr.success('Transfer All Client to new Employee!', 'Success!');
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
    })
</script>
</body>
<!--end::Body-->


</html>