<?php

require "connection.php";

$product = $_GET["p"];

$product_rs = Database::search("SELECT * FROM `product` WHERE `id` = '".$product."'");
$product_num = $product_rs -> num_rows;

if($product_num == 1) {

    $product_data = $product_rs -> fetch_assoc();
    $status = $product_data["status"];

    if ($status == 1) {

        Database::iud("UPDATE `product` SET `status` = '2' WHERE `id` = '".$product."'");
        echo("deactivated");

    }else if ($status == 2) {

        Database::iud("UPDATE `product` SET `status` = '1' WHERE `id` = '".$product."'");
        echo("activated");

    }

}else {
    echo("Something Went Wrong. Please try again later.");
}

?>