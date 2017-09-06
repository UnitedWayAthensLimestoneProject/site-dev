<?php

$filename = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];
$defaultName = $_POST['sBar'];
$dir = "sidebarImgs/";
$filesAry = scandir($dir); //used to delete old file
$randNum = mt_rand(1000,9999); //generates 4 digit random number
$randNumString = strval($randNum); //4 digit random string

if (isset($filename)){
  if (!empty($filename)) {
    $fileExtBefore = (explode('.', $filename));
    $fileExt = strtolower(end($fileExtBefore));
    $allowedExt = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($fileExt, $allowedExt))
    {
      //define ('SITE_ROOT', realpath(dirname(__FILE__)));
      $randName = $defaultName . $randNumString; // e.g. sidebar1####
      $newName = $randName . '.' . $fileExt;

      $location = 'sidebarImgs/';
      if(move_uploaded_file($tmp_name, $location.$newName)) {
        echo 'File uploaded successfully';
      }
    } else {
      echo 'File type not supported';
    }
  }
} else {
  echo 'Please choose a file';
}



?>

<br>
<a href="ADMIN_TEST.php">Back to Admin Page</a>
