<?php
echo'<link rel="stylesheet" href="assets/sweetalert2.css">
    <link rel="stylesheet" href="assets/sweetalert2.min.css">
    <script src="assets/sweetalert2.all.js"></script>
    <script src="assets/sweetalert2.all.min.js"></script>
    <script src="assets/sweetalert2.js"></script>
    <script src="assets/sweetalert2.min.js"></script>';
    
if (isset($_POST['submit']) && isset($_FILES['cmedia'])) {
    include "dbconnect.php";

    $cTitle = $_POST['cTitle'];
    $ccategory = $_POST['ccategory'];
    $ctype = $_POST['ctype'];
    $sdate = $_POST['sdate'];
    $edate = $_POST['edate'];
    $cid = $_POST['cid'];
    $cdesc = $_POST['cdesc'];
//    $ctime = $_POST['ctime'];
    $img_name = $_FILES['cmedia']['name'];
    $img_size = $_FILES['cmedia']['size'];
    $tmp_name = $_FILES['cmedia']['tmp_name'];
    $error = $_FILES['cmedia']['error'];


    if (strtotime($edate) <= strtotime($sdate)) {
        // Return date is earlier than pickup date
        echo'<span></span>';
            $em = "End Date can't be earlier than Start Date.";
            echo '<script type="text/javascript">
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: "'.$em.'",
                    }).then(function() {
                        window.location.href = "admin_announcement.php";
                    });
                </script>';
        exit;
    }

    if ($error === 0) {
        if ($img_size > 10000000) {
            echo'<span></span>';
            $em = "Sorry, your file is too large.";
            echo '<script type="text/javascript">
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: "'.$em.'",
                    }).then(function() {
                        window.location.href = "admin_announcement.php";
                    });
                </script>';
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png"); 

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = 'img/announcement/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                // Insert into Database
                $sql = "INSERT INTO announcement(announce_Type,announce_Category,announce_Title,announce_Media,announce_Desc,announce_Time,announce_Start,announce_End)
                VALUES ('$ctype','$ccategory','$cTitle','$new_img_name','$cdesc',NOW(),'$sdate','$edate')";
                if (mysqli_query($con, $sql)) {
                    echo'<span></span>';
                    $sm = "Announcement added successfully";
                        echo '<script>
                            Swal.fire({
                          title: "Successful!",
                          text: "Announcement Uploaded",
                          icon: "success",
                        }).then(function() {
                            window.location.href = "admin_announcement.php";
                        });
                        </script>';

                } else {
                    echo'<span></span>';
                    $em = "Error adding announcement";
                    echo '<script type="text/javascript">
                        Swal.fire({
                            icon: "error",
                            title: "Error",
                            text: "'.$em.'",
                        }).then(function() {
                            window.location.href = "admin_announcement.php";
                        });
                        </script>';
                }

        }
    }
   } else {
    echo'<span></span>';
        $em = "Unknown Error Occurred!";
        echo '<script type="text/javascript">
                Swal.fire({
                icon: "error",
                title: "Error",
                text: "'.$em.'",
            }).then(function() {
                window.location.href = "admin_announcement.php";
            });
            </script>';
    }
}

?>

 