<?php
include "../db/dbConnect.php";
$db = get_db();
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

<?php
	$id = $_POST["id"];
    echo 'id is ', $id;
    // prepare the statement
	$statement = $db->prepare('SELECT BathroomID, RoomNumber, Gender, description, building, overallrating FROM bathroom Where BathroomID = '.$id);
	$statement->execute();
	$bathrooms_list = [];

	// Go through each result

	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		echo '<p>Building: '. $row['building']. '</p>';
		echo '<p> Room Number: '.$row['roomnumber']. '</p>';
		echo '<p> Gender: '.$row['gender'].'</p>';
		echo '<p> Description: '. $row['description'].'</p>';
		echo '<p> Rating: '. $row['overallrating'].' out of 5</p>';
        

	}



?>
<button><a href="/.show_bathrooms.php">Back to List</a></button>
</body>
</html>