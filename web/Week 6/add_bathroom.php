<?php
/**********************************************************
* File: topicEntry.php
* Author: Br. Burton
* 
* Description: This is the PHP file that the user starts with.
*   It has a form to enter a new scripture and topic.
*   It posts to the insertTopic.php page.
***********************************************************/

// The DB connection logic is in another file so it can be included
// in each of our different PHP files.
include "../db/dbConnect.php";
$db = get_db();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Bathroom Entry</title>
</head>

<body>
<div>

<h1>Enter New Bathrooms around BYUI campus</h1>

<form id="mainForm" action="insert_bathroom.php" method="POST">

	<input type="text" id="txtbuilding" name="txtbuilding"></input>
	<label for="txtbuilding">Building</label>
	<br /><br />

	<input type="text" id="txtroom" name="txtroom"></input>
	<label for="txtroom">Room Number</label>
	<br /><br />

    <input type="text" id="txtgender" name="txtgender"></input>
	<label for="txtgender">Gender</label>
	<br /><br />

	<input type="text" id="txtdescription" name="txtdescription"></input>
	<label for="txtdescription">Description</label>
	<br /><br />
    
    <label for="rating">Rating:</label>
    <br>
    <select id="rating" name="rating">
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>

    </select>
<?php
// This section will now generate the available check boxes for topics
// based on what is in the database

// As before, it would be better to break this out into a separate function
// in a separate file, that handled the DB interaction, and returned
// a list of topics. But to keep things as clear as possible we can
// also query and loop through the results, right here.

// try
// {
// 	// Notice that we do not use "SELECT *" here. It is best practice
// 	// to only bring back the fields that you need.

// 	// prepare the statement
// 	$statement = $db->prepare('SELECT id, name FROM scripture');
// 	$statement->execute();

// 	// Go through each result
// 	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
// 	{
// 		$id = $row['id'];
// 		$name = $row['name'];

// 		// Notice that we want the value of the checkbox to be the id of the label
// 		echo "<input type='checkbox' name='chkTopics[]' id='chkTopics$id' value='$id'>";

// 		// Also, so they can click on the label, and have it select the checkbox,
// 		// we need to use a label tag, and have it point to the id of the input element.
// 		// The trick here is that we need a unique id for each one. In this case,
// 		// we use "chkTopics" followed by the id, so that it becomes something like
// 		// "chkTopics1" and "chkTopics2", etc.
// 		echo "<label for='chkTopics$id'>$name</label><br />";

// 		// put a newline out there just to make our "view source" experience better
// 		echo "\n";
// 	}

// }
// catch (PDOException $ex)
// {
// 	// Please be aware that you don't want to output the Exception message in
// 	// a production environment
// 	echo "Error connecting to DB. Details: $ex";
// 	die();
// }

?>

	<br />

	<input type="submit" value="Add to Database" />

</form>


</div>

</body>
</html>