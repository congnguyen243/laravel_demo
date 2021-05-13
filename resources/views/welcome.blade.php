<?php
 echo " Today is " . date("l") . ".  <br/>";
 echo " Today is " , date("l") , ". ";
 echo "<h2>PHP is Fun!</h2>";
 print "<h2>PHP is Fun!</h2>";
 print "Hello world!<br>";
 print "I'm about to learn PHP!";
 $author = "Steve Ballmer\n";

 echo "Developers, developers, developers, developers, developers,
 developers, developers, developers, developers!
 - $author.";
 $text = 'My spelling\'s still atroshus';
 echo "<br/>$text";

 echo "If you view the page source \r\n you will find a newline in this string.";
 echo nl2br("You will find the \n newlines in this string \r\n on the browser window.");
 echo "<br/>";
 
 $author = "Brian W. Kernighan";
 echo <<<_END
 ****Debugging is twice as hard as writing the code in the first place.
 Therefore, if you write the code as cleverly as possible, you are,
 by definition, not smart enough to debug it.
 - $author.
_END;
echo <<<'EOD'
Example of string spanning multiple lines
using nowdoc syntax. Backslashes are always treated literally,
e.g. \\ and \'.
EOD;
echo "<br/>";

$number = 12345 * 67890;
 echo $number;
 echo "<br/>";
 echo (addcslashes('freetuts.net FREETUTS.NET', 'a..z'));
 echo "<br/>";
 echo (addcslashes('freetuts.net FREETUTS.NET', 'a..zA..Z'));
 echo "<br/>";
 echo addslashes ("Freetuts's ;a website \ , ' /learning online");
 echo "<br/>";
 echo htmlentities('<b>freetuts.net</b>');
 // Kết quả <b>freetuts.net</b>
 echo "<br/>";
$str = htmlentities('<b>freetuts.net</b>');
  
echo 'Entity: ' . $str . '<br/>';
echo 'Decode: ' . html_entity_decode($str);
echo "<br/>";
echo strip_tags('<b>freetuts.net</b>', 'b');
echo "<br/>";
echo strstr('freetuts.net Xin Chào', 'Xin');
// Kết quả: Xin Chào   
echo "<br/>";
echo strpos('freetuts.net chào các bạn', 'chào');
echo "<br/>";
echo lcfirst('Freetuts.net chào các bạn');   
echo "<br/>";
echo ucwords('Freetuts.net chào các bạn');


$object1 = new User();
$object1->name = "Alice";
$object2 =clone $object1;
$object2->name = "Amy";
echo "object1 name = " . $object1->name . "<br>";
echo "object2 name = " . $object2->name;
class User
{
    public $name;
}
$ob1 = new Cong();
$ob1->name = "cong";
echo "<br/>",$ob1->name;
class Cong{
    const Viet = "test";
    
    function lookup(){
        static $count = 0;
        $count++;
        echo $count;
        echo self::Viet;
    }
};
echo "<br/>",$ob1->lookup();
echo "<br/>",$ob1->lookup();
echo "<br/>",$ob1->lookup();
XX::pwd_string();
class XX
{
    static function pwd_string()
    {
    echo "Please enter your password<br/>";
    }
}
$temp = new Test();
echo "Test A: " . Test::$static_property . "<br>";
echo "Test B: " . $temp->get_sp() . "<br>";
class Test
{
    static $static_property = "I'm static";
    function get_sp()
    {
        return self::$static_property;
    }
}
echo "<br/>------<br/>";
$object3 = new Son;
$object3->test();
$object3->test2();
class Dad{
    function test(){
    echo "[Class Dad] I am your Father<br>";
    }
}
class Son extends Dad{
    function test(){
        echo "[Class Son] I am Luke<br>";
    }
    function test2(){
        parent::test();
        self::test();
    }
}
echo "<br/>------<br/>";
$object4 = new Tiger();
echo "Fur: " . $object4->fur . "<br>";
echo "Stripes: " . $object4->stripes;
class Wildcat{
    public $fur; // Wildcats have fur
    function __construct(){
    $this->fur = "TRUE";
    }
}
class Tiger extends Wildcat
{
    public $stripes; // Tigers have stripes
    function __construct(){
        parent::__construct(); // Call parent constructor first
        $this->stripes = "TRUE";
    }
}
class FuncFinal{
    final function copyright()
    {
    echo "This class was written by Joe Smith";
    }
}

echo "<br/>------<br/>";
$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";

$paper[0] = "Copier1";
$paper[1] = "Inkje1t";
$paper[2] = "Laser1";
$paper[3] = "Pho1to";
$paper['copier'] = "Copier & Multipurpose";
 $paper['inkjet'] = "Inkjet Printer";
 $paper['laser'] = "Laser Printer";
 $paper['photo'] = "Photographic Paper";
 
