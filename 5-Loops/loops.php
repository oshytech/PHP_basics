<?php

/*  While is a common command in all programing languages, code loop when condition is true */

$number = 0;
while ($number <= 100) {
    echo "<label> Element number $number </label> <br>";
    //is necessary increment manually or the integer loop will not finish never
    $number++;
    if ($number == 99) {
        // You can use break to exit loop
        break;
    }
}

//For is similar to while but include the autoincrement in definition
$number = 0;
for ($i = 0; $i < 100; $i++) {
    echo "<label> Element number $i </label> <br>";
}

//if you have an array you can use foreach
$other_array = array('Jhon', 'Peter', 'Marie');
foreach ($other_array as $value => $index) {
    echo " $index - $value ";
}