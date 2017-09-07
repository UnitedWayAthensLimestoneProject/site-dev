<?php

$filename = $_FILES['file']['name']; //original name of uploaded file
$tmp_name = $_FILES['file']['tmp_name']; //where file is named/placed temporarily
$defaultName = $_POST['sBar']; //hidden value
$dir = "sidebarImgs/";
$filesAry = scandir($dir); //used to delete old file
$randNum = mt_rand(1000,9999); //generates 4 digit random number
$randNumString = strval($randNum); //4 digit random string

if (isset($filename)){
  if (!empty($filename)) {
    $fileExtBefore = (explode('.', $filename));
    $fileExt = strtolower(end($fileExtBefore));
    $allowedExt = array('jpg', 'jpeg', 'png', 'gif');

    //verify file is correct filetype
    if (in_array($fileExt, $allowedExt))
    {
      $randName = $defaultName . $randNumString; // e.g. sidebar1####
      $newName = $randName . '.' . $fileExt;

      //delete old file
      foreach ($filesAry as $file) {
        if(strpos($file, $defaultName) !== false) {
          $absPath = "/sidebarImgs/" . $file;
          unlink (__DIR__ . $absPath);
        }
      }

      //put new file with appended random numbers to name into sidebarImgs dir
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
