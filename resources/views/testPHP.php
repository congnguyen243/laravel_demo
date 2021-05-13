<?php
echo "test hash pass";
echo hash('ripemd128', 'saltstringmypassword');
echo "<br/>";
$hash =  password_hash("mypassword", PASSWORD_DEFAULT);
echo $hash;
echo "<br/>";
if (password_verify("mypassword", $hash))
    echo "Valid";

?>