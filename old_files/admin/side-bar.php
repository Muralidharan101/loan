<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">


    <!--begin::Logo-->
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->
        <a href="../index.html">
           <img alt="Logo" src="<?php echo $path;?>assets/media/logos/logo.png" width="75" /> 

            <!-- <img alt="Logo" src="<?php echo $path;?>assets/media/logos/logo.png" width="75" />  -->
            <!-- <h4 class="text-white">Loan Management</h4> -->
        </a>
        <!--end::Logo image-->

        <!--begin::Sidebar toggle-->
        <!--begin::Minimized sidebar setup:
                    if (isset($_COOKIE["sidebar_minimize_state"]) && $_COOKIE["sidebar_minimize_state"] === "on") { 
                    1. "src/js/layout/sidebar.js" adds "sidebar_minimize_state" cookie value to save the sidebar minimize state.
                        2. Set data-kt-app-sidebar-minimize="on" attribute for body tag.
                        3. Set data-kt-toggle-state="active" attribute to the toggle element with "kt_app_sidebar_toggle" id.
                        4. Add "active" class to to sidebar toggle element with "kt_app_sidebar_toggle" id.
                    }
                            -->
        <div id="kt_app_sidebar_toggle"
            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate "
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="app-sidebar-minimize">

            <i class="ki-duotone ki-double-left fs-2 rotate-180"><span class="path1"></span><span
                    class="path2"></span></i> </div>
        <!--end::Sidebar toggle-->
    </div>
    <!--end::Logo-->
    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
            data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
            <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu">
                <!--begin::Menu-->
                <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu"
                        data-kt-menu="true" data-kt-menu-expand="false">
                        <!--begin:Menu item-->
                        
                        <a href="<?php echo $path; ?>admin/Index"><div class="menu-item here">
                            <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                        class="ki-duotone ki-element-11 fs-2"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i></span><span
                                    class="menu-title">Dashboard</span></span>
                           
                        </div></a>
                        <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                    class="ki-duotone ki-address-book fs-2"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span></i></span><span
                                class="menu-title">Client</span><span
                                class="menu-arrow"></span></span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-accordion">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link--><a class="menu-link"
                                    href="<?php echo $path; ?>admin/Client-Creation"><span
                                        class="menu-bullet"><span
                                            class="bullet bullet-dot"></span></span><span
                                        class="menu-title">Client Creation</span></a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link--><a class="menu-link"
                                    href="<?php echo $path; ?>admin/Loan-List"><span
                                        class="menu-bullet"><span
                                            class="bullet bullet-dot"></span></span><span
                                        class="menu-title">Loan List</span></a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->

                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                    class="ki-duotone ki-address-book fs-2"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span></i></span><span
                                class="menu-title">Employee</span><span
                                class="menu-arrow"></span></span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-accordion">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link--><a class="menu-link"
                                    href="<?php echo $path; ?>admin/Emp-Creation"><span
                                        class="menu-bullet"><span
                                            class="bullet bullet-dot"></span></span><span
                                        class="menu-title">Employee Creation</span></a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link--><a class="menu-link"
                                    href="<?php echo $path; ?>admin/Emp-List"><span
                                        class="menu-bullet"><span
                                            class="bullet bullet-dot"></span></span><span
                                        class="menu-title">Employee List</span></a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <a href="<?php echo $path; ?>admin/Pending-Payment">
                        <div class="menu-item here">
                            <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                        class="ki-duotone ki-element-11 fs-2"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i></span><span
                                    class="menu-title">Pending Payment</span></span>
                           
                        </div>
                    </a>
                        <!--end:Menu item-->

                    <a href="<?php echo $path; ?>admin/Report">
                        <div class="menu-item here">
                            <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                        class="ki-duotone ki-element-11 fs-2"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i></span><span
                                    class="menu-title">Report</span></span>
                           
                        </div>
                    </a>
                        <!--end:Menu item-->
                </div>
                 <!--end::Menu-->
                 
                </div>
            
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->
    <!--begin::Footer-->
    <!-- <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
        <a href="https://preview.keenthemes.com/html/metronic/docs"
            class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100"
            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click"
            title="200+ in-house components and 3rd-party plugins">

            <span class="btn-label">
                Docs & Components
            </span>

            <i class="ki-duotone ki-document btn-icon fs-2 m-0"><span class="path1"></span><span
                    class="path2"></span></i> </a>
    </div> -->
    <!--end::Footer-->
</div>
<!--end::Sidebar-->