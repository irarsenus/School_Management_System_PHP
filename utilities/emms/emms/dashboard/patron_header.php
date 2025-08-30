<div class="nav-header">
            <a href="admin_dash_<?php echo strtolower($_SESSION['post']) ?>.php" class="brand-logo">
                <img class="logo-abbr" style="border-radius: 20px;" src="images/logo.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="profiles/default.png" width="20" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="dos_profile.php" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="dos_messages.php" class="dropdown-item ai-icon">
                                        <i class="bi-wechat h3"></i>
                                        <span class="ml-2">Forum </span>
                                    </a>
                                    <a href="logout.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="ai-icon" href="admin_dash_patron.php" aria-expanded="false">
                            <i class="la la-calendar"></i>
                            <span class="nav-text">Overview</span>
                        </a>
                    </li>
					
                    <li><a class="ai-icon" href="patron_students_select.php" aria-expanded="false">
                            <i class="bi bi-person"></i>
                            <span class="nav-text">Students</span>
                        </a>
                    </li>

                    <li><a class="ai-icon" href="patron_classes.php" aria-expanded="false">
                            <i class="la la-building"></i>
                            <span class="nav-text">Classes</span>
                        </a>
                    </li>

                    <li><a class="ai-icon" href="patron_permissions.php" aria-expanded="false">
                            <i class="bi-p-square"></i>
                            <span class="nav-text">Permissions</span>
                        </a>
                    </li>
                    <span class="text-center" style="border: 2px dotted white; border-right: none; border-left: none;">Custom tables</span>

                    <li><a class="ai-icon" href="patron_tables.php" aria-expanded="false">
                            <i class="bi bi-table"></i>
                            <span class="nav-text">Tables</span>
                        </a>
                    </li>
                    <?php  
                    ?>
				</ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		