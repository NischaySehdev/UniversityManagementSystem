<?php
include 'connection.php';
include 'utilities.php';
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $type = $_POST['type'];
    switch ($type) {
        case 0:
            addingAProject();
            break;
        case 1:
            updateAProject();
            deleteAProject();
            addingAProject();
            break;
        case 2:
            deleteAProgramme();
        default:
            echo 'An error occured';
            break;
    }    
}
function deleteAProject()
{
    $program=$_POST['program'];
    $result = $GLOBALS['Mysqli']->query("DELETE * FROM `project_submission_initiation` WHERE `code`=".$program);
    if (!$result) {
        echo 'An error occured';
    }
    else{
        header("Location: ../Staff(Projects)/add_update_delete_project.html");
    }
}
function updateAProject()
{
    $program=$_POST['program'];
    $result = $GLOBALS['mysqli']->query("SELECT * FROM `project_submission_initiation`");
    if (!$result) {
        echo 'An error occured';
    }
    else{
        setcookie("project".$program."start", "projectStart", time() + 100, "/");
        $row = mysqli_fetch_assoc($result)
        setcookie("", $row['Session']+time()+100, "/");
        setcookie("", $row['Link']+time()+100, "/");
        setcookie("", $row['Mode']+time()+100, "/");
        setcookie("", $row['Initiation date']+time()+100, "/");
        setcookie("", $row['Last date']+time()+100, "/");
        setcookie("", $row['Guidelines']+time()+100, "/");
        setcookie("", $row['Notification']+time()+100, "/");
        setcookie("", $row['Programme']+time()+100, "/");
        setcookie("project".$program."End", "projectEnd", time() + 100, "/");
        header("Location: ../Staff(Projects)/add_update_delete_project.html");
    }

}
function addingAProject()
{
    $program=$_POST['program'];
    $projectCode=$_POST['projectCode'];
    $session=$_POST['session'];
    $mode=$_POST['mode'];
    $guidelines=$_POST['guidelines'];
    $projectSubmissionLink=$_POST['projectSubmissionLink'];
    $link=$_POST['link'];
    $initiationDate=$_POST['initiationDate'];
    $lastDate=$_POST['lastDate'];

    $result = $GLOBALS['mysqli'] -> query("INSERT INTO `project_submission_initiation`(`Project code`, `Session`, `Link`, `Mode`, `Initiation date`, `Last date`, `Guidelines`, `Notification`, `Programme`) VALUES ('".$projectCode."','".$session."','".$projectGuideLink."','".$mode."','".$initiationDate."','".$lastDate."','".$guidelines."','".$link."','".$program."')");
    if (!$result) {
        echo "An error occured";
    }
    else{
        header("Location: ../Staff(Projects)/add_update_delete_project.html");
    }
}
?>