print_r($paper);
echo "<br/>------<br/>";
echo $paper['laser'];

echo "<br/>------<br/>";

$p1 = array("Copier", "Inkjet", "Laser", "Photo");
 echo "p1 element[2]: " . $p1[2] . "<br>";
 $p2 = array('copier' => "Copier & Multipurpose",
 'inkjet' => "Inkjet Printer",
 'laser' => "Laser Printer",
 'photo' => "Photographic Paper");
 echo "p2 element: " . $p2['inkjet'] . "<br>";
// print_r($p1);
echo "<br/>------<br/>";
foreach($p2 as $i){
    echo "$i<br/>";
}
echo "<br/>------<br/>";
foreach($p2 as $i=> $description){
    echo "$i:$description<br/>";
}
echo "<br/>------<br/>";

list($a, $b) = array('Alice', 'Bob');
echo "a=$a b=$b";
echo "<br/>------<br/>";

$products = array(
    'paper' => array(
        'copier' => "Copier & Multipurpose",
        'inkjet' => "Inkjet Printer",
        'laser' => "Laser Printer",
        'photo' => "Photographic Paper"),
    'pens' => array(
        'ball' => "Ball Point",
        'hilite' => "Highlighters",
        'marker' => "Markers"),
    'misc' => array(
        'tape' => "Sticky Tape",
        'glue' => "Adhesives",
        'clips' => "Paperclips"
    )
);
sort($products);
echo "<pre>";
foreach($products as $section => $items)
    foreach($items as $key => $value)
        echo "$section:\t$key\t($value)<br>";
echo "</pre>";
echo count($products,1);
echo "<br/>------<br/>";

printf("My name is %s. I'm %d years old, which is %X in hexadecimal",
'Simon', 33, 33);
printf("<br/><span style='color:#%X%X%X'>Hello</span>", 65, 127, 245);
printf("The result is: $%.2f", 123.42 / 12);

echo "<pre>"; // Enables viewing of the spaces
// Pad to 15 spaces
printf("The result is $%15f\n", 123.42 / 12);
// Pad to 15 spaces, fill with zeros
printf("The result is $%015f\n", 123.42 / 12);
// Pad to 15 spaces, 2 decimal places precision
printf("The result is $%15.2f\n", 123.42 / 12);
// Pad to 15 spaces, 2 decimal places precision, fill with zeros
printf("The result is $%015.2f\n", 123.42 / 12);
// Pad to 15 spaces, 2 decimal places precision, fill with # symbol
printf("The result is $%'#15.2f\n", 123.42 / 12);

echo "<pre>"; // Enables viewing of the spaces
$h = 'Rasmus';
printf("[%s]\n", $h); // Standard string output
printf("[%12s]\n", $h); // Right justify with spaces to width 12
printf("[%-12s]\n", $h); // Left justify with spaces
printf("[%012s]\n", $h); // Pad with zeros
printf("[%'#12s]\n\n", $h); // Use the custom padding character '#'
$d = 'Rasmus Lerdorf'; // The original creator of PHP
printf("[%12.8s]\n", $d); // Right justify, cutoff of 8 characters
printf("[%-12.12s]\n", $d); // Left justify, cutoff of 12 characters
printf("[%-'@12.10s]\n", $d); // Left justify, pad with '@', cutoff 10 chars

echo "<br/>------<br/>";
echo "time() + 7 * 24 * 60 * 60<br/>";
echo date("l F jS, Y - g:ia", time()),"<br/>";
echo "DATE_RSS: ",date(DATE_RSS),"<br/>";
$month = 9; // September (only has 30 days)
$day = 31; // 31st
$year = 2022; // 2022
if (checkdate($month, $day, $year)) echo "Date is valid";
else echo "Date is invalid";

echo "<br/>------<br/>";
if (file_exists("testfile.txt")) echo "File exists<br/>";
else echo "file not exists<br/>";
$fh = fopen("testfile.txt", 'w') or die("Failed to create file");
$text = "Cong nguyen";
fwrite($fh, $text) or die("Could not write to file");
fclose($fh);
echo "File 'testfile.txt' written successfully";
$line = fgets(fopen("testfile.txt",'r'));
fclose(fopen("testfile.txt",'r'));
echo $line;
echo "<br/>------<br/>";
copy('testfile.txt', 'testfile2.txt') or die("Could not copy file");
echo "File successfully copied to 'testfile2.txt'";
$line1 = fgets(fopen("testfile2.txt",'r'));
echo "<br/>------<br/>";
fclose(fopen("testfile2.txt",'r'));echo "file testfile2.txt: ",$line1;

echo "<br/>------<br/>";

if (!unlink('testfile2.txt')) echo "Could not delete file";
else echo "File 'testfile2.txt' successfully deleted";
if (file_exists("testfile2.txt")) echo "File testfile2 exists<br/>";
echo "<br/>------<br/>";

echo "
<html>
    <head><title>PHP Form Upload</title></head>
    <body>
        <form method='post' action='wellcom.blade.php' enctype='multipart/form-data'>
            Select File: <input type='file' name='filename' size='10'>
            <input type='submit' value='Upload'>
        </form> 
    ";
 if ($_FILES)
 {
 $name = $_FILES['filename']['name'];
 move_uploaded_file($_FILES['filename']['tmp_name'], $name);
 echo "Uploaded image '$name'<br><img src='$name'>";
 }
 echo "</body>
 </html>";
 echo "<br/>------<br/>";

$cmd = "dir"; // Windows
// $cmd = "ls"; // Linux, Unix & Mac
exec(escapeshellcmd($cmd), $output, $status);
if ($status) echo "Exec command failed";
else
{
echo "<pre>";
foreach($output as $line) echo htmlspecialchars("$line\n");
echo "</pre>";
}

$hn = 'localhost';
$db = 'php_demo';
$un = 'root';
$pw = 'root';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");
$query = "SELECT * FROM accounts";
$result = $conn->query($query);
print_r($result);
if (!$result) die("Fatal Error");

$rows = $result->num_rows;
for ($j = 0 ; $j < $rows ; ++$j){
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
    echo 'Number: ' .htmlspecialchars($row[0]) .'<br>';
    // echo 'Number: ' .htmlspecialchars($result->fetch_assoc()['number']) .'<br>';
    $result->data_seek($j);
    echo 'Balance: ' .htmlspecialchars($row[1]) .'<br>';
    // echo 'Balance: ' .htmlspecialchars($result->fetch_assoc()['balance']) .'<br>';
}

// $query2 = "CREATE TABLE cats (
//     id SMALLINT NOT NULL AUTO_INCREMENT,
//     family VARCHAR(32) NOT NULL,
//     name VARCHAR(32) NOT NULL,
//     age TINYINT NOT NULL,
//     PRIMARY KEY (id)
//     )";
// $result2 = $conn->query($query2);
// if (!$result2) die ("Database access failed");

// $query3 = "DESCRIBE cats";
// $result3 = $conn->query($query3);
// if (!$result3) die ("Database access failed");
// $rows = $result3->num_rows;
// echo "<table><tr><th>Column</th><th>Type</th><th>Null</th><th>Key</th></tr>";
// for ($j = 0 ; $j < $rows ; ++$j){
// $row = $result3->fetch_array(MYSQLI_NUM);
// echo "<tr>";
// for ($k = 0 ; $k < 4 ; ++$k)
//     echo "<td>" . htmlspecialchars($row[$k]) . "</td>";
//     echo "</tr>";
// }
// echo "</table>";

// $query4 = "INSERT INTO cats VALUES(NULL, 'Lion', 'Leo', 4)";
// $result4 = $conn->query($query4);
// if (!$result4) die ("Database access failed");

$result->close();
$conn->close();

echo <<<_END
<html>
    <head>
        <title>Form Test</title>
    </head>
<body>
    <form method="post" action="/test2" autocomplete='off'>
        What is your name?
        <input type="text" name="name" autocomplete='on'>
        <input type='time' name='meeting' value='12:00'
            min='09:00' max='16:00' step='3600'>


        Select destination:
        <input type='url' name='site' list='links'>
            <datalist id='links'>
                <option label='Google' value='http://google.com'>
                <option label='Yahoo!' value='http://yahoo.com'>
                <option label='Bing' value='http://bing.com'>
                <option label='Ask' value='http://ask.com'>
            </datalist>
        Choose a color <input type='color' name='color'>
        <input type='number' name='age'>
        <input type='range' name='num' min='0' max='100' value='50' step='1'>   
        <input type="submit" formaction='url2.php' >
    </form>
</body>
</html>

_END;

$username = 'admin';
$password = 'letmein';

if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){
    echo "You enter user " . htmlspecialchars($_SERVER['PHP_AUTH_USER']) .
    "You enterpPassword: " . htmlspecialchars($_SERVER['PHP_AUTH_PW']);
    if ($_SERVER['PHP_AUTH_USER'] === $username &&
        $_SERVER['PHP_AUTH_PW'] === $password)
        echo "You are now logged in";
    else die("<br/> Invalid username/password combination");

}
else{
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    die("Please enter your username and password");
}

echo hash('ripemd160', 'The quick brown fox jumped over the lazy dog.');
// $password = Hash::make('yourpassword');
// echo $password;

$password = 'JohnDoe';
$hashedPassword = Hash::make($password);
echo $hashedPassword;
?>