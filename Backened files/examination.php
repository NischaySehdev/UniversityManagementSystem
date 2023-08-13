<?php
    include 'connection.php';
    include 'utilities.php';
    if($_SERVER['REQUEST_METHOD']=="POST") {
        $subject_code = $_POST['subject'];
        $programme = $_POST['Programme'];
        $Enrollment_number = $_POST['Enrollment_number'];
        extractingAndSendingExaminationInformation($mysqli, extractStudentPersonalInfo($Enrollment_number, $programme), $subject_code);
}

function extractingAndSendingExaminationInformation($mysqli, $result, $subject_code)
{
    $studentExaminationInformation[][] = "";
    $count = 0;
    setcookie("subjectStart", "", time() + 60, "/");
    while ($row = mysqli_fetch_assoc($result)) {
        $result_temp = $GLOBALS['mysqli'] -> query("SELECT * FROM `term_end_result_2022` WHERE `course_code`=".$subject_code);
        while ($row_temp = mysqli_fetch_assoc($result_temp)) {
            $studentExaminationInformation[$count]['Enrollment_number'] = $row_temp['Enrollment_number'];;
            $studentExaminationInformation[$count]['Marks'] = $row_temp['Marks'];
            $studentExaminationInformation[$count]['Checked by'] = $row_temp['Checked by'];
            $studentExaminationInformation[$count]['max_marks'] = $row_temp['max_marks'];
            $studentExaminationInformation[$count]['Last_update'] = $row_temp['Updated time'];
            setcookie("SubjectStart", implode(";", $studentExaminationInformation[$count]), time() + 60, "/");
            ++$count;    
        }
    }
    setcookie("subjectEnd", "", time() + 60, "/");
}
?>