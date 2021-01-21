
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php $continents= $_POST['continent'] ?>
    <?php echo "Your name:", $_POST['name']?>
    <?php echo "<br>Your email: mailto:",$_POST['email']?>
    <?php echo "<br>Your Major: ",$_POST['major']?>
    <?php echo "<br>Your Comments: ",$_POST['comments']?>
    <?php echo "<br>The Continents You have visited: "?>
    <?php if (isset($_POST['continent'])) 
{
    print_r($_POST['continent']); 
}?>


</body>
</html>

