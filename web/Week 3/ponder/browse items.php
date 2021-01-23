<?php


class item
{

  public $name;
  public $price;
  public $quant;

  function set_item($name, $price, $quant)
  {
    $this->name = $name;
    $this->price = $price;
    $this->quant = $quant;
  }
}

class cart
{

  public $cart;
}

session_start();



?>

<!DOCTYPE html>
<html>

<head>
  <title>Purchaseable Items</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
  <link rel="stylesheet" href="ponder.css">

  <script src="items.js"></script>
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Karma", sans-serif
    }

    .w3-bar-block .w3-bar-item {
      padding: 20px
    }
  </style>
</head>

<body>


  <!-- The code for the design of this page was borrowed from a w3schools template -->
  <!-- Top menu -->
  <div class="w3-top">
    <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
      <div class="w3-button w3-padding-16 w3-left">☰</div>
      <div class="w3-right w3-padding-16 w3-button" onclick="submitform()"> <a href="view cart.php">View My Cart</a></div>
      <div class="w3-center w3-padding-16">Purchaseable Items</div>
    </div>
  </div>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">


    <!-- First Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center" id="items">
      <div class="w3-quarter">
        <img src="N gift 10.jpg" alt="nintendo gift card" style="width:100%">
        <h3>$10 - Nintendo Gift Card</h3>
        <form action="" id="form1" method="POST">
          <p class="add w3-container w3-teal w3-hover-blue" onclick="checkit('item1')">Add item to Cart</p>
          <input type="checkbox" name="item1" value="n10" id="item1" onchange="if(ischeck(this)) submitform()">
      </div>
      <div class="w3-quarter">
        <img src="N gift 20.jpg" alt="nintendo gift card" style="width:100%">
        <h3>$20 - Nintendo Gift Card </h3>
        <p class="add w3-container w3-teal w3-hover-blue" onclick="checkit('item2')">Add item to Cart</p>
        <input type="checkbox" name="item2" value="n20" id="item2" onchange="if(ischeck(this)) submitform()">
      </div>
      <div class="w3-quarter">
        <img src="switch 300.jpg" alt="tree" style="width:100%">
        <h3>$300 - Nintendo Switch</h3>
        <p class="add w3-container w3-teal w3-hover-blue" onclick="checkit('item3')">Add item to Cart</p>
        <input type="checkbox" name="item3" value="switch" id="item3" onchange="if(ischeck(this)) submitform()">
      </div>
      <div class="w3-quarter">
        <img src="oculus 300.jpg" alt="bednar_dinner" style="width:100%">
        <h3>$300 - Oculus</h3>
        <p class="add w3-container w3-teal w3-hover-blue" onclick="checkit('item4')">Add item to Cart</p>
        <input type="checkbox" name="item4" value="oculus" id="item4" onchange="if(ischeck(this)) submitform()">
      </div>
    </div>

    <!-- Second Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center">
      <div class="w3-quarter">
        <img src="PS gift 20.jpg" alt="Pink_tiger_lillies" style="width:100%">
        <h3>$20 - Play Station Gift card</h3>
        <p class="add w3-container w3-teal w3-hover-blue" onclick="checkit('item5')">Add item to Cart</p>
        <input type="checkbox" name="item5" value="ps20" id="item5" onchange="if(ischeck(this)) submitform()">
      </div>
      <div class="w3-quarter">
        <img src="PS gift 25.jpg" alt="Sleeping_Cat" style="width:100%">
        <h3>$25 - Play Station Gift card</h3>
        <p class="add w3-container w3-teal w3-hover-blue" onclick="checkit('item6')">Add item to Cart</p>
        <input type="checkbox" name="item6" value="ps25" id="item6" onchange="if(ischeck(this)) submitform()">
      </div>
      <div class="w3-quarter">
        <img src="x gift 25.jpg" alt="Indonesian_chicken_taming_lesson" style="width:100%">
        <h3>$25 - X box gift card</h3>
        <p class="add w3-container w3-teal w3-hover-blue" onclick="checkit('item7')">Add item to Cart</p>
        <input type="checkbox" name="item7" value="x25" id="item7" onchange="if(ischeck(this)) submitform()">
      </div>
      <div class="w3-quarter">
        <img src="x gift 50.jpg" alt="Croissant" style="width:100%">
        <h3>$50 - X box gift card</h3>
        <p class="add w3-container w3-teal w3-hover-blue" onclick="checkit('item8')">Add item to Cart</p>
        <input type="checkbox" name="item8" value="x50" id="item8" onchange="if(ischeck(this)) submitform()">
        </form>
      </div>
    </div>

    <?php



    if (isset($_POST["item1"])) {
      $_SESSION["item1"] = "n10";
    }
    if (isset($_POST["item2"])) {
      $_SESSION["item2"] = "n20";
    }

    if (isset($_POST["item3"])) {
      $_SESSION["item3"] = "switch";
    }

    if (isset($_POST["item4"])) {
      $_SESSION["item4"] = "oculus";
    }

    if (isset($_POST["item5"])) {
      $_SESSION["item5"] = "ps20";
    }
    if (isset($_POST["item6"])) {
      $_SESSION["item6"] = "ps25";
    }
    if (isset($_POST["item7"])) {
      $_SESSION["item7"] = "x25";
    }
    if (isset($_POST["item8"])) {
      $_SESSION["item8"] = "x50";
    }




    function sanitize($input)
    {


      if (isset($_GET[$input])) {
        //store value
        $value = $_GET[$input];
        //remove whitespace
        $value = trim($value);
        //strip slashse
        $value = stripslashes($value);

        $value = htmlspecialchars($value);

        return $value;
      } else {
        return "";
      }
    }


    ?>


</body>

</html>