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
<div id="whole_thing" style="text-align:center;">

<?php
	$id = $_POST["id"];
    // prepare the statement
	$statement = $db->prepare('SELECT BathroomID, RoomNumber, Gender, description, building, overallrating FROM bathroom Where BathroomID = '.$id);
	$statement->execute();

	// Go through each result

	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		echo '<h1>Bathroom Details: '. $row['building'].' '.$row['roomnumber'].' '.$row['gender'].'</h1>';
		echo '<p>Building: '. $row['building']. '</p>';
		echo '<p> Room Number: '.$row['roomnumber']. '</p>';
		echo '<p> Gender: '.$row['gender'].'</p>';
		echo '<p> Description: '. $row['description'].'</p>';
		echo '<p> Rating: '. $row['overallrating'].' out of 5</p>';
        

	}

	//  $statement = $db->prepare('DELETE FROM bathroom Where BathroomID = '.$id);
	// $statement->execute();

?>
<button onclick = "window.location.href = './show_bathrooms.php'">Back to List</button>
<button onclick="

	window.location.href = './show_bathrooms.php'">Delete Bathroom</button>

</script>
</div>
</body>
</html>