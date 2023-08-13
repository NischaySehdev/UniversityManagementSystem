    <?php
    include 'connection.php';
    include 'utilities.php';
    include 'constants.php';
    include 'SqlQueriesContants.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $name=$_POST['name'];
        $password=$_POST['password'];
        $result = "";
        if(checkEnrollement($name)){
            login($password);
        }
        else{
            header("Location: ../Error pages/EnrollmentNumberNotFound.html");
        }
    }
    function checkEnrollement($name){
            $GLOBALS['result'] = $GLOBALS['mysqli']  -> query("SELECT * FROM `login_id_and_password_staff` WHERE `Employee_code`='".$name."'");
            if($GLOBALS['result']->current_field == 0){
                return true;
            }
            return false;
    }
    function login($password){
        $row=mysqli_fetch_assoc($GLOBALS['result']);
        if(strcmp($row['Password'], $password) == 0){
            initializeData();
            if(strcmp($row['Type'], "Assignment") == 0) {
                header("Location: ../Staff(Assignment)/index.html");
            }
            else if (strcmp($row['Type'], "Examination") == 0) {
                header("location: ../Staff(Examination)\index.html");
            }
            else if (strcmp($row['Type'], "Learning") == 0) {
                header("Location: ../Staff(Learning)\index.html");
            }
            else if (strcmp($row['Type'], "Concern resolver") == 0) {
                header("Location: ../Staff(Concern_resolver)\index.html");
            }
        }
        else {
            header("Location: ../Error pages/PasswordIsIncorrect.html");
        }
    }
    function initializeData()
    {
        setProgrammeDataInCookie();
        setStudyCenterDataInCookie();
        setEmployeeCodeDataInCookie();
        setConversationDataInCookie();
        setEmailsTemplateDataInCookie();
        setNotificationDataInCookie();
    }
    function setProgrammeDataInCookie(){
        setcookie($GLOBALS['PROGRAM_START'], getProgrammeList(), $GLOBALS['COOKIE_TIME'], "/");
    }
    function setStudyCenterDataInCookie(){
        setcookie($GLOBALS['STUDY_CENTER_START'], getStudyCenterList(), $GLOBALS['COOKIE_TIME'], "/");
    }
    function setEmployeeCodeDataInCookie(){
        setcookie($GLOBALS['EMPLOYEE_CODE_START'], $GLOBALS['name'].$GLOBALS['EMPLOYEE_CODE_END'], $GLOBALS['COOKIE_TIME'], "/");
    }
    function setConversationDataInCookie()
    {
        $contactDetails = "";
        $result = $GLOBALS['mysqli'] -> query($GLOBALS['CONTACT_DETAILS_SELECT_QUERY']);
        for ($count = 0 ;$row = mysqli_fetch_assoc($result);$count++) {
            $contactDetails.= $GLOBALS['DEMILINATOR'].$row['Name'];
            $contactDetails.= $GLOBALS['DEMILINATOR'].$row['Designation'];
            $contactDetails.= $GLOBALS['DEMILINATOR'].$row['Department'];
            $contactDetails.= $GLOBALS['DEMILINATOR'].$row['Department'];
            $contactDetails.= $GLOBALS['DEMILINATOR'].$row['Telephone'];
            $contactDetails.= $GLOBALS['DEMILINATOR'].$row['Email id'];
        }
        setcookie($GLOBALS['CONVERSATION_DETAILS_START'], $contactDetails.$GLOBALS['CONVERSATION_DETAILS_END'], $GLOBALS['COOKIE_TIME'], "/");

    }
    function setEmailsTemplateDataInCookie()
    {
        $emailTemplates = "";
        $result = $GLOBALS['mysqli'] -> query($GLOBALS['EMAIL_TEMPLATE_SELECT_QUERY']);
        for ($count = 0 ;$row = mysqli_fetch_assoc($result);$count++) {
            $emailTemplates.= $row['Title'];
            $emailTemplates.= $GLOBALS['DEMILINATOR'].$row['Template'].$GLOBALS['DEMILINATOR'];
        }
        setcookie($GLOBALS['EMAIL_TEMPLATE_START'], $emailTemplates.$GLOBALS['EMAIL_TEMPLATE_END'], $GLOBALS['COOKIE_TIME'], "/");
    }

    function setNotificationDataInCookie(){
        $notificationDetails = "";
        setcookie($GLOBALS['NOTIFICATION_DATA_START'], null, $GLOBALS['COOKIE_TIME'], "/");
        $result = $GLOBALS['mysqli'] -> query($GLOBALS['NOTIFICATION_DATA_SELECT_QUERY']);
        for ($count = 0 ;$row = mysqli_fetch_assoc($result); $count++) {
            $notificationDetails = $GLOBALS['DEMILINATOR'].$row['Notification title'];
            $notificationDetails = $GLOBALS['DEMILINATOR'].$row['Category'];
            $notificationDetails = $GLOBALS['DEMILINATOR'].$row['Description'];
            $notificationDetails = $GLOBALS['DEMILINATOR'].$row['Link'];
            $notificationDetails = $GLOBALS['DEMILINATOR'].$row['Date']; 
        }
        setcookie($GLOBALS['NOTIFICATION_DATA_END'], $notificationDetails, $GLOBALS['COOKIE_TIME'], "/");
    }
    function getProgrammeList()
    {
        $programmeList = "";
        $result = $GLOBALS['mysqli']-> query($GLOBALS['PROGRAMME_SELECT_QUERY']);
        for (; $row = mysqli_fetch_assoc($result) ; ) { 
            $programmeList.= $row['code'].$GLOBALS['DEMILINATOR'];
        }
        $programmeList.= $GLOBALS['PROGRAM_END'];
        return $programmeList;
    }                       
    function getStudyCenterList()
    {
        $studyCenterList = "";
        $result = $GLOBALS['mysqli'] -> query($GLOBALS['STUDY_CENTER_SELECT_QUERY']);
        for (;$row = mysqli_fetch_assoc($result);) { 
            $studyCenterList.= $row['Code'].$GLOBALS['DEMILINATOR'];
        }
        $studyCenterList.= $GLOBALS['STUDY_CENTER_END'];
        return $studyCenterList;
    }                                                                                                
    ?>