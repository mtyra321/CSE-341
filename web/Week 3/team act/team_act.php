<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3 Team activity</title>
    <link rel="stylesheet" type="text/css" href="team_act.css">
    <!-- <script src="team_act.js"></script> -->
</head>
<body>
    <h1>W3 Team Activity</h1>
    <form id="form" action="form_results.php" method="POST">
    <label for="name">Enter your Name</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="email">Enter your Email Address</label><br>
    <input type="text" id="email" name="email"><br>
    <label for="major">Enter your Major</label><br>
    <input type="radio" name="major" id="Computer Science" value="Computer Science">
    <label for="Computer Science">Computer Science</label><br>
    <input type="radio" name="major"  id="Web Design and Development" value="Web Design and Development">
    <label for="Web Design and Development">Web Design and Development</label><br>
    <input type="radio" name="major"  id="Computer Information Technology" value="Computer Information Technology">
    <label for="Computer Information Technology">Computer Information Technology</label><br>
    <input type="radio" name="major" id="Computer Engineering" value="Computer Engineering">
    <label for="Computer Engineering">Computer Engineering</label><br>
    <input type="radio" name="major" id="Software Engineering" value="Software Engineering">
    <label for="Software Engineering">Software Engineering</label><br>
    <label for="comments">Comments:</label><br>
    <input type="textbox" id="comments" name="comments"><br>
    <p>Contenents you've visited</p>
    <input type="checkbox" id="North America" name="continent" value="North America">
    <label for="North America"> North America</label><br>
    <input type="checkbox" id="South America" name="continent" value="South America">
    <label for="South America"> South America</label><br>
    <input type="checkbox" id="Africa" name="continent" value="Africa">
    <label for="Africa">Africa </label><br>
    <input type="checkbox" id="Asia" name="continent" value="Asia">
    <label for="Asia">Asia </label><br>
    <input type="checkbox" id="Europe" name="continent" value="Europe">
    <label for="Europe"> Europe</label><br>
    <input type="checkbox" id="Australia" name="continent" value="Australia">
    <label for="Australia"> Australia</label><br>
    <input type="checkbox" id="Antarctica" name="continent" value="Antarctica">
    <label for="Antarctica">Antarctica </label><br>
    <button type="submit">Submit</button>
</form>
</body>
</html>