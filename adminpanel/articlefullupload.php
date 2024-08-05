<?php
require 'connection.php';
$content = $_POST["content"];


if (empty($content)) {
  echo ("error");
} else {
  // echo ($content);
  $aid = Database::search("SELECT MAX(id) AS last_id FROM `articles`");


  if ($aid->num_rows > 0) {
    $row = $aid->fetch_assoc();
    $lastInsertedId = $row["last_id"];

    Database::iud("UPDATE `articles` SET `para` = '" . $content . "' WHERE `id`='" . $lastInsertedId . "'");
  } else {
    echo "No records found.";
  }

  // echo ($aid);
  // Database::iud("UPDATE `articles` SET `para` = '".$content."' WHERE `id`='21'");

}

?>