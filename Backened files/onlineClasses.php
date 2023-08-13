<?php
include 'connection.php';
include 'utilities.php';
    if($_SERVER['REQUEST_METHOD']=="POST") {
       $title = $_POST['title'];
       $Subject = $_POST['Subject'];
       $Programme = $_POST['Programme'];
       $teacher = $_POST['teacher'];
       $link = $_POST['link'];
       $Date = $_POST['Date'];
       $notificationupload = $_POST['notificationupload'];
       $result = $GLOBALS['mysqli'] -> query("INSERT INTO `online_classes`(`Title`, `Subject code`, `Programme`, `Taken by`, `Link`, `At`) VALUES ('".$title."','".$Subject."','".$Programme."','".$teacher."','".$link."','".$Date."')");
        if (!$result) {
            echo 'An error occured';
        }
        else{
           header("Location: ../Staff(Learning)/online_classes.html");
        }
    }
?>