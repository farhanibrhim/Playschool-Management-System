<?php 
    include('dbconnect.php'); 

echo'<link rel="stylesheet" href="assets/sweetalert2.css">
    <link rel="stylesheet" href="assets/sweetalert2.min.css">
    <script src="assets/sweetalert2.all.js"></script>
    <script src="assets/sweetalert2.all.min.js"></script>
    <script src="assets/sweetalert2.js"></script>
    <script src="assets/sweetalert2.min.js"></script>';

    $teacherID = $_GET['acc_ID'];
    $salaryDate = $_GET['salaryDate'];
    
    $sql = "DELETE FROM teacher_salary
            WHERE acc_ID = '$teacherID' AND salaryDate = '$salaryDate'";

    $result = mysqli_query($con, $sql);

    if(!$result){
        die("MySQL query failed!" .mysqli_error($con));
    }
    else{
        if($result) {
        echo'<span></span>';
        $sm = "Pay Slip deleted successfully";
        echo '<script>
                Swal.fire({
                title: "Successful!",
                text: "'.$sm.'",
                icon: "success",
                }).then(function() {
                    window.location.href = "admin_salary_view.php";
                });
            </script>';
        }
    }

?>
