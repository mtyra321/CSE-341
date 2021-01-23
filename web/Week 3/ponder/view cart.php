<?php

session_start();



if(isset($_POST['n10']))
{
    unset($_SESSION["item1"]);
}
if(isset($_POST['n20']))
{
    unset($_SESSION["item2"]);
}
if(isset($_POST['switch']))
{
    unset($_SESSION["item3"]);
}
if(isset($_POST['oculus']))
{
    unset($_SESSION["item4"]);
}
if(isset($_POST['ps20']))
{
    unset($_SESSION["item5"]);
}
if(isset($_POST['ps25']))
{
    unset($_SESSION["item6"]);
}
if(isset($_POST['x25']))
{
    unset($_SESSION["item7"]);
}
if(isset($_POST['x50']))
{
    unset($_SESSION["item8"]);
}




    $price = array("n10"=>"$10","n20"=>"$20","switch"=>"$300",
    "oculus"=>"$300","ps20"=>"$20","ps25"=>"$25","x25"=>"$25","x50"=>"$50");

    $name = array("n10"=>"n10","n20"=>" n20","switch"=>"switch",
    "oculus"=>"oculus","ps20"=>"ps20","ps25"=>" ps25","x25"=>"x25","x50"=>"x50");

    $total = 0;

    if(isset($_SESSION["item1"]))
    {

        $total += 10;

    }

    if(isset($_SESSION["item2"]))
    {

        $total += 20;

    }
    if(isset($_SESSION["item3"]))
    {

        $total += 300;

    }
    if(isset($_SESSION["item4"]))
    {

        $total += 300;

    }
    if(isset($_SESSION["item5"]))
    {

        $total += 20;

    }
    if(isset($_SESSION["item6"]))
    {

        $total += 25;

    }
    if(isset($_SESSION["item7"]))
    {

        $total += 25;

    }
    if(isset($_SESSION["item8"]))
    {

        $total += 50;

    }

  
   
   

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Confirmation Page</title>
    <meta charset="UTF-8">
    <meta name="description" content="Our Academics excel in many fronts">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="view cart.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="ponder.js"></script>
</head>

<body>

    <header class="w3-container w3-teal">
        <h1>My Cart</h1>
    </header>
    <form>

        <div class="w3-container">
            <table class="w3-table-all">
                <tr class="w3-hover-green">
                    <td>Your selected items are:</td>
                    <td>
                        <ol> 
                            <form action="" method="POST"></form>
                            <?php foreach ($_SESSION as $key=>$value) {
                                if(isset($name[$value]) && isset($price[$value])){
                                echo "<li>" . "$name[$value]" . " || Price: " . "$price[$value]" . "</li>"; 
                                echo "<form action='' method='POST'>" . "<button type='submit' name='$value'" ."value='$key'>Remove Item</button></form>";
                                }
                            }
                            ?>
                            </form>
                        </ol>
                    </td>
                </tr>

                <form action="" method="POST"></form>

                <tr class="w3-hover-green">
                    <td>Total Cost:</td>
                    <td> <?= "$" . number_format($total,2);?> </td>
                </tr>

            </table>
            <p class="w3-container w3-teal confirming">Would you like to checkout?</p>
            <button type="button"class="w3-hover-green"><a href="checkout.php">CHECKOUT</a></button>
            <button type="button"class="w3-hover-blue"><a href="browse items.php">SHOP MORE</a></button>

    
    </div>

</body>

<?php



?>


</html>