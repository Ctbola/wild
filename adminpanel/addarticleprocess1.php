<?php
require 'connection.php';
$title = $_POST["artTitle"];
$para1 = $_POST["artpara1"];


if(empty($title)) {
    echo("Please Enter a Title for Article");
}else if (empty($para1)) {
    echo ("Please Enter a Paragraph");
}else{
    
    $d = new DateTime();
    $tz = new DateTimeZone("Asia/Colombo");
    $d -> setTimezone($tz);
    $date = $d -> format("Y-m-d H:i:s");

    $status = 1;

    $length = sizeof($_FILES);
    
    if($length = 1) {

        $allowed_img_extention = array("image/jpg","image/jpeg","image/png","image/svg+xml");

        for ($x = 0; $x < $length; $x++) {
            if(isset($_FILES["image".$x])) {

                $img_file = $_FILES["image".$x];
                $file_extention = $img_file["type"];

                // echo ($file_extention);

                if (in_array($file_extention,$allowed_img_extention)) {

                    $new_img_extention;

                    if ($file_extention == "image/jpg") {
                        $new_img_extention = ".jpg";
                    }else if ($file_extention == "image/jpeg") {
                        $new_img_extention = ".jpeg";
                    }else if ($file_extention == "image/png") {
                        $new_img_extention = ".png";
                    }else if ($file_extention == "image/svg+xml") {
                        $new_img_extention = ".svg";
                    }

                    // $file_name = "img/articles/".$title."_".$x."_".uniqid().$new_img_extention;
                    // move_uploaded_file($img_file["tmp_name"],"../".$file_name."");
                    $file_name = "img/articles/".$title."_".$x."_".uniqid().$new_img_extention;
                    move_uploaded_file($img_file["tmp_name"],"../".$file_name."");

                    // Database::iud("INSERT INTO `articles` (`title`,`para1`,`para2`,`para3`,`para4`,`status`,`date`,`img`) VALUES ('".$title."','".$para1."','".$para2."','".$para3."','".$para4."','".$status."','".$date."','".$file_name."')");

                    Database::iud("INSERT INTO `articles` (`title`,`para1`,`status`,`date`,`img`) VALUES ('".$title."','".$para1."','".$status."','".$date."','".$file_name."')");

                }else {
                    echo("Invalid Image type");
                }

            }
        }

        echo ("prouduct save successfull");

    }else {

        echo("Invalid image count");

    }



} 



?>