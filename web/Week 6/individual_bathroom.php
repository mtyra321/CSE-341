<?php
include "../db/dbConnect.php";
$db = get_db();
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Bathroom</title>
</head>
<body>
    <h1>Individual bathroom</h1>
    <input type="text" name = "id" id="id" readonly/>

<?php
	$id = 
    // prepare the statement
	$statement = $db->prepare('SELECT BathroomID, RoomNumber, Gender, description, building, overallrating FROM bathroom where BathroomID = ');
	$statement->execute();
	$bathrooms_list = [];

	// Go through each result
	echo '
	<div class = "flex-container">
	';
	$counter = 0;
	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		array_push($bathrooms_list, $row);
		echo '<div class="flex-item" id="'.$row['bathroomid'].'" onclick = "individual_bathroom('.$counter.')">';
		
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
		$counter++;
	}
echo '</div>';



?>
</body>
</html>