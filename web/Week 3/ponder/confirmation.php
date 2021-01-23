
<?php


session_start();
$_SESSION["street"] = $_POST["street"];
$_SESSION["zip"] = $_POST["zip"];
$_SESSION["city"] = $_POST["city"];
$_SESSION["state"] = $_POST["state"];

$street = $_SESSION["street"];
$zip = $_SESSION["zip"];
$city = $_SESSION["city"];
$state = $_SESSION["state"];

$address = $street . " " . $city ."," . $state . " " . $zip;

$num = 1;

$price = array("n10"=>"$10","n20"=>"$20","switch"=>"$300",
"oculus"=>"$300","ps20"=>"$20","ps25"=>"$25","x25"=>"$25","x50"=>"$50");

$name = array("n10"=>"n10","n20"=>" n20","switch"=>"switch",
"oculus"=>"oculus","ps20"=>"ps20","ps25"=>" ps25","x25"=>"x25","x50"=>"x50");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Submission</title>
    <meta charset="UTF-8">
    <meta name="description" content="Our Academics excel in many fronts">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="view cart.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>

    <header class="w3-container w3-teal">
        <h1>Your order has been confirmed and will be sent to the following address below: </h1>
    </header>
    <header class="w3-container w3-teal">
        <h1>Your purchased items are listed below:</h1>
    </header>

    <form id="form" action="assign12_a.php" method="GET">

        <div class="w3-container">
            <table class="w3-table-all">

                <tr class="w3-hover-blue">
                    <td>Address</td>
                    <td><?= $address ?></td>
                </tr>
                <tr>


                

                <?php

                
                if(isset($_SESSION["item1"]))
                {

                    $item1 = $_SESSION["item1"];
                    $item1 =  $name[$item1];
                    echo "<tr class='w3-hover-blue'><td> Item $num:</td><td>$item1</td></tr>";

                    $num +=1;

                
                }


                if(isset($_SESSION["item2"]))
                {

                    $item2 = $_SESSION["item2"];
                    $item2 =  $name[$item2];
                    echo "<tr class='w3-hover-blue'><td> Item $num:</td><td>$item2</td></tr>";

                    $num +=1;

                
                }

                if(isset($_SESSION["item3"]))
                {

                    $item3 = $_SESSION["item3"];
                    $item3 =  $name[$item3];
                    echo "<tr class='w3-hover-blue'><td> Item $num:</td><td>$item3</td></tr>";

                    $num +=1;

                
                }

                if(isset($_SESSION["item4"]))
                {

                    $item4 = $_SESSION["item4"];
                    $item4 =  $name[$item4];
                    echo "<tr class='w3-hover-blue'><td> Item $num:</td><td>$item4</td></tr>";

                    $num +=1;

                
                }

                if(isset($_SESSION["item5"]))
                {

                    $item5 = $_SESSION["item5"];
                    $item5 =  $name[$item5];
                    echo "<tr class='w3-hover-blue'><td> Item $num:</td><td>$item5</td></tr>";

                    $num +=1;

                
                }

                if(isset($_SESSION["item6"]))
                {

                    $item6 = $_SESSION["item6"];
                    $item6 =  $name[$item6];
                    echo "<tr class='w3-hover-blue'><td> Item $num:</td><td>$item6</td></tr>";

                    $num +=1;

                
                }

                if(isset($_SESSION["item7"]))
                {

                    $item7 = $_SESSION["item7"];
                    $item7 =  $name[$item7];
                    echo "<tr class='w3-hover-blue'><td> Item $num:</td><td>$item7</td></tr>";

                    $num +=1;

                
                }

                if(isset($_SESSION["item8"]))
                {

                    $item8 = $_SESSION["item8"];
                    $item8 =  $name[$item8];
                    echo "<tr class='w3-hover-blue'><td> Item $num:</td><td>$item8</td></tr>";

                    $num +=1;

                
                }

               

                ?>
                
                </tr>
            </table>

            



</body>

</html>