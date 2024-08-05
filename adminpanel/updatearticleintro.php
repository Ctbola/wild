<?php
require 'connection.php';
$aid = $_POST["aid"];
$title = $_POST["artTitle"];
$para1 = $_POST["artpara1"];

if (empty($aid)) {
    echo ("Please Enter a ID for Article");
} else if (empty($title)) {
    echo ("Please Enter a Title for Article");
} else if (empty($para1)) {
    echo ("Please Enter a Paragraph");
} else {

    Database::iud("UPDATE `articles` SET `title` = '" . $title . "',`para1` = '" . $para1 . "' WHERE `id` = '" . $aid . "'");
    echo ("success");

}

?>