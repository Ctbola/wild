<?php
session_start();
require "connection.php";
if (isset($_SESSION["u"])) {
    $email = $_SESSION["u"]["username"];

    $np = $_POST["n"];
    $rnp = $_POST["r"];
    $currentpw = $_POST["v"];
    $rs = Database::search("SELECT * FROM `admin` WHERE `username` = '" . $email . "'");
$data=$rs->fetch_assoc();
$cpassword = $data["password"];

    if (empty($currentpw)) {
        echo ("Please enter current Password");
    }else if ($cpassword != $currentpw) {
        echo ("current password is not matched");
    }else if (empty($np)) {
        echo ("Please insert a New Password");
    } else if (strlen($np) < 5 || strlen($np) > 20) {
        echo ("Invalid Password");
    } else if (empty($rnp)) {
        echo ("Please Re-type your New Password");
    } else if ($np != $rnp) {
        echo ("Password does not matched");
    } else  {
                  
            Database::iud("UPDATE `admin` SET `password` = '" . $np . "' WHERE `username` = '" . $email . "'");
            echo ("success");
        
    }
}
