<?php
include ('dbconnect.php');

echo'<link rel="stylesheet" href="assets/sweetalert2.css">
    <link rel="stylesheet" href="assets/sweetalert2.min.css">
    <script src="assets/sweetalert2.all.js"></script>
    <script src="assets/sweetalert2.all.min.js"></script>
    <script src="assets/sweetalert2.js"></script>
    <script src="assets/sweetalert2.min.js"></script>';


    if (isset($_POST["submit"])) {
        $teacherID = $_POST['teacher'];
        $defaultSalary = $_POST['gaji_pokok'];
        $KWSP = $_POST['_kwsp'];
        $overtime = $_POST['_overtime'];
        $dayOff = $_POST['cuti_tanpa_gaji'];
        $allowancePG = $_POST['elaun_pg'];
        $allowanceCuti = $_POST['elaun_cuti'];
        $allowanceOT = $_POST['elaun_overtime'];
        $KWSPboss = $_POST['kwsp_majikan'];
        $currDate = $_POST['date'];
    
        // Check if a payslip already exists for the current month and teacher
        $sql = "SELECT * FROM teacher_salary WHERE acc_ID = '$teacherID' AND MONTH(salaryDate) = MONTH('$currDate') AND YEAR(salaryDate) = YEAR('$currDate')";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            // A payslip already exists for the current month
            echo'<span></span>';
            $sm = "Salary already has been generated";
            echo '<script>
                    Swal.fire({
                    title: "UnSuccessful!",
                    text: "'.$sm.'",
                    icon: "error",
                    }).then(function() {
                        window.location.href = "admin_salary.php";
                    });
                </script>';
        } else {
            // Insert the new payslip record
            $sql1 = "INSERT INTO teacher_salary (acc_ID, salaryDate, defaultSalary, overtimeTotal, allowancePGTotal, dayOffTotal, allowanceCutiTotal, allowanceOTTotal, kwspTeacher, kwspBoss) 
                    VALUES ('$teacherID', '$currDate','$defaultSalary', '$overtime', '$allowancePG', '$dayOff', '$allowanceCuti', '$allowanceOT', '$KWSP', '$KWSPboss')";
            $result1 = mysqli_query($con, $sql1);
            if ($result1) {
                // Payslip record inserted successfully
                echo'<span></span>';
                $sm = "Salary generated successfully";
                echo '<script>
                        Swal.fire({
                        title: "Successful!",
                        text: "'.$sm.'",
                        icon: "success",
                        }).then(function() {
                            window.location.href = "admin_salary_view.php";
                        });
                </script>';
            } else {
                // Error inserting payslip record
                echo'<span></span>';
                $sm = "Salary generated unsuccessfully";
                echo '<script>
                        Swal.fire({
                        title: "UnSuccessful!",
                        text: "'.$sm.'",
                        icon: "error",
                        }).then(function() {
                            window.location.href = "admin_salary.php";
                        });
                    </script>';
            }
        }
    }

?>

