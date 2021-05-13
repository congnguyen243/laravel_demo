<?php

// An example callback function
function my_callback_function() {
    echo 'hello world!1';
}

// An example callback method
// class MyClass {
//     static function myCallbackMethod() {
//         echo 'Hello World!x';
//     }
// }

// Type 1: Simple callback
// call_user_func('my_callback_function');

// Type 2: Static class method call, static class mehtod can also be passed without instantiating an oj
// call_user_func(array('MyClass', 'myCallbackMethod'));

// Type 3: Object method call, a method of instantial oj is passed as an array
// $obj = new MyClass();
// call_user_func(array($obj, 'myCallbackMethod'));

// Type 4: Static class method call
// call_user_func('MyClass::myCallbackMethod');

// Type 5: Relative static class method call
// class A {
//     public static function who() {
//         echo "A\n";
//     }
// }

// class B extends A {
//     public static function who() {
//         echo "B\n";
//     }
// }

// call_user_func(array('B', 'parent::who')); // A
// call_user_func(array('B', 'who'));//B
// Type 6: Objects implementing __invoke can be used as callables
// class C {
//     public function __invoke($name) {
//         echo 'Hello ', $name, "\n";
//     }
// }

// $c = new C();
// $c('heloo')
// call_user_func($c, 'PHP!');

//invoke
// class CallableClass
// {
//     public function __invoke($x)
//     {
//         var_dump($x);
//     }
// }
// $obj = new CallableClass;
// $obj(5);
// var_dump(is_callable($obj));

// Our closure
$double = function($a) {
    return $a * 2;
};

// This is our range of numbers
$numbers = range(1, 5);

// Use the closure as a callback here to
// double the size of each element in our
// range
$new_numbers = array_map($double, $numbers);

// print implode(' ', $new_numbers);
// print_r($new_numbers);

?>