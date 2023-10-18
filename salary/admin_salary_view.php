<?php
include('dbconnect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Financial - Parent</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <script type="text/javascript" src="assets/js/javascript.js"></script>
    <link rel="stylesheet" href="assets/sweetalert2.css">
    <link rel="stylesheet" href="assets/sweetalert2.min.css">
    <script src="assets/sweetalert2.all.js"></script>
    <script src="assets/sweetalert2.all.min.js"></script>
    <script src="assets/sweetalert2.js"></script>
    <script src="assets/sweetalert2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>

<body id="page-top">
<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <!--  LEFT SIDEBAR  -->
        <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <div class="sidebar-brand-icon "><img src="img/lLogo.png" style="width: 30px; height: 50px;"></div>
                <div class="sidebar-brand-text mx-1"><img src="img/rLogo.png" style="width: 70px; height: 50px;"></div>

            </a>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"><a class="nav-link" href="admin_main.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
<!--                <li class="nav-item"><a class="nav-link" href="admin_profile.php"><i class="fas fa-user"></i><span>Profile</span></a></li>-->
                <li class="nav-item"><a class="nav-link" href="admin_attendance.php"><i class="fas fa-table"></i><span>Attendance</span></a></li>
                <li class="nav-item"><a class="nav-link" href="admin_announcement.php"><i class="far fa-user-circle"></i><span>Announcement</span></a></li>
                <li class="nav-item"><a class="nav-link" href="admin_activity.php"><i class="far fa-user-circle"></i><span>Activity</span></a></li>
                <li class="nav-item"><a class="nav-link" href="admin_assessment.php"><i class="fas fa-user-circle"></i><span>Assessment</span></a></li>
                <li class="nav-item"><a class="nav-link active" href="financial(Admin)menu.php"><i class="fas fa-user-circle"></i><span>Financial</span></a></li>
                <li class="nav-item"><a class="nav-link" href="admin_pending.php"><i class="fas fa-user-circle"></i><span>Pending request</span></a></li>
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
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
            <!--START TEMPLATE-->
            <div class="container-fluid">
                <h3 class="text-dark mb-1">Teacher Payslip</h3>
            </div>
            <div>
                <section class="mt-4"><div class="container-fluid">
                        <div class="row"><div class="col">
                                <div class="card shadow">
                                    <div class="card-header py-2">
                                        <p class="lead text-info m-0">Teacher Payslip List<br></p>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive table mb-0 pt-3 pe-2">
                                            <div>
                                                <table class="table table-striped table-sm my-0 mydatatable">
                                                    <thead>
                                                    <tr>
                                                        <th>Teacher Name</th>
                                                        <th>Month / Year</th>
                                                        <th>Payslip</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $query = "SELECT * FROM teacher_salary
                                                              LEFT JOIN account a on teacher_salary.acc_ID = a.acc_ID
                                                              ORDER BY salaryDate DESC, fName ASC ";
                                                    $result = mysqli_query($con, $query);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        $tarikh = $row['salaryDate'];
                                                        $newDate = date("F Y", strtotime($tarikh));

                                                        echo "<tr>";
                                                        echo "<td>".$row['fName']." ".$row['mName']." ".$row['lName']."</td>";
                                                        echo "<td>" . $newDate . "</td>";

                                                        echo '<td> <form method="POST" action="salary_print.php" target="_blank" style="display: inline-block;">
                                                                    <input type="hidden" name="tID" value=' . $row['acc_ID'] . '>
                                                                    <input type="hidden" name="date" value=\''.$row['salaryDate'].'\'>
                                                                    <input class="btn btn-primary" data-bss-hover-animate="pulse" style="margin-left:5px;" type="submit" value="View" />
                                                                    </form>
                                                                    <form method="POST" action="admin_salary_edit.php" style="display: inline-block;">
                                                                    <input type="hidden" name="tID" value=' . $row['acc_ID'] . '>
                                                                    <input type="hidden" name="date" value=' . $row['salaryDate'] . '>
                                                                    <input class="btn btn-warning" data-bss-hover-animate="pulse" type="submit" value="Edit" />
                                                                    </form>
                                                                    <button type="button" class="btn btn-danger" onclick="confirmDelete('.$row['acc_ID'].', \''.$row['salaryDate'].'\')">Delete</button></td>';
                                                        echo "</tr>";
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div><br>
                                        </div><br>
                                    </div><a class="btn btn-primary btn-sm text-truncate shadow-none float-end tenant-continue-btn" role="button" href="financial(Admin)menu.php" style="height: 51px;margin: 6px;padding: 11px 8px;">Financial Menu  &nbsp;<i class="fas fa-home continue-icon"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<!--    MAIN-->

<!--    ENDMAIN-->

<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/chart.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="assets/js/theme.js"></script>
<script>
              function confirmDelete(acc_ID, salaryDate) {
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
                      window.location.href = 'admin_salarydeleteprocess.php?acc_ID=' + acc_ID + '&salaryDate=' + salaryDate;
                    }
                  });
                }
            </script>
</body>


</html>