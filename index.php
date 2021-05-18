<?php
//$n = 500;
//$arr = [];
//$count = 0;
//while ($n > 1) {
//    if ($count < 50) {
//        $a = $n % 2;
//        $n = (float)($n / 2);
//        array_unshift($arr, $a);
//    } else {
//        die();
//    }
//}
//echo $n;
//
//echo "<pre>";
//var_dump($arr);
//1-1-0-0-1-0;

include_once "Stack.php";
$stack = new Stack();
$stack->getBinary(400);
echo $stack->showStack();
