<?php
    $employeeCode = "";
    include 'connection.php';

    // Extraction of students personal information on the basis of the selected data.
    // @* @param Enrollment number 
    // @* @param Study center 
    // @* @param Programme 

function extractStudentPersonalInfo($enrollmentNumber, $programme, $studyCenter="")
{
   if(strlen($studyCenter)>0){
        if (strlen($enrollmentNumber) > 0 ) {
            if(!is_null($programme)){
                // STUDYCENTER
                // ENROLLMENT
                // PROGRAMM
                return $GLOBALS['mysqli']  -> query("SELECT * FROM `student_personal_information` WHERE `Enrollment number` =".$enrollmentNumber." AND `Study center` =".$studyCenter." AND `Program` ='".$programme."'");
            }
            else {
                // STUDYCENTER   
                // ENROLLMENT
                return $GLOBALS['mysqli'] -> query("SELECT * FROM `student_personal_information` WHERE `Study center` ='".$studyCenter."' AND `Enrollment number`='".$enrollmentNumber."'");
            }
        }
        else if (!is_null($programme)) {
            // STUDYCENTER
            // PROGRAMME
            return $GLOBALS['mysqli'] -> query("SELECT * FROM `student_personal_information` WHERE `Study center`='".$studyCenter."' AND `Program`='".$programme."'");
        }
        else {
            // STUDYCENTER
            return $GLOBALS['mysqli'] -> query("SELECT * FROM `student_personal_information` WHERE `Study center` ='".$studyCenter."'");
        }
    }
    else if(!is_null($enrollmentNumber)) {
        if (!is_null($programme)) {
            // ENROLLMENT
            // PROGRAMME
            return $GLOBALS['mysqli'] -> query("SELECT * FROM `student_personal_information` WHERE `Enrollment number` ='".$enrollmentNumber."' AND `Program`='".$programme."'");
        }
        else{
            // ENROLLMENT
            return $GLOBALS['mysqli'] -> query("SELECT * FROM `student_personal_information` WHERE `Enrollment number` ='".$enrollmentNumber."'");
        }
    }
    else if (!is_null($programme)) {
        // PROGRAMME
        return $GLOBALS['mysqli'] -> query("SELECT * FROM `student_personal_information` WHERE `Program`='".$programme."'");
    }
    else
    {
        feedError("Please select any option");
        showError();
    }
}

// Extracting the contact details of the staff member


//Extracting the email templates details

function fillNotification()
{
    $notificationDetails[][] = "";
    $result = $GLOBALS['mysqli'] -> query("SELECT * FROM `notification_info`");
    for ($count = 0 ;$row = mysqli_fetch_assoc($result); $count++) {
        $notificationDetails[$count]['Title'] = $row['Notification title'];
        $notificationDetails[$count]['Category'] = $row['Category'];
        $notificationDetails[$count]['Description'] = $row['Description'];
        $notificationDetails[$count]['Link'] = $row['Link'];
        $notificationDetails[$count]['Date'] = $row['Date']; 
        setcookie("notificationDetailsStart", implode(";", $notificationDetails[$count]), time() + 86400, "/");
    }
    setcookie("notificationDetailsEnd", "notificationDetailsEnd", time() + 86400, "/");
}

?>