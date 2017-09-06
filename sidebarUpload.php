<?php

$filename = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];
$defaultName = $_POST['sBar'];
$fileExtBefore = (explode('.', $filename));
$fileExt = strtolower(end($fileExtBefore));
$allowedExt = array('jpg', 'jpeg', 'png', 'gif');
$newName = $defaultName . '.' . $fileExt;

if (in_array($fileExt, $allowedExt))
{
  if (isset($filename)) {
    if (!empty($filename)) {
      //define ('SITE_ROOT', realpath(dirname(__FILE__)));
      $location = 'sidebarImgs/';
      if(move_uploaded_file($tmp_name, $location.$newName)) {
        echo 'File uploaded successfully';
      }
    }
    else {
      echo 'Please choose a file';
    }
  }
}
else {
  echo 'File type not supported';
}

?>

<br>
<a href="ADMIN_TEST.php">Back to Admin Page</a>
