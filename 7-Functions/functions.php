<?php

function functionName($param1, $param2, $param3 = 'as')
{
    echo "$param1 <br>";
    echo "$param2 <br>";
    echo "$param3 <br>";
}

functionName(1, 2, 3);

//function can return an result

function addFuntion($number1, $number2)
{
    return $number1 + $number2;
}

echo addFuntion(1, 2);

//Variables defined into functions are not available globally, be careful

//Functions into variables

function hello_world()
{
    echo 'Hello world';
}

function bye_world()
{
    echo 'Bye world!';
}

$function_hello_world = "hello_world";

echo $function_hello_world();