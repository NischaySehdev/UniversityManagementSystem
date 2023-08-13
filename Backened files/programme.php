<?php
include 'connection.php';
include 'utilities.php';
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $type = $_POST['type'];
    switch ($type) {
        case 0:
            addingAProgramme();
            break;
        case 1:
            updateAProgramme();
            deleteAProgramme();
            addingAProgramme();
            break;
        case 2:
            deleteAProgramme();
        default:
            echo 'An error occured';
            break;
    }    
}
function deleteAProgramme()
{
    $program=$_POST['program'];
    $result = $GLOBALS['Mysqli']->query("DELETE * FROM `programme` WHERE `code`=".$program);
    if (!$result) {
        echo 'An error occured';
    }
    else{
        header("Location: ../Staff(Programme)/add_pogramme.html");
    }
}
function updateAProgramme()
{
    $program=$_POST['program'];
    $result = $GLOBALS['mysqli']->query("SELECT * FROM `programme`");
    if (!$result) {
        echo 'An error occured';
    }
    else{
        setcookie("programme".$program."start", "programmeStart", time() + 100, "/");
        $row = mysqli_fetch_assoc($result)
        setcookie("", $row['Maximum age']+time()+100, "/");
        setcookie("", $row['Minimum age']+time()+100, "/");
        setcookie("", $row['Course fee']+time()+100, "/");
        setcookie("", $row['Maximum duration']+time()+100, "/");
        setcookie("", $row['Minimum duration']+time()+100, "/");
        setcookie("", $row['Eligibility']+time()+100, "/");
        setcookie("", $row['Medium']+time()+100, "/");
        setcookie("", $row['Fee structure']+time()+100, "/");
        setcookie("", $row['Description']+time()+100, "/");
        setcookie("", $row['Project guide']+time()+100, "/");
        setcookie("", $row['date']+time()+100, "/");
        setcookie("", $row['Subjects']+time()+100, "/");
        setcookie("programme".$program."End", "programmeEnd", time() + 100, "/");
        header("Location: ../Staff(Programme)/add_pogramme.html");
    }

}
function addingAProgramme()
{
    $program=$_POST['program'];
    $subjects=$_POST['subjects'];
    $title = $_POST['title'];
    $teacher = $_POST['teacher'];
    $minimumDuration = $_POST['minimumDuration'];
    $maximumDuration = $_POST['maximumDuration'];
    $minimumAge = $_POST['minimumAge'];
    $maximumAge = $_POST['maximumAge'];
    $courseFee = $_POST['courseFee'];
    $medium = $_POST['medium'];
    $feeStructure = $_POST['feeStructure'];
    $eligibility = $_POST['eligibility'];
    $description = $_POST['description'];
    $projectGuideLink = $_POST['projectGuideLink'];
    $link = $_POST['link'];
    $date = $_POST['date'];
    $brochure = $_POST['brochure'];
    $result = $GLOBALS['mysqli'] -> query("INSERT INTO `programme`(`code`, `program`, `brochure`, `Maximum age`, `Minimum age`, `Course fee`, `Maximum duration`, `Minimum duration`, `Eligibility`, `Medium`, `Fee structure`, `Description`, `Project guide`, `date`, `Subjects`) VALUES ('".$program."','".$title."','".$brochure."','".$minimumAge."','".$maximumAge."','".$courseFee."','".$maximumDuration."','".$minimumDuration."','".$eligibility."','".$medium."','".$feeStructure."','".$description."','".$projectGuideLink."','".$date."','".$subjects."')");
    if (!$result) {
        echo "An error occured";
    }
    else{
        header("Location: ../Staff(Programme)/add_pogramme.html");
    }
}
?>