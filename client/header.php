 <!--begin::Header-->
 <div id="kt_app_header" class="app-header ">
 <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between " id="kt_app_header_container">
                
                <!--begin::Sidebar mobile toggle-->
                <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
                    <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                        <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1"><span class="path1"></span><span class="path2"></span></i>		</div>
                </div>
                <!--end::Sidebar mobile toggle-->
                
            
                <!--begin::Mobile logo-->
                <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                    <a href="index.html" class="d-lg-none">
                        <img alt="Logo" src="<?php echo $path;?>assets/media/logos/logo.png" class="h-60px">
                    </a>
                </div>
                <!--end::Mobile logo-->
            
            <!--begin::Header wrapper-->
            <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
                        
            <!--begin::Menu wrapper-->
            <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">   
                <!--begin::Menu-->
                <div class="
                        menu 
                        menu-rounded  
                        menu-column 
                        menu-lg-row 
                        my-5 
                        my-lg-0 
                        align-items-stretch 
                        fw-semibold
                        px-2 px-lg-0
                    " id="kt_app_header_menu" data-kt-menu="true">        
                    <!--begin:Menu item--><!--end:Menu item--><!--begin:Menu item--><!--end:Menu item--><!--begin:Menu item--><!--end:Menu item--><!--begin:Menu item--><!--end:Menu item--><!--begin:Menu item--><!--end:Menu item-->    </div>
                <!--end::Menu-->
            </div>
            <!--end::Menu wrapper-->
                
                
            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0">
                <!--begin::Search-->
                
                <!--end::Search-->
            
                <!--begin::Activities-->
                
                <!--end::Activities-->    
            
                <!--begin::Notifications-->
                
                <!--end::Notifications-->
            
                <!--begin::Chat-->
                
                <!--end::Chat-->
            
                <!--begin::My apps links-->
                
                <!--end::My apps links-->
            
                <!--begin::Theme mode-->
                
                <!--end::Theme mode-->
                
                <!--begin::User menu-->
                <div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
                    <!--begin::Menu wrapper-->
                    <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <img src="<?php echo $path;?>assets/media/avatars/300-1.jpg" alt="user">
                    </div>
                    
            <!--begin::User account menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true" style="">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <div class="menu-content d-flex align-items-center px-3">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-50px me-5">
                            <img alt="Logo" src="<?php echo $path;?>assets/media/avatars/300-1.jpg">
                        </div>
                        <!--end::Avatar-->
            
                        <!--begin::Username-->
                        <div class="d-flex flex-column">
                            <div class="fw-bold d-flex align-items-center fs-5">
                                <?php echo $_SESSION['client_name'];?>                <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Client</span>
                            </div>
            
                        </div>
                        <!--end::Username-->
                    </div>
                </div>
                <!--end::Menu item-->
            
                
                <!--end::Menu item-->
            
                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <a href="<?php echo $path.'client/logout.php';?>" class="menu-link px-5">
                        Sign Out
                    </a>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::User account menu-->
                    <!--end::Menu wrapper-->
                </div>
                <!--end::User menu-->
            
                <!--begin::Header menu toggle-->
                        <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
                        <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_header_menu_toggle">
                            <i class="ki-duotone ki-element-4 fs-1"><span class="path1"></span><span class="path2"></span></i>            </div>
                    </div>
                    <!--end::Header menu toggle-->
            </div>
            <!--end::Navbar-->	
            </div>
            <!--end::Header wrapper-->            </div>
 </div>
 <!--end::Header-->