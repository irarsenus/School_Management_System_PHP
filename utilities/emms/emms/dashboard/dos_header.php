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
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell ai-icon" href="#" role="button" data-toggle="dropdown">
                                    <svg id="icon-user" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
										<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
										<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
									</svg>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                    <?php  
                                    $notSelect = mysqli_query($con, "SELECT * FROM staffpermissions WHERE approved=''");
                                        if (mysqli_num_rows($notSelect)) {
                                        while ($notRow = mysqli_fetch_assoc($notSelect)) {
                                            $userId = $notRow['teacher'];
                                    ?>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>
                                                        <?php  
                                                          $notteacher = mysqli_query($con, "SELECT * FROM staff WHERE userId='{$userId}'");
                                                          $notname = mysqli_fetch_assoc($notteacher);
                                                          echo $notname['firstName'].' '.$notname['lastName'];
                                                          ?>
                                                    </strong> requested a Permision.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">
                                                <?php echo $notRow['depatureDate'] ?>
                                            </span>
                                        </li>
                                        <?php }}else{echo "<li class='media dropdown-item'>No notifications at this moment</li>";} ?>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
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
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
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
                    <li><a class="ai-icon" href="admin_dash_dos.php" aria-expanded="false">
                            <i class="la la-calendar"></i>
                            <span class="nav-text">Overview</span>
                        </a>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-user"></i>
							<span class="nav-text">Teachers</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="teachers.php">All Teachers</a></li>
                            <li><a href="add_teacher.php">Add Teachers</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">Students</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="students_select.php">All Students</a></li>
                            <li><a href="num_students.php">Add Students</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-graduation-cap"></i>
							<span class="nav-text">Modules</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="modules.php">All Modules</a></li>
                            <li><a href="num_modules.php">Add Modules</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-building"></i>
                            <span class="nav-text">Classes</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="classes.php">All Classes</a></li>
                            <li><a href="add_class.php">Add Classes</a></li>
                        </ul>
                    </li>
                    <li><a class="ai-icon" href="marks_select.php" aria-expanded="false">
                            <i class="bi bi-journal-text"></i>
                            <span class="nav-text">Marks</span>
                        </a>
                    </li>

                    <li><a class="ai-icon" href="dos_timetables.php" aria-expanded="false">
                            <i class="bi bi-table"></i>
                            <span class="nav-text">TimeTables</span>
                        </a>
                    </li>

                    <li><a class="ai-icon" href="dos_announcements.php" aria-expanded="false">
                            <i class="bi bi-megaphone"></i>
                            <span class="nav-text">Announcements</span>
                        </a>
                    </li>
				</ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		