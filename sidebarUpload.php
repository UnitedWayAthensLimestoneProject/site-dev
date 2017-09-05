<?php

$name = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];

if (isset($name)) {
  if (!empty($name)) {
    //define ('SITE_ROOT', realpath(dirname(__FILE__)));
    $location = 'sidebarImgs/';
    if(move_uploaded_file($tmp_name, $location.$name)) {
      echo 'File uploaded successfully';
    }
  }
  else {
    echo 'Please choose a file';
  }
}

 ?>

<br>
<a href="ADMIN_TEST.php">Back to Admin Page</a>
