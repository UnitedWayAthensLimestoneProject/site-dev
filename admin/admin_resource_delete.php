<?php
session_start();

$defaultName = $_POST['sFilename']; //hidden value
  echo $defaultName;
//define('ROOT_PATH', dirname(__DIR__) . '/');
if (!defined('ROOT_PATH')) define('ROOT_PATH', dirname(__DIR__) . '/');
$dir = ROOT_PATH. 'resources/';

//delete old file
      
		  echo $defaultName;
          $absPath = ROOT_PATH. $defaultName;
          unlink ($absPath);
      
	 
header('Location: admin_resources.php');
?>
   