<div class="nav-header">
            <a href="student_dash.php" class="brand-logo">
                <img class="logo-abbr" style="border-radius: 20px;" src="images/logo.png" alt="">
            </a>
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
                        <h1 class="text-white" style="font-size: 17px;"><b><?php echo $fname.' '.$lname ?></b></h1>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="images/menu.png" width="20" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="student_marks.php" class="dropdown-item ai-icon">
                                        <i class="bi-journal-bookmark h3"></i>
                                        <span class="ml-2">Marks </span>
                                    </a>

                                    <a href="chatbot.php" class="dropdown-item ai-icon">
                                        <i class="bi-robot h3"></i>
                                        <span class="ml-2">Chat bot </span>
                                    </a>

                                    <a href="logout.php" class="dropdown-item ai-icon">
                                        <i class="bi-door-open h3"></i>
                                        <span class="ml-2">Sign out </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
