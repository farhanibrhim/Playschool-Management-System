<?php include 'dbconnect.php'?>
<?php include 'headerstaff.php' ?>

<link rel="stylesheet" href="assets/bootstrap/css/Articles-Cards-images.css">
<link rel="stylesheet" href="assets/sweetalert2.css">
<link rel="stylesheet" href="assets/sweetalert2.min.css">
<script src="assets/sweetalert2.all.js"></script>
<script src="assets/sweetalert2.all.min.js"></script>
<script src="assets/sweetalert2.js"></script>
<script src="assets/sweetalert2.min.js"></script>

<body id="page-top">
<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="index.php">
                <div class="sidebar-brand-icon "><img src="img/lLogo.png" style="width: 30px; height: 50px;"></div>
                <div class="sidebar-brand-text mx-1"><img src="img/rLogo.png" style="width: 70px; height: 50px;"></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"><a class="nav-link" href="admin_main.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <!--                <li class="nav-item"><a class="nav-link" href="admin_profile.php"><i class="fas fa-user"></i><span>Profile</span></a></li>-->
                <li class="nav-item"><a class="nav-link" href="admin_attendance.php"><i class="fas fa-table"></i><span>Attendance</span></a></li>
                <li class="nav-item"><a class="nav-link" href="admin_announcement.php"><i class="far fa-user-circle"></i><span>Announcement</span></a></li>
                <li class="nav-item"><a class="nav-link active" href="admin_activity.php"><i class="far fa-user-circle"></i><span>Activity</span></a></li>
                <li class="nav-item"><a class="nav-link" href="admin_assessment.php"><i class="fas fa-user-circle"></i><span>Assessment</span></a></li>
                <li class="nav-item"><a class="nav-link" href="financial(Admin)menu.php"><i class="fas fa-user-circle"></i><span>Financial</span></a></li>
                <li class="nav-item"><a class="nav-link" href="admin_pending.php"><i class="fas fa-user-circle"></i><span>Pending request</span></a></li>
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn border-0 rounded-circle" id="sidebarToggle" type="button"></button></div>
        </div>
    </nav>

    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <!--                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">-->
                    <!--                            <div class="input-group"><input class="bg-light border-0 form-control form-control small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>-->
                    <!--                        </form>-->
                    <ul class="navbar-nav flex-nowrap ms-auto">
                        <!--                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>-->
                        <!--                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">-->
                        <!--                                    <form class="me-auto navbar-search w-100">-->
                        <!--                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">-->
                        <!--                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>-->
                        <!--                                        </div>-->
                        <!--                                    </form>-->
                        <!--                                </div>-->
                        <!--                            </li>-->
                        <!--                            <li class="nav-item dropdown no-arrow mx-1">-->
                        <!--                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>-->
                        <!--                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">-->
                        <!--                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">-->
                        <!--                                            <div class="me-3">-->
                        <!--                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>-->
                        <!--                                            </div>-->
                        <!--                                            <div><span class="small text-gray-500">December 12, 2019</span>-->
                        <!--                                                <p>A new monthly report is ready to download!</p>-->
                        <!--                                            </div>-->
                        <!--                                        </a><a class="dropdown-item d-flex align-items-center" href="#">-->
                        <!--                                            <div class="me-3">-->
                        <!--                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>-->
                        <!--                                            </div>-->
                        <!--                                            <div><span class="small text-gray-500">December 7, 2019</span>-->
                        <!--                                                <p>$290.29 has been deposited into your account!</p>-->
                        <!--                                            </div>-->
                        <!--                                        </a><a class="dropdown-item d-flex align-items-center" href="#">-->
                        <!--                                            <div class="me-3">-->
                        <!--                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>-->
                        <!--                                            </div>-->
                        <!--                                            <div><span class="small text-gray-500">December 2, 2019</span>-->
                        <!--                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>-->
                        <!--                                            </div>-->
                        <!--                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </li>-->

                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow">
                            <div class="nav-item dropdown no-arrow">
                                <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                    <span class="d-none d-lg-inline me-2 text-gray-600 small"><?php echo  $_SESSION['firstName']. "   " .$_SESSION['lastName'] ?></span>
                                    <img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                    <a class="dropdown-item" href="admin_profile.php"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                    <!--                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a>-->
                                    <!--                                    <a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>-->
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--ACTIVITY-->
            <?php

            $sql = "SELECT * FROM announcement
                            LEFT JOIN announcement_type_desc ON announcement.announce_Type = announcement_type_desc.announce_Type
                            LEFT JOIN announcement_category_desc ON announcement.announce_Category = announcement_category_desc.announce_Category";

            $result = mysqli_query($con, $sql);

            ?>
            <div class="container py-4 py-xl-5">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h2>Activity</h2>
                        <p class="w-lg-50">Amazing & Fun Activities Every Friday!</p>
                    </div>
                </div>
                <div style="text-align: left;padding-bottom: 20px;"><button class="btn btn-success" type="button" style="height: 47px;" data-bs-target="#modal-2" data-bs-toggle="modal"><svg class="bi bi-plus-circle" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
                        </svg> &quot; Create an Activity &quot;</button>
                </div>
                <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                    <?php
                    while($row = mysqli_fetch_array($result))
                    {
                        $datetime = new DateTime($row['announce_Time']);

                        if(($row["announce_Type"] == '2') && ($row["announce_Category"] == '0' || $row["announce_Category"] == '1' || $row["announce_Category"] == '2' ))
                        {
                            echo '<div class="col">';
                            echo"<div class='card' style='min-height: 500px'><img id='cmedia".$row['announce_Media']." class='card-img-top w-100 d-block card-img-top w-100 fit-cover' style='height:200px;'' src='img/announcement/".$row['announce_Media']."'>";
                            echo'<div class="card-body p-4">';
                            echo'<h4 id="cTitle'.$row['announce_Title'].'" class="card-title" style="max-height: 150px; overflow:hidden;">'.$row["announce_Title"].'</h4>';
                            echo'<p id="ctime'.$row['announce_Time'].'" class="text-primary card-text mb-0">'.$datetime->format('g:i A').'</p>';
                            echo'<p id="sdate'.$row['announce_Start'].'" class="text-primary card-text mb-0">Start Event: '.$row["announce_Start"].'</p>';
                            echo'<p id="edate'.$row['announce_End'].'" class="text-primary card-text mb-0">End Event: '.$row["announce_End"].'</p>';
                            echo'<p id="cdesc'.$row['announce_Desc'].'" class="card-text" style="word-wrap: break-word; min-height: 3.5em; text-overflow: ellipsis; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; line-clamp: 3; -webkit-box-orient: vertical;">'.$row["announce_Desc"].'</p>';
                            echo'<div class="d-flex"><div>';
                            echo'<p class="fw-bold mb-0"></p>'; /* RETRIEVE VALUE TEACHER NAME */
                            echo'</div>';
                            echo'<form>';
                            echo'<fieldset>
                                    <input type="hidden" name="cid" value="'.$row['announce_ID'].'">
                                </fieldset>';
                            echo'<div style="text-align: right;">';
                            echo'<button type="button" class="btn btn-danger" onclick="confirmDelete('.$row['announce_ID'].')">Delete</button>';
                            echo ' <button style="margin-right: 10px; " class="btn btn-warning" value="Submit" type="button" onclick="location.href=\'modifyactivity.php?aa_id='.$row['announce_ID'].'\'">Modify</button>';
                            echo'</div>';
                            echo'</form>';
                            echo'</div>';
                            echo'</div>';
                            echo'</div>';
                            echo'</div>';
                        }
                    }
                    ?>
                </div>
            </div>

            <?php include('createActmodal.php'); ?>
            <script>
                function confirmDelete(aa_id) {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = 'deleteactivity.php?aa_id=' + aa_id;
                        }
                    });

                }
            </script>
            <!--ACTIVITY-->
        </div>

    </div><a class="d-inline border rounded scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>

</div>
<script src="assets/js/chart.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="assets/js/theme.js"></script>
</body>

<?php include 'footersecond.php' ?>
