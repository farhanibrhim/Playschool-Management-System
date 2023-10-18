<?php
include('dbconnect.php');

$teacherID = $_POST['tID'];
$salaryDate = $_POST['date'];

?>

<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }

    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        border: 1px solid #888;
        width: 80%;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s
    }

    /* Add Animation */
    @-webkit-keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
    }

    @keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
    }

    /* The Close Button */
    .close {
        color: white;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .modal-header {
        padding: 2px 16px;
        background-color: #5cb85c;
        color: white;
    }

    .modal-body {padding: 2px 16px;}

    .modal-footer {
        padding: 2px 16px;
        background-color: #5cb85c;
        color: white;
    }

    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
        overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
        font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg .tg-hx5l{border-color:#ffffff;color:#dae8fc;text-align:left;vertical-align:middle}
    .tg .tg-tjaw{background-color:#ecf4ff;border-color:inherit;color:#656565;text-align:left;vertical-align:bottom}
    .tg .tg-tc5o{background-color:#365dcd;border-color:#000000;color:#c0c0c0;font-weight:bold;text-align:center;vertical-align:bottom}
    .tg .tg-rxu2{background-color:#ecf4ff;border-color:#ffffff;color:#656565;text-align:left;vertical-align:middle}
    .tg .tg-1p52{background-color:#ecf4ff;border-color:inherit;color:#656565;text-align:center;vertical-align:bottom}
    .tg .tg-mauo{background-color:#ecf4ff;border-color:inherit;color:#656565;text-align:center;vertical-align:middle}
    .tg .tg-2evb{background-color:#365dcd;border-color:#000000;color:#c0c0c0;text-align:center;vertical-align:middle}
    .tg .tg-2w4c{background-color:#365dcd;border-color:inherit;color:#c0c0c0;font-weight:bold;text-align:center;vertical-align:bottom}
    .tg .tg-iaeq{background-color:#365dcd;border-color:inherit;color:#c0c0c0;font-weight:bold;text-align:center;vertical-align:middle}
    .tg .tg-2ok1{border-color:#ffffff;color:#dae8fc;text-align:left;vertical-align:bottom}
</style>

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

<body><body id="page-top">
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
            <!--  TOP BAR  -->
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
            <!--                main-->
            <div class="card">
                <form method="post" action="admin_salaryeditprocess.php">
                <div class="card-body">
                    <h1><strong>Edit Teacher Payslip</strong></h1>
                    <h4 class="card-title">Teacher Payslip <span id='date-year'></span>.</h4>
                    <h6 class="text-muted card-subtitle mb-2">Intellect Qalil IQ Playschool, Pulai Mutiara, Johor Bahru</h6>
                    <p class="card-text">Date: <span id='date-date'></span></p>
                    <p class="card-text"></p>

                    <div class="col-md-3">

                            <?php
                            $sql = "SELECT * FROM teacher_salary WHERE acc_ID='$teacherID' AND salaryDate = '$salaryDate'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);

                            $date=$row['salaryDate'];
                            echo $date;
                            $gajiPokok=$row['defaultSalary'];
                            $kwsp=$row['kwspTeacher'];
                            $overtime=$row['overtimeTotal'];
                            $cutiTanpaGaji=$row['dayOffTotal'];
                            $elaunPlaygroup=$row['allowancePGTotal'];
                            $elaunCutiUmum=$row['allowanceCutiTotal'];
                            $elaunLebihMasa=$row['allowanceOTTotal'];
                            $kwspBoss=$row['kwspBoss'];
                            $SUM= $gajiPokok + $overtime + $elaunPlaygroup + $elaunCutiUmum + $elaunLebihMasa;
                            $DEDUCT= $kwsp + $cutiTanpaGaji;
                            $gajiBersih= $SUM - $DEDUCT;

                            $sql1 = "SELECT * FROM account WHERE acc_ID='$teacherID'";
                            $result1 = mysqli_query($con, $sql1);
                            echo '<select class="form-select" name="teacher" id="exampleSelect1">';
                            while($row1 = mysqli_fetch_array($result1)){
                                echo"<option value = '".$row1['acc_ID']."'>".$row1['fName']."  ".$row1['lName']."</option>";
                            }
                            echo '</select>';
                            ?>


                    </div><br>
                    <div class="table-responsive">

                        <table class="tg table table-responsive table-hover">
                            <thead>
                            <tr>
                                <th class="tg-2w4c" colspan="3"><span style="font-weight:bold">Pendapatan</span></th>
                                <th class="tg-2w4c" colspan="3">Potongan</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="tg-iaeq"><span style="font-weight:bold">Bil</span></td>
                                <td class="tg-iaeq"><span style="font-weight:bold">Butiran</span></td>
                                <td class="tg-iaeq"><span style="font-weight:bold">Jumlah (RM)</span></td>
                                <td class="tg-iaeq"><span style="font-weight:bold">Bil</span></td>
                                <td class="tg-iaeq"><span style="font-weight:bold">Butiran</span></td>
                                <td class="tg-iaeq"><span style="font-weight:bold">Jumlah (RM)</span></td>
                            </tr>
                            <tr>
                                <td class="tg-mauo">1</td>
                                <td class="tg-mauo"><a class="modal-button" href="#gajiPokok">Gaji pokok</a>

                                    <!-- The Modal -->
                                    <div id="gajiPokok" class="modal">

                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <span class="close">×</span>
                                                <h2>Modal Header</h2>
                                            </div>
                                            <div class="modal-body">
                                                <p>Some text in the Modal Body</p>
                                                <p>Some other text...</p>
                                            </div>
                                            <div class="modal-footer">
                                                <h3>Modal Footer</h3>
                                            </div>
                                        </div>

                                    </div>

                                </td>
                                <td class="tg-mauo"><input type="number" name="gaji_pokok" value="<?php echo "$gajiPokok"; ?>"/></td>
                                <td class="tg-mauo">1</td>
                                <td class="tg-mauo"><a class="modal-button" href="#KWSP">KWSP</a>

                                    <!-- The Modal -->
                                    <div id="KWSP" class="modal">

                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <span class="close">×</span>
                                                <h2>Modal Header</h2>
                                            </div>
                                            <div class="modal-body">
                                                <p>Some text in the Modal Body</p>
                                                <p>Some other text...</p>
                                            </div>
                                            <div class="modal-footer">
                                                <h3>Modal Footer</h3>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                                <td class="tg-mauo"><input type="number" name="_kwsp" value="<?php echo "$kwsp"; ?>"/></td>
                            </tr>
                            <tr>
                                <td class="tg-mauo">2</td>
                                <td class="tg-mauo"><a class="modal-button" href="#overtime">Overtime</a>

                                    <!-- The Modal -->
                                    <div id="overtime" class="modal">

                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <span class="close">×</span>
                                                <h2>Modal Header</h2>
                                            </div>
                                            <div class="modal-body">
                                                <p>Some text in the Modal Body</p>
                                                <p>Some other text...</p>
                                            </div>
                                            <div class="modal-footer">
                                                <h3>Modal Footer</h3>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                                <td class="tg-mauo"><input type="number" name="_overtime" value="<?php echo "$overtime"; ?>"/></td>
                                <td class="tg-mauo">2</td>
                                <td class="tg-mauo"><a class="modal-button" href="#cuti">Cuti tanpa Gaji</a>

                                    <!-- The Modal -->
                                    <div id="cuti" class="modal">

                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <span class="close">×</span>
                                                <h2>Modal Header</h2>
                                            </div>
                                            <div class="modal-body">
                                                <p>Some text in the Modal Body</p>
                                                <p>Some other text...</p>
                                            </div>
                                            <div class="modal-footer">
                                                <h3>Modal Footer</h3>
                                            </div>
                                        </div>

                                    </div></td>
                                <td class="tg-mauo"><input type="number" name="cuti_tanpa_gaji" value="<?php echo "$cutiTanpaGaji"; ?>"/></td>
                            </tr>
                            <tr>
                                <td class="tg-mauo">3</td>
                                <td class="tg-mauo"><a class="modal-button" href="#elaunPG">Elaun Playgroup</a>

                                    <!-- The Modal -->
                                    <div id="elaunPG" class="modal">

                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <span class="close">×</span>
                                                <h2>Modal Header</h2>
                                            </div>
                                            <div class="modal-body">
                                                <p>Some text in the Modal Body</p>
                                                <p>Some other text...</p>
                                            </div>
                                            <div class="modal-footer">
                                                <h3>Modal Footer</h3>
                                            </div>
                                        </div>

                                    </div></td>
                                <td class="tg-mauo"><input type="number" name="elaun_pg" value="<?php echo "$elaunPlaygroup"; ?>"/></td>
                                <td class="tg-mauo"></td>
                                <td class="tg-mauo"></td>
                                <td class="tg-tjaw"></td>
                            </tr>
                            <tr>
                                <td class="tg-mauo">4</td>
                                <td class="tg-mauo"><a class="modal-button" href="#elaunCuti">Elaun Cuti Umum</a>

                                    <!-- The Modal -->
                                    <div id="elaunCuti" class="modal">

                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <span class="close">×</span>
                                                <h2>Modal Header</h2>
                                            </div>
                                            <div class="modal-body">
                                                <p>Some text in the Modal Body</p>
                                                <p>Some other text...</p>
                                            </div>
                                            <div class="modal-footer">
                                                <h3>Modal Footer</h3>
                                            </div>
                                        </div>

                                    </div></td>
                                <td class="tg-mauo"><input type="number" name="elaun_cuti" value="<?php echo "$elaunCutiUmum"; ?>"/></td>
                                <td class="tg-mauo"></td>
                                <td class="tg-mauo"></td>
                                <td class="tg-tjaw"></td>
                            </tr>
                            <tr>
                                <td class="tg-mauo">5</td>
                                <td class="tg-mauo"><a class="modal-button" href="#elaunOT">Elaun Lebih Masa</a>

                                    <!-- The Modal -->
                                    <div id="elaunOT" class="modal">

                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <span class="close">×</span>
                                                <h2>Modal Header</h2>
                                            </div>
                                            <div class="modal-body">
                                                <p>Some text in the Modal Body</p>
                                                <p>Some other text...</p>
                                            </div>
                                            <div class="modal-footer">
                                                <h3>Modal Footer</h3>
                                            </div>
                                        </div>

                                    </div></td>
                                <td class="tg-mauo"><input type="number" name="elaun_overtime" value="<?php echo "$elaunLebihMasa"; ?>"/></td>
                                <td class="tg-mauo"></td>
                                <td class="tg-mauo"></td>
                                <td class="tg-tjaw"></td>
                            </tr>
                            <tr>
                                <td class="tg-mauo" colspan="2">Jumlah Pendapatan (RM)</td>
                                <td class="tg-mauo"></td>
                                <td class="tg-mauo" colspan="2">Jumlah Potongan</td>
                                <td class="tg-1p52"></td>
                            </tr>
                            <tr>
                                <td class="tg-rxu2"></td>
                                <td class="tg-rxu2"></td>
                                <td class="tg-rxu2"></td>
                                <td class="tg-2evb" colspan="2">KWSP Majikan (RM)</td>
                                <td class="tg-1p52"><input type="number" name="kwsp_majikan" value="<?php echo "$kwspBoss"; ?>"/></td>
                            </tr>
                            <tr>
                                <td class="tg-hx5l"></td>
                                <td class="tg-hx5l"></td>
                                <td class="tg-hx5l"></td>
                                <td class="tg-tc5o" colspan="3"><span style="font-weight:bold">Gaji Bersih</span></td>
                            </tr>
                            <tr>
                                <td class="tg-2ok1"></td>
                                <td class="tg-2ok1"></td>
                                <td class="tg-2ok1"></td>
                                <td class="tg-tc5o" colspan="3"><span style="font-weight:bold">RMXXX</span></td>
                            </tr>
                            </tbody>
                        </table>
                            <input type="hidden" value="<?php echo $date; ?>" name="date">
                            <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Generate" name="submit">
                    </div>
                </div>
                </form>
            </div>

        </div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © Brand 2023</span></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>



<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/chart.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="assets/js/theme.js"></script>
<script> // Get the modal
    // Get the button that opens the modal
    var btn = document.querySelectorAll("a.modal-button");

    // All page modals
    var modals = document.querySelectorAll('.modal');

    // Get the <span> element that closes the modal
    var spans = document.getElementsByClassName("close");

    // When the user clicks the button, open the modal
    for (var i = 0; i < btn.length; i++) {
        btn[i].onclick = function(e) {
            e.preventDefault();
            modal = document.querySelector(e.target.getAttribute("href"));
            modal.style.display = "block";
        }
    }

    // When the user clicks on <span> (x), close the modal
    for (var i = 0; i < spans.length; i++) {
        spans[i].onclick = function() {
            for (var index in modals) {
                if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
            }
        }
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target.classList.contains('modal')) {
            for (var index in modals) {
                if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
            }
        }
    }

      // get date
let date = new Date();
let year = date.getFullYear();
let month = date.getMonth() + 1; // add 1 to get the correct month value
let day = date.getDate();

if (day < 10) {
    day = '0' + day;
}

// set DAY-MONTH-YEAR format
let formatDate = day + "/" + month + "/" + year;
document.getElementById('date-year').innerHTML = year;
document.getElementById('date-date').innerHTML = formatDate;
</script>
</body>
</body>

</html>