<?php
    include 'connection.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $employeeCode = $_POST['employeecode'];
        $concern_type=$_POST['concern_type'];
        $servity=$_POST['priority'];
        $message=$_POST['Message'];
        $result = $mysqli->query("INSERT INTO `concern_staff`(`Employee code`, `Concern type`, `Priority`, `Message`) VALUES('".$employeeCode."','".$concern_type."','".$servity."','".$message."')");
        if (!$result->current_field == 0) {
            header("Location: ../Error pages/ConcernNotRaised.html");
        }
        else{
            header("Location: ../Error pages/ConcernIsRaised.html");
        }
    }
?>