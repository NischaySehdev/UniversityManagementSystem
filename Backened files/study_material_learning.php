<?php
    include 'connection.php';
    include 'utilities.php';
    if($_SERVER['REQUEST_METHOD']=="POST") {
        $title = $_POST['subjectTitle'];
        $Subject = $_POST['subjectCode'];
        $Programme = $_POST['Programme'];
        $teacher = $_POST['teacher'];
        $link = $_POST['link'];
        $result = $GLOBALS['mysqli'] -> query("INSERT INTO `study_material_learning`(`Programme`, `Subject code`, `Subject name`, `Link`, `Given by`) VALUES ('".$Programme."','".$Subject."','".$title."','".$link."','".$teacher."')");
         if (!$result) {
             echo 'An error occured';
         }
         else{
            header("Location: ../Staff(Learning)/study_material_learning.html");
         }
     }
?>