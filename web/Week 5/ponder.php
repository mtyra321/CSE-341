
<?php 
include "../db/dbConnect.php";
$db = get_db();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show the database</title>
</head>
<body>
<?php
$statement = $db->prepare("SELECT *  FROM bathroom");
$statement->execute();

// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	$name = $row['name'];
	$description = $row['description'];
	$location = $row['location'];
	$rating = $row['rating'];

    echo "<p>name: $name</p> <br><p>Description: $description</p><br><p>Location: $location</p><br><p> - Overall rating - $rating</p>";
}
    ?>
</body>
</html>