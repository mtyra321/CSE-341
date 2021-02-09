<?php
/**********************************************************
* File: insertTopic.php
* Author: Br. Burton
* 
* Description: Takes input posted from topicEntry.php
*   This file enters a new scripture into the database
*   along with its associated topics.
*
*   This file does NOT do any rendering at all,
*   instead it redirects the user to showTopics.php to see
*   the resulting list.
***********************************************************/

// get the data from the POST
$building = $_POST['txtbuilding'];
$room = $_POST['txtroom'];
$gender = $_POST['txtgender'];
$description = $_POST['txtdescription'];
$rating = $_POST['rating'];

// For debugging purposes, you might include some echo statements like this
// and then not automatically redirect until you have everything working.

echo "building=$building\n";
echo "room=$room\n";
echo "gender=$gender\n";
echo "description=$description\n";

// we could (and should!) put additional checks here to verify that all this data is actually provided


include "../db/dbConnect.php";
$db = get_db();

try
{
	// Add the Scripture

	// We do this by preparing the query with placeholder values
	$query = 'INSERT INTO bathroom(building, roomnumber, gender, description, overallrating) VALUES(:building, :roomnumber, :gender, :description, :overallrating)';
	$statement = $db->prepare($query);

	// Now we bind the values to the placeholders. This does some nice things
	// including sanitizing the input with regard to sql commands.
	$statement->bindValue(':building', $building);
	$statement->bindValue(':roomnumber', $room);
	$statement->bindValue(':gender', $gender);
	$statement->bindValue(':description', $description);
    $statement->bindValue(':overallrating', $rating);

	$statement->execute();

	// get the new id
	//$scriptureId = $db->lastInsertId("scripture_id_seq");

	// Now go through each topic id in the list from the user's checkboxes
	// foreach ($topicIds as $topicId)
	// {
	// 	echo "ScriptureId: $scriptureId, topicId: $topicId";

	// 	// Again, first prepare the statement
	// 	$statement = $db->prepare('INSERT INTO scripture_topic(scriptureId, topicId) VALUES(:scriptureId, :topicId)');

	// 	// Then, bind the values
	// 	$statement->bindValue(':scriptureId', $scriptureId);
	// 	$statement->bindValue(':topicId', $topicId);

	// 	$statement->execute();
	// }
}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}

// finally, redirect them to a new page to actually show the topics
header("Location: show_bathrooms.php");

die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.

?>