<?php
    include 'connection.php';
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $notification_number;  
        $programme = $_POST['programmeSelected'];
        $subject = $_POST['subjectSelected'];
        $sessionmonth = $_POST['sessionmonth'];
        $type = $_POST['typeSelected'];
        $title = $_POST['title'];
        $session = $_POST['session'];
        $remark = $_POST['remark'];
        $notification = $_POST['notification'];   
        $result = mysqli_query($mysqli, "INSERT INTO `notification_info`(`Notification number`, `Notification title`, `Category`, `Programme_code`, `subject`, `session(month)`, `session(year)`, `Date`, `Link`) VALUES ('".getNotificationNumber()."','".getTItle()."','".getType()."','".getProgramme()."','".getSubject()."','".getSession()."','".getSessionForMonth()."','".time()."','".getNotification()."')");
        if ($result = "") {
            // Need to pass the message that the fields are inappropriate fields
            $_COOKIE['message'] = getMessage();
        }
        else if (!$result) {
            setMessage("error occured due to".$result);
            $_COOKIE['message'] = getMessage();
        }
        else
        {
            setMessage("The notification is successfully uploaded");
            $_COOKIE['message'] = getMessage();
        }

    }
    private function notification()
    {
        $result = mysqli_query($mysqli, "SELECT * FROM `notification_info`");   
        if ($result) {
            $_COOKIE['notification'] = $result;
        }
    }
    public function setNotification($data){
        $this->notification = $notification;
    }
    public function setMessage($message){
        $this->$message = $this->$message." ".$message;
    }
    public function getMessage()
    {
        return $message;
    }
    public function getNotificationNumber()
    {
        return $notification_number;
    }
    public function getProgramme()
    {
        return $programme;
    }
    public function getSubject()
    {
        return $subject;
    }
    public function getSessionForMonth()
    {
        return $sessionmonth;
    }
    public function getType()
    {
        return $type;
    }
    public function getSession()
    {
        return $session;
    }
    public function getTItle()
    {
        return $title;
    }
    public function getRemark()
    {
        return $remark;
    }
    public function getNotification()
    {
        return $notification;
    }
?>