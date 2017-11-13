<?php

require_once 'scripts/database_connection.php';

session_start();

$id = $_POST['objId'];
$title = mysql_real_escape_string($_POST['title']);
$url = $_POST['url'];
$desc = mysql_real_escape_string($_POST['desc']);

$query = "UPDATE vids SET title='$title', youtubeURL='$url', description='$desc' WHERE objId='$id'";
$update = mysql_query($query, $conn);

if ($update) {
  $_SESSION['note'] = 'data_saved';
}
else {
  $_SESSION['note'] = 'not_saved';
}

//redirect back to admin_videos.
//DO NOT output anything before this or this call will not work
//also cannot use any plain HTML before this call
header('Location: admin_videos.php');
exit;

 ?>
