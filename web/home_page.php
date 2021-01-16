<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matt Tyra's Home Page</title>
    <link rel="stylesheet" type="text/css" href="home_page.css">
</head>

<body>
    <div class="topbar">
        <a href="./home_page.html">Home</a>
        <a href="./assignments.html">Assignments</a>
        <a href="./about_me.html">About me</a>
    </div>

    <div class="grid-container">

        <div class="grid-item name">
            <p id="name">Matt Tyra </p>
        </div>
        <div class="grid-item class">

            <p id="class">Web Backend 2 </p>
        </div>
        <div class="grid-item assignments">
            <a href="./assignments.html" id="assignments">My Assignments</a>
        </div>
        <div class="grid-item about_me">
            <a href="./about_me.html" id="about_me">My About me page</a>
        </div>
    </div>
    <?php include "home.php";?>

</body>

</html>