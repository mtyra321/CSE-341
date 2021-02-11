<?php
/**********************************************************
* File: showTopics.php
* Author: Br. Burton
* 
* Description: This file retrieves the scriptures and topics
* from the DB.
***********************************************************/

include "../db/dbConnect.php";
$db = get_db();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Nature Calls Bathroom List</title>
	<script src="bathroom_display.js"></script>
	<link rel="stylesheet" type="text/css" href="show_bathrooms.css">
</head>

<body>
<div>
<h1>Nature Calls Bathroom List</h1>

<?php


try
{
	// For this example, we are going to make a call to the DB to get the scriptures
	// and then for each one, make a separate call to get its topics.
	// This could be done with a single query (and then more processing of the resultset
	// afterward) as follows:

	//	$statement = $db->prepare('SELECT book, chapter, verse, content, t.name FROM scripture s'
	//	. ' INNER JOIN scripture_topic st ON s.id = st.scriptureId'
	//	. ' INNER JOIN topic t ON st.topicId = t.id');


	// prepare the statement
	$statement = $db->prepare('SELECT BathroomID, RoomNumber, Gender, description, building, overallrating FROM bathroom');
	$statement->execute();
	$bathrooms_list = [];

	// Go through each result
	echo '
	<div class = "flex-container">
	';
	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		array_push($bathrooms_list, $row);
		echo '<div class="flex-item" id="'.$row['bathroomid'].'" onclick = "individual_bathroom('.json_encode($row).')">';
		echo '<p> '. $row['building']. ' ';
		echo  $row['roomnumber']. ' ';
		echo  $row['gender'].'</p>';
		// echo '<p>'. $row['description'].'</p>';
		echo '<p>'. $row['overallrating'].'</p>';

		// echo 'Topics: ';

		// get the topics now for this scripture
		// $stmtTopics = $db->prepare('SELECT name FROM topic t'
		// 	. ' INNER JOIN scripture_topic st ON st.topicId = t.id'
		// 	. ' WHERE st.scriptureId = :scriptureId');

		// $stmtTopics->bindValue(':scriptureId', $row['id']);
		// $stmtTopics->execute();

		// Go through each topic in the result
		// while ($topicRow = $stmtTopics->fetch(PDO::FETCH_ASSOC))
		// {
		// 	echo $topicRow['name'] . ' ';
		// }

		echo '</div>';
	}
echo '</div>';

}
catch (PDOException $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

?>

</div>
<button ><a href = "./add_bathroom.php">Add a Bathroom</a></button>
</body>
</html>