<?php
    include 'connection.php';
    include 'utilities.php';
    if($_SERVER['REQUEST_METHOD']=="POST") {
      $Enrollment_number = $_POST['Enrollment_number'];
      $studycenter = $_POST['Studycenter'];
      $programme = $_POST['Programme'];
      extractingAndSendingForPersonalInformation($mysqli, extractStudentPersonalInfo($Enrollment_number, $programme, $studycenter));
}
function extractingAndSendingForPersonalInformation($mysqli, $result)
{
    $row = "";
    while ($row = mysqli_fetch_assoc($result)) {
        sendingData($row['Full name'], $row['Program'], $row['Semster'], $row['Enrollment number'], $row['Email id'], $row['Phone number'], $row['Study center'] );
    }
    header("Location: ../common/StudentPersonalInformationPanel.html");
}

function sendingData($full_name, $program, $semster, $enrollment_number, $email_id, $phone_number, $studycenter){
  $personalInformation[][] = "";
  $count = 0;
    $personalInformation[$count]['Enrollment number'] = $enrollment_number;
      $personalInformation[$count]['Full name'] = $full_name;
      $personalInformation[$count]['Programme'] = $program;
      $personalInformation[$count]['Study center'] = $studycenter;
      $personalInformation[$count]['Semster'] = $semster;
      $personalInformation[$count]['Email id'] = $email_id;
      $personalInformation[$count]['Phone number'] = $phone_number;
      setcookie("personalInformationStart", implode(";", $personalInformation[$count]), time() + 86400, "/");
      ++$count;
}
?>