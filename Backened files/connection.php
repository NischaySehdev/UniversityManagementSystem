<?php  
    $mysqli = "";
    $mysqli = new mysqli("127.0.0.1","root", "J@mesbonoo7", "ignou_officials");
    if ($mysqli -> connect_errno) {
    die();
}
?>