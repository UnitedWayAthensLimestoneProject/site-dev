<?php

function printStuff($array) {
	foreach( $array as $stuff ) {
	    if( is_array( $stuff ) ) {
	        foreach( $stuff as $thing ) {
	            echo $thing . ", ";
	        }
	    } else {
	        echo $stuff;
	    }
	}
}

require_once 'admin/scripts/app_config.php';

$conn = mysql_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD)
	or handle_error("an error occurred while attempting to connect to the database", mysql_error());

mysql_select_db(DATABASE_NAME)
	or handle_error("Error selecting the database ", mysql_error());

	//--------------------------------------

echo "Results: <br>";
printStuff($_POST);
echo "<br> ";

$query = "SELECT * FROM volunteers ORDER BY last_name ASC";
$result = mysql_query($query);

echo "<form action='' method='post'>";
echo "<table border='1'>";
echo "<tr><td></td><td>First Name</td><td>Last Name</td><td>Email Address</td><td>Home Phone</td><td>Cell Phone</td><tr>";
while ($row = mysql_fetch_assoc($result)) {
	echo "<tr><td><input type='checkbox' name='selected[]' value='{$row['email_address']}'/></td><td>{$row['first_name']}</td><td>{$row['last_name']}</td><td>{$row['email_address']}</td><td>{$row['home_phone']}</td><td>{$row['cell_phone']}</td><tr>";
}
echo "</table>";
echo "<input type='submit'/>";
echo "</form>";

/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
*/

mysql_free_result($result);

?>
