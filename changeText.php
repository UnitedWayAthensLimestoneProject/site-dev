<!-- Reference shown below    http://www.dynamicdrive.com/forums/showthread.php?31277-Allow-authorized-user-to-change-text-on-webpage-*SOLVED*-Please-comment
-->

<?php
if (isset($_POST['userText1']))
{
	$textChange = $_POST['userText1'];
	$textFile = "textChange1.txt";
}
else if(isset($_POST['userText2']))
{
	$textChange = $_POST['userText2'];
	$textFile = "textChange2.txt";
}
else if(isset($_POST['userText3']))
{
	$textChange = $_POST['userText3'];
	$textFile = "textChange3.txt";
}
else if(isset($_POST['userText4']))
{
	$textChange = $_POST['userText4'];
	$textFile = "textChange4.txt";
}
else if(isset($_POST['userText5']))
{
	$textChange = $_POST['userText5'];
	$textFile = "textChange5.txt";
}
else if(isset($_POST['userText6']))
{
	$textChange = $_POST['userText6'];
	$textFile = "textChange6.txt";
}
else if(isset($_POST['userText7']))
{
	$textChange = $_POST['userText7'];
	$textFile = "textChange7.txt";
}
else if(isset($_POST['userText8']))
{
	$textChange = $_POST['userText8'];
	$textFile = "textChange8.txt";
}
else
{
	echo 'Please enter text';
}

$fh = fopen($textFile, 'w') or die("unable to open file");
fwrite($fh, $textChange);
fclose($fh);
echo $textChange;

?>

<br>
<a href="ADMIN_TEST.php">Back to Admin Page</a>