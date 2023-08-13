<?php
    include 'connection.php';
    include 'utilities.php';
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $programme=$_POST['Programme'];
        $subject=$_POST['Subject'];
        $session=$_POST['session'];
        $month=$_POST['session(month)'];
        $notificationupload=$_POST['notificationupload'];
        $type = $_POST['type'];
        $result = $mysqli -> query("INSERT INTO `assignment_question_paper`(`Uploaded by`, `Programme`, `Subject code`, `Subject name`, `Month`, `File`) VALUES ('".getemployeeCode()."','".$programme."','".$subject."','".$session."','".$month."','".$notificationupload."')");
    if(!$result){
        echo "Failed";
    }
    else{
        echo "The question paper is uploaded";
        // echo $type;
        // switch ($type) {
        //     case 'EXAMINATION':
        //         header("Location: ../Staff(Examination)/UpdateMarks.html");
        //         break;
            
        //     default:
        //         # code...
        //         break;
        // }
    }
    
}
?>