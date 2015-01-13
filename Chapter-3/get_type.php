<?php

$test_var; 
echo gettype($test_var) . "<br/>";

$test_var = 15;
echo gettype($test_var) . "<br/>";

$test_var = 8.23;
echo gettype($test_var) . "<br/>";

$test_var = "Hello, world!";
echo gettype($test_var) . "<br/>";

$test_var = 8.23;
echo $test_var . "<br/><br/>";

settype($test_var, "string");
echo $test_var . "<br/>";

settype($test_var, "integer");
echo $test_var . "<br/>";

settype($test_var, "float");
echo $test_var . "<br/>";

settype($test_var, "boolean");
echo $test_var . "<br/><br/>";

$test_var = 8.23;
echo $test_var . "<br/>";
echo (string) $test_var . "<br/>";
echo (int) $test_var . "<br/>";
echo (float) $test_var . "<br/>";
echo (boolean) $test_var . "<br/>";

?>
