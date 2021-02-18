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
<div id="whole_thing" style="text-align:center;">

<h1>Enter New Bathrooms around BYUI campus</h1>

<form id="mainForm" action="insert_bathroom.php" method="POST">

	<input type="text" id="txtbuilding" name="txtbuilding" ></input>
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
    
    <label for="rating">Rating:		</label>
    <select id="rating" name="rating">
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select>
	<br />
	<input type="submit" value="Add to Database" />
</form>
<button><a href="./show_bathrooms.php">Back to List</a></button>

</div>

</body>
</html>