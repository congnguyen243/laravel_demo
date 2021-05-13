<?php
function foobar($arg, $arg2) {
    echo __FUNCTION__, " got $arg and $arg2\n";
}
class foo {
    function bar($arg, $arg2) {
        echo __METHOD__, " got $arg and $arg2\n";
    }
}

class fu {
    function bar($arg, $arg2) {
        echo __CLASS__, " got $arg and $arg2\n";
    }
}

// Call the foobar() function with 2 arguments
call_user_func_array("foobar", array("one", "two"));
echo "<br/>";

// Call the $foo->bar() method with 2 arguments
$foo = new foo;
call_user_func_array(array($foo, "bar"), array("three", "four"));

echo "<br/>";
$fu = new fu;
call_user_func_array(array($fu,"bar"),array("11","22"));
echo "-------<br/>";

// Using lambda function
$func = function($arg1, $arg2) {
    return $arg1 * $arg2;
};

var_dump(call_user_func_array($func, array(2, 4)));


// Passing values by reference

function mega(&$a){
    $a = 55;
    echo "function mega \$a=$a\n";
}
$bar = 77;
call_user_func_array('mega',array(&$bar));
echo "global \$bar=$bar\n";

?>