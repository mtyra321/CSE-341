
<?php
echo "Today is " . date("l");
echo ", " . date("m-d-Y") . "<br>";
date_default_timezone_set("America/Denver");
echo date("h:i:sa");
?>