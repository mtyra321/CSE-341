<?php
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
<p id="site_description">This website shows a list of bathrooms on the BYUI campus. Each bathroom has a location, description, and a rating</p>
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
	$counter = 0;
	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		array_push($bathrooms_list, $row);
		echo '<div class="flex-item" id="'.$row['bathroomid'].'" onclick = "individual_bathroom('.$counter.')">';
		
		echo '<p> '. $row['building']. ' ';
		echo  $row['roomnumber']. ' ';
		echo  $row['gender'].'</p>';
		echo '<p> Rating: '. $row['overallrating'].'/5</p>';


		echo '</div>';
		$counter++;
	}
echo '</div>';

}
catch (PDOException $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

?>
<form action="./individual_bathroom.php" id="theForm" method = "POST">
<input type="text" id="id" name="id" style="visibility: hidden;">
</form>
<script type="text/javascript">
    var the_array = <?php echo json_encode($bathrooms_list); ?>;
	console.log(the_array);
	function individual_bathroom(id) {
    var data = the_array[id];
	document.getElementById("id").value = data.bathroomid;
    console.log(data);
	document.getElementById("theForm").submit();

}
	</script>
</div>
<div id="button_div">
<button id = "add_bathroom"onclick = "window.location.href = './add_bathroom.php'">Add a Bathroom</button>
</div>
</body>
</html>