<?php
    include 'connection.php';
    include 'utilities.php';
    if ($_SERVER['REQUEST_METHOD']=="POST") {

        $action = $_POST['checkForAction'];
        $Programme=$_POST['Programme'];
        $Studycenter=$_POST['Studycenter'];
        $Enrollement_no=$_POST['Enrollment_number'];

        if ($action == "subjectFetchingProcess") {
            fillSubjects($Programme);
            header("Location : ../Staff(Concern_resolver)/assignment.html");
        }
        // $result = $GLOBALS['mysqli'] -> query("SELECT * FROM `assignment_status` WHERE PROGRAMME=".$Programme." AND STUDYCENTER=".$Studycenter."AND ENROLLEMENT_NUMBER=".$Enrollement_no);
        // if (!$result) {
            
        // }
        // else{
        //     while ($row = mysqli_fetch_assoc($result)) {
        //         # code...
        //     }
        //     setcookie()
        // }
    }
?>