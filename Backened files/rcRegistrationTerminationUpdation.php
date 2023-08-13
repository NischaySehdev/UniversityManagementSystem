<?php
    include 'connection.php';
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $action = $_POST['action'];
        switch ($action) {
            case 'registration':
                registration();
                break;
            
            case 'termination':
                termination();
                break;    

            case 'updation':
                updation($variables);
                break;
            
            default:
                echo 'An error occurred';
                break;
        }
       
        // if(!$result){
        //     echo "An error occured";
        // }
        // else{
        //     echo 'Success';
        // }
    }
    else {
        die("An error occured in sending reuqest");
    }

     function registration()
    {
        $Regional_center_code = $_POST['Regional_center_code'];
        $regional_center_name = $_POST['Regional_center_name'];
        $regional_center_address = $_POST['Address'];
        $regional_center_phone_number = $_POST['Phone_number'];
        $regional_center_email_id = $_POST['Email_id'];
        $regional_center_owner = $_POST['Regional_center_owner'];
        $Regional_center_picture = $_POST['Regional_center_picture'];
        $regional_center_confirmation_letter = $_POST['Confirmation_letter'];
        
        try {
            $result = $mysqli->query("INSERT INTO `regional_centers`(`Regional_center_code`, `Regional_center_name`, `Regional_center_address`, `Regional_center_phone_number`, `Regional_center_email_id`, `Regional_center_head_name`, `Regional_center_head_picture`, `Regional_center_letter`) VALUES ('".$Regional_center_code."', '".$regional_center_name."','".$regional_center_address."','".$regional_center_phone_number."','".$regional_center_email_id."','".$regional_center_owner."','".$Regional_center_picture."','".$regional_center_confirmation_letter."')");
        } catch (\Throwable $th) {
            echo 'An error occured';
        }
        finally{
            echo "Successfully registered";
        }
    }

    function termination()
    {
        $Regional_center_code = $_POST['Regional_center_code'];
        try {
            $result = $mysqli -> query("DELETE FROM `regional_centers` WHERE `Regional_center_code`=".$Regional_center_code);
        } catch (\Throwable $th) {
            echo 'An error occured';  
        }
        finally{
            echo "Successfully terminated";
        }
    }

    function updation($variables)
    {   
        try {
            foreach ($variable as $value) {

            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
?>