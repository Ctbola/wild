<?php
require 'connection.php';
$content = $_POST["content"];
$aid = $_POST["aid"];

if (empty($content)) {
  echo ("error");
} else {
  // echo ($content);
//   $aid = Database::search("SELECT MAX(id) AS last_id FROM `articles`");

//   $aid = Database::search("SELECT LAST_INSERT_ID(); MAX(id) AS last_id FROM `articles`");

//   UPDATE table SET col1 = val1, col2 = val2 WHERE id = LAST_INSERT_ID();
//   SELECT LAST_INSERT_ID();

//   if ($aid->num_rows > 0) {
//     $row = $aid->fetch_assoc();
//     $lastInsertedId = $row["last_id"];

    Database::iud("UPDATE `articles` SET `para` = '" . $content . "' WHERE `id`='" . $aid . "'");
    echo ("success");
//   } else {
//     echo "No records found.";
//   }

  // echo ($aid);
  // Database::iud("UPDATE `articles` SET `para` = '".$content."' WHERE `id`='21'");

}

?>