<?php include('dbconnect.php');?>
<style>

    body {
        margin: 0;
        color: #000;
        background-color: #fff;
    }
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

<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

<?php

$teacherID = $_POST['tID'];
$salaryDate = $_POST['date'];

$sql = "SELECT * FROM teacher_salary WHERE acc_ID='$teacherID' AND salaryDate = '$salaryDate'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

$sql2 = "SELECT * FROM account WHERE acc_ID='$teacherID'";
$result2 = mysqli_query($con, $sql2);
$row2 = mysqli_fetch_array($result2);
$firstName = $row2['fName'];
$lastName = $row2['lName'];

$date=$row['salaryDate'];
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
?>
<body>
    <br><br><br>
    <div class="container">
    <h4 class="card-title">Teacher Payslip <span id='date-year'></span>.</h4>
    <h6 class="text-muted card-subtitle mb-2">Intellect Qalil IQ Playschool, Pulai Mutiara, Johor Bahru</h6>
    <p class="card-text">Tarikh: <?php echo $date ?></p>
    <p class="card-text">Jawatan: Teacher</p>
    <p class="card-text">Nama: <?php echo $firstName. " " .$lastName ?></p>
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
            <td class="tg-mauo"><a >Gaji pokok</a></td>
            <td class="tg-mauo"><?php echo $gajiPokok ?></td>
            <td class="tg-mauo">1</td>
            <td class="tg-mauo"><a >KWSP</a></td>
            <td class="tg-mauo"><?php echo $kwsp ?></td>
        </tr>
        <tr>
            <td class="tg-mauo">2</td>
            <td class="tg-mauo"><a   >Overtime</a></td>
            <td class="tg-mauo"><?php echo $overtime ?></td>
            <td class="tg-mauo">2</td>
            <td class="tg-mauo"><a  >Cuti tanpa Gaji</a></td>
            <td class="tg-mauo"><?php echo $cutiTanpaGaji ?></td>
        </tr>
        <tr>
            <td class="tg-mauo">3</td>
            <td class="tg-mauo"><a  >Elaun Playgroup</a></td>
            <td class="tg-mauo"><?php echo $elaunPlaygroup ?></td>
            <td class="tg-mauo"></td>
            <td class="tg-mauo"></td>
            <td class="tg-tjaw"></td>
        </tr>
        <tr>
            <td class="tg-mauo">4</td>
            <td class="tg-mauo"><a  >Elaun Cuti Umum</a></td>
            <td class="tg-mauo"><?php echo $elaunCutiUmum ?></td>
            <td class="tg-mauo"></td>
            <td class="tg-mauo"></td>
            <td class="tg-tjaw"></td>
        </tr>
        <tr>
            <td class="tg-mauo">5</td>
            <td class="tg-mauo"><a  >Elaun Lebih Masa</a></td>
            <td class="tg-mauo"><?php echo $elaunLebihMasa ?></td>
            <td class="tg-mauo"></td>
            <td class="tg-mauo"></td>
            <td class="tg-tjaw"></td>
        </tr>
        <tr>
            <td class="tg-mauo" colspan="2">Jumlah Pendapatan (RM)</td>
            <td class="tg-mauo"><?php echo $SUM ?></td>
            <td class="tg-mauo" colspan="2">Jumlah Potongan</td>
            <td class="tg-1p52"><?php echo $DEDUCT?></td>
        </tr>
        <tr>
            <td class="tg-rxu2"></td>
            <td class="tg-rxu2"></td>
            <td class="tg-rxu2"></td>
            <td class="tg-2evb" colspan="2">KWSP Majikan (RM)</td>
            <td class="tg-1p52"><?php echo $kwspBoss ?></td>
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
            <td class="tg-tc5o" colspan="3"><span style="font-weight:bold">RM <?php echo $gajiBersih ?></span></td>
        </tr>
        </tbody>
    </table>
</div>
<input id="print" type="button" value="Print Table" onclick="window.print();">
    </div>
</body>
<script>

    function disablePrint() {
        document.getElementById("print").style.visibility = "hidden";
    }

    function enablePrint() {
        document.getElementById("print").style.visibility = "visible";
    }

    window.onbeforeprint = disablePrint;
    window.onafterprint = enablePrint;

</script>



