<?php
function mysql_entities_fix_string($conn, $string){
    return htmlentities(mysql_fix_string($conn, $string));
}
function mysql_fix_string($conn, $string){
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return $conn->real_escape_string($string);
 }

echo "test<br/>";
$hn = 'localhost';
$db = 'php_demo';
$un = 'root';
$pw = 'root';
$connection = new mysqli($hn, $un, $pw, $db);
if ($connection->connect_error) die("Fatal Error");
else echo "connect to db success<br/>";

// $query1 = "SELECT * FROM users";
// $result1 = $connection->query($query1);

// $rows = $result1->num_rows;
// for ($j = 0 ; $j < $rows ; ++$j){
//     $result1->data_seek($j);
//     $row = $result1->fetch_array(MYSQLI_NUM);
//     echo 'name: ' .htmlspecialchars($row[0]) .'<br>';
//     $result1->data_seek($j);
//     echo 'pass: ' .htmlspecialchars($row[3]) .'<br>';
// }
if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){
    $un_temp = mysql_entities_fix_string($connection, $_SERVER['PHP_AUTH_USER']);
    $pw_temp = mysql_entities_fix_string($connection, $_SERVER['PHP_AUTH_PW']);
    $query = "SELECT * FROM users WHERE username='$un_temp'";
    $result = $connection->query($query);
 
    if (!$result){
        die("User not found");
        echo "not found";
    }
    else{
        $row = $result->fetch_array(MYSQLI_NUM);
        $result->close();
        if (password_verify($pw_temp, $row[3])) {
            session_start();
            $_SESSION['forename'] = $row[0];
            $_SESSION['surname'] = $row[1];
            echo htmlspecialchars("$row[0] $row[1] :Hi $row[0], you are now logged in as '$row[2]'");
        }
        else die("Invalid username/password combination");
    }
    echo "<p><a href='/continue'>Click here to continue</a></p>";
        
}
else
{
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    die ("Please enter your username and password");
} 
$connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>
    <a id="mylink" href="http://mysite.com">Click me</a><br>
    <script>
    test()
    if (typeof a != 'undefined') document.write('a = "' + a + '"<br>')
    if (typeof b != 'undefined') document.write('b = "' + b + '"<br>')
    if (typeof c != 'undefined') document.write('c = "' + c + '"<br>')
    function test(){
    a = 123 // Global scope
    var b = 456 // Local scope
    if (a == 123) var c = 789 // Local scope
    }
    url = document.links.mylink.href
    document.write('The URL is ' + url)
    // level = score = time = 0
    // document.write('The URL is ' + level +score)
    onerror = errorHandler
    document.write("Welcome to this website") // Deliberate error
    function errorHandler(message, url, line){
        out = "Sorry, an error was encountered.\n\n";
        out += "Error: " + message + "\n";
        out += "URL: " + url + "\n";
        out += "Line: " + line + "\n\n";
        out += "Click OK to continue.\n\n";
        alert(out);
        return true;
    }
    document.write("<br/>")
    words = fixNames("the", "DALLAS", "CowBoys")
    for (j = 0 ; j < words.length ; ++j)
        document.write(words[j] + "<br>")
    function fixNames(){
        var s = new Array()
        for (j = 0 ; j < fixNames.arguments.length ; ++j)
            s[j] = fixNames.arguments[j].charAt(0).toUpperCase() +
            fixNames.arguments[j].substr(1).toLowerCase()
            return s
    }
    </script>
</body>
</html>