<?php

session_start();
require "connection.php";

$title = $_POST["title"];
$description = $_POST["description"];
$price = $_POST["Price"];


if (empty($title)) {
    echo ("Please Enter a Title.");
}else if(empty($description)){
    echo ("Please Enter a Description.");
}else if(empty($price)){
    echo ("Please Enter a Price.");
}else{

    $d = new DateTime();
    $tz = new DateTimeZone("Asia/Colombo");
    $d -> setTimezone($tz);
    $date = $d -> format("Y-m-d H:i:s");

    $status = 1;

    Database::iud("INSERT INTO `product` (`name`,`price`,`date`,`status`,`description`)
    VALUES ('".$title."','".$price."','".$date."','".$status."','".$description."')");

    //echo("Product saved successfully");

    $product_id = Database::$connection -> insert_id;

    $length = sizeof($_FILES);
    
    if($length <= 3 && $length > 0) {

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

                    $file_name = "img/products/".$title."_".$x."_".uniqid().$new_img_extention;
                    move_uploaded_file($img_file["tmp_name"],"../".$file_name);

                    Database::iud("INSERT INTO `image` (`code`,`product_id`) VALUES ('".$file_name."','".$product_id."')");

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