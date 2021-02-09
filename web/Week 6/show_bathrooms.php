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
	<title>Scripture and Topic List</title>
</head>

<body>
<div>

<h1>Scripture and Topic List</h1>

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

	// Go through each result
	echo '<table>';
	echo '<tr>
    <th>Building</th>
    <th>Room Number</th>
	<th>Gender</th>
    <th>Description</th>
    <th>Rating</th>
  	</tr>';
	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		echo '<tr>';
		echo '<th>'. $row['building'].'</th>';
		echo '<th>'. $row['roomnumber'].'</th>';
		echo '<th>'. $row['gender'].'</th>';
		echo '<th>'. $row['description'].'</th>';
		echo '<th>'. $row['overallrating'].'</th>';

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

		echo '</tr>';
	}
echo '</table>';


}
catch (PDOException $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

?>

</div>

</body>
</html>