<?php

require "connection.php";

$email = $_POST['e'];
$password = $_POST['p'];

if (empty($email)) {
    echo ("Please enter your Email");
} else if (strlen($email) > 100) {
    echo ("Email must have less than 100 characters");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Invalid Email");
} else if (empty($password)) {
    echo ("Please enter your Password");
} else if (strlen($password) < 5 || strlen($password) > 20) {
    echo ("Password must be between 5 - 20 characters");
} else {
    $rs = Database::search("SELECT * FROM `admin` WHERE `username` = '" . $email . "' AND `password` = '" . $password . "'");
    $n = $rs->num_rows;

    if ($n == 1) {
        $d = $rs->fetch_assoc();
        session_start();
        $_SESSION["u"] = $d;
        if(isset($_SESSION["u"])){
            echo("success");
        }else{
            echo("error");
        }
        
    } else {
        echo("error");
    }

}

?>