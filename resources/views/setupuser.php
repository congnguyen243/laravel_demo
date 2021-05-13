<?php
echo "test<br/>";
$hn = 'localhost';
$db = 'php_demo';
$un = 'root';
$pw = 'root';
$connection = new mysqli($hn, $un, $pw, $db);
if ($connection->connect_error) die("Fatal Error");
else echo "connect to db success<br/>";

$query = "CREATE TABLE users (
    forename VARCHAR(32) NOT NULL,
    surname VARCHAR(32) NOT NULL,
    username VARCHAR(32) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
    )";
$result = $connection->query($query);
if (!$result) die("Fatal Error");

$forename = 'Bill';
$surname = 'Smith';
$username = 'bsmith';
$password = 'mysecret';
$hash = password_hash($password, PASSWORD_DEFAULT);
add_user($connection, $forename, $surname, $username, $hash);

$forename2 = 'Pauline';
$surname2 = 'Jones';
$username2 = 'pjones';
$password2 = 'acrobat';
$hash2 = password_hash($password2, PASSWORD_DEFAULT);

add_user($connection, $forename2, $surname2, $username2, $hash2);
function add_user($connection, $fn, $sn, $un, $pw){
    $stmt = $connection->prepare('INSERT INTO users VALUES(?,?,?,?)');
    $stmt->bind_param('ssss', $fn, $sn, $un, $pw);
    $stmt->execute();
    $stmt->close();
}
$connection->close();

?>