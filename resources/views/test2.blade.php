<?php

if (isset($_POST['name'])) $name = $_POST['name'];
else $name = "(Not entered)";

echo "Your name is: $name<br>";

?>