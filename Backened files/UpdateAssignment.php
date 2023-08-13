<?php
include 'connection.php';
include 'utilities.php';
include 'constants.php';
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $enrollment_number=$_POST['Enrollement_no'];
        $programme=$_POST['Programme'];
        $study_center=$_POST['Studycenter'];
        $result = "";
        extractingAndSendingForAssignment($mysqli, extractStudentPersonalInfo($enrollment_number, $programme, $study_center));
}    
function extractingAndSendingForAssignment($mysqli, $result)
{
    $row = "";
    while ($row = mysqli_fetch_assoc($result)) {
        $result1 = $mysqli -> query("SELECT * FROM `assignment_status` WHERE `Enrollment number`=".$row['Enrollment number']."");
        sendingData($result1, $row['Full name'], $row['Program'], $row['Semster']);
    }
    header("Location: ../Staff(Assignment)/UpdateAssignment.html");
}
function sendingData($assignmentData, $full_name, $program, $semster){
    $assignments[][] = "";
    $count = 0;
    setcookie("assignmentStart", implode(";", $assignments[$count]), $GLOBALS['COOKIE_TIME'], "/");
    while ($row = mysqli_fetch_assoc($assignmentData)) {
        $assignments[$count]['Full name'] = $full_name;
        $assignments[$count]['Programme'] = $program;
        $assignments[$count]['Semster'] = $semster;
        $assignments[$count]['Enrollment number'] = $row['Enrollment number'];
        $assignments[$count]['Subject code'] = $row['Subject code'];
        $assignments[$count]['Session'] = $row['Session'];
        $assignments[$count]['Marks'] = $row['Marks'];
        $assignments[$count]['File'] = $row['File'];
        $assignments[$count]['Status'] = $row['Status'];
        setcookie("assignmentStart", implode(";", $assignments[$count]), $GLOBALS['COOKIE_TIME'], "/");
        ++$count;
    }
    setcookie("assignmentEnd", null, $GLOBALS['COOKIE_TIME'], "/");
}
?>