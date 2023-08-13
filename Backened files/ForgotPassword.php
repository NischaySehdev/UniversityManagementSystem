<?php 
    include 'connection.php'; 
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $userId = $_POST['userId'];
        $birth=$_POST['birthPlace'];
        $school=$_POST['schoolName'];
        $homeaddress=$_POST['homeAdress'];
        $newpass=$_POST['newpswd'];
        $cpswd=$_POST['cpswd'];
        $result = $mysqli -> query("SELECT * FROM `login_id_and_password_staff` WHERE `Employee_code`=".$userId);
        if ($result->current_field == 0) {
            header("Location: ../Error pages/EnrollmentNumberNotFound.html");
        }
        else{
            $row=mysqli_fetch_assoc($result);
            if(strcmp($newpass, $cpswd) != 0){
            header("Location: ../Error pages/PasswordNotMatched.html");
            }
            else if (strcmp($row['birth_place'], $birth) != 0) {
                header("Location: ../Error pages/AnswerIsIncorrect.html");
            }
            else if (strcmp($row['school_name'], $school) != 0) {
                header("Location: ../Error pages/AnswerIsIncorrect.html");
            }
            else if (strcmp($row['home_address'], $homeaddress)  != 0) {
                header("Location: ../Error pages/AnswerIsIncorrect.html");
            }
            else
            {
                $result = $mysqli -> query("UPDATE `login_id_and_password_staff` SET `Password`='".$newpass."' WHERE `Employee_code`=".$userId);
                if ($result->current_field != 0) {
                    header("Location: ../Error pages/PasswordIsChanged.html");
                }
            }
        }
    }
?>