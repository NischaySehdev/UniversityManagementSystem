<?php
    include 'connection.php';
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        $department=$_POST['department'];
        $staffid=$_POST['staffid'];
        if($department!=null && $staffid!=null){
            $result=mysqli_query($conn, $SELECT_STAFF_PER_INFO_COMMAND."WHERE Staffid=".$staffid." AND Department=".$department);
        }
        elseif ($department!=null && $staffid == null) {
            $result=mysqli_query($conn, $SELECT_STAFF_PER_INFO_COMMAND." WHERE Department=".$department.";");
        }
        elseif ($department == null && $staffid != null) {
            $result=mysqli_query($conn, $SELECT_STAFF_PER_INFO_COMMAND."WHERE Staffid=".$staffid.";");
        }
        else{
            header("location : C:\xampp\htdocs\My projects\Upkarakh(web application)_Old\Error_pages\backened.php?message=".$result.",");
        }   
        // if (!$result) {
        //    $fp = fopen("error.txt", "w");
        //    fwrite($fp, $result);
        //     header("Location : ../Error_pages/Error_page.html");
        // }
        // else{
            $fp_1=fopen("assignment_details","w");
            while ($row = mysqli_fetch_assoc($result)) {
                fwrite($fp_1, strlen($fp_1."\n"));
            }
        // }
    }
?>