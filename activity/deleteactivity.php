<?php 
    include('dbconnect.php'); 

    if(isset($_GET['aa_id']))
    {
        $cid = $_GET['aa_id'];
    }

    $sql = "UPDATE announcement 
            SET  announce_Category='3'
            WHERE announce_ID = '$cid'";

    echo'<link rel="stylesheet" href="assets/sweetalert2.css">
    <link rel="stylesheet" href="assets/sweetalert2.min.css">
    <script src="assets/sweetalert2.all.js"></script>
    <script src="assets/sweetalert2.all.min.js"></script>
    <script src="assets/sweetalert2.js"></script>
    <script src="assets/sweetalert2.min.js"></script>';

    if (mysqli_query($con, $sql)) {
                    echo'<span></span>';
                    $sm = "Activity deleted successfully";
                        echo '<script>
                            Swal.fire({
                          title: "Successful!",
                          text: "Activity Deleted",
                          icon: "success",
                        }).then(function() {
                            window.location.href = "admin_activity.php";
                        });
                        </script>';
                        mysqli_close($con);

                }
?>
