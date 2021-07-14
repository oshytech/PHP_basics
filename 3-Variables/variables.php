<!-- PHP is a weak typing language, We need define variables without define what is his type,
     but we can use all common types in other languages -->

<?php
//Integer numbers 1,2,3,4...
$integer_variable = 200;

//Float - Double numbers with float dot 1.2, 1.6...
$float_variable = 1.2;

//Boolean true/false
$boolean_variable = true;

//String are text
$string_variable = 'This is an string';

//Variables can store null value

$null_variable = null;

//We can know the type of variable using gettype() method
echo gettype($integer_variable) . ' - ' . $integer_variable . '<br>';
echo gettype($float_variable) . ' - ' . $float_variable . '<br>';
echo gettype($boolean_variable) . ' - ' . $boolean_variable . '<br>';
echo gettype($string_variable) . ' - ' . $string_variable . '<br>';
echo gettype($null_variable) . ' - ' . $null_variable . '<br>';

//You can use array to store multiple values in one variable

$array_demo = ['123', '456', '789'];
$other_array = array('123', '456', '789');

echo implode($array_demo) . '<br>';
echo $array_demo[0];

//Is possible define manually index
$array_values = array(
    'web_page' => 'https://rolteca.com',
    'Developer' => 'Roger Bosch',
);