<?php

// echo ("Hello");

session_start();

require "connection.php";

$pid = $_GET["id"];
$title = $_GET["title"];
$description = $_GET["desc"];
$price = $_GET["price"];
if (empty($title)) {
    echo ("Please Enter a Title.");
}else if(empty($description)){
    echo ("Please Enter a Description.");
}else if(empty($price)){
    echo ("Please Enter a Price.");
}else{
// echo $pid;
// echo $title;
// echo $description;
// echo $price;

Database::iud("UPDATE `product` SET `name` = '".$title."',`description` = '".$description."',`price` = '".$price."' WHERE `id` = '".$pid."'");
//echo ("Product has been Updated!");



echo "success";
}