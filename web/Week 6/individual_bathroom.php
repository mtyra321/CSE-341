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
        echo $row['bathroomid'];
        if($row['bathroomid'] == $id){
		echo '<p> '. $row['building']. ' ';
		echo  $row['roomnumber']. ' ';
		echo  $row['gender'].'</p>';
		// echo '<p>'. $row['description'].'</p>';
		echo '<p>'. $row['overallrating'].'</p>';
        }

	}



?>
</body>
</html>