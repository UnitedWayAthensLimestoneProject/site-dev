<?php

require_once 'admin/scripts/app_config.php';

$conn = mysql_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD)
	or handle_error("an error occurred while attempting to connect to the database", mysql_error());

mysql_select_db(DATABASE_NAME)
	or handle_error("Error selecting the database ", mysql_error());

	//--------------------------------------

$query = "SELECT * FROM volunteers ORDER BY last_name ASC";
$result = mysql_query($query);

echo "<table border='1'>";
echo "<tr><td>First Name</td><td>Last Name</td><td>Email Address</td><td>Home Phone</td><td>Cell Phone</td><tr>";
while ($row = mysql_fetch_assoc($result)) {
    //echo $row["agy_city"] . "<br>";
		echo "<tr><td>{$row['first_name']}</td><td>{$row['last_name']}</td><td>{$row['email_address']}</td><td>{$row['home_phone']}</td><td>{$row['cell_phone']}</td><tr>";
}
echo "</table>";

mysql_free_result($result);

?>
