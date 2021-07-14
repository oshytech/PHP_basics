<!-- Commentary types -->

<!-- This comentary works out php tag, but this is shows on browser code -->

<?php
//This commentary works into php tag, and this don't show on browser but only
//works line by line

/*
    This commentary works on
    text blocks and is useful to add large text
*/
?>

<!-- Define and use Variables -->
<?php
//This don't show on browser, but we can print using echo
$my_first_variable = 'Hello World';
echo $my_first_variable;

//We can put into HTML code
echo '<H1>' . $my_first_variable . '</H1>';
?>
<!--Other method is -->
<h1>
    <?= $my_first_variable ?>
</h1>

<!--    Variable types
        PHP is a weak typing language, you can't need define type of variable when you declare it, You can use gettype
        to get the type of the variable
-->
<?php
// You can store integers 1/2/3/4 ....
$integer = 1;
echo gettype($integer) . ' - ';
echo $integer;
echo '<br>';

// You can store numbers with dot float or doubles 1.2 / 1.3 / 1.4
$float = 1.2;
echo gettype($float) . ' - ' ;
echo $float;
echo '<br>';

// You can store Text (String)
$string = 'abcdefg';
echo gettype($string) . ' - ';
echo $string;
echo '<br>';

// You can store booleans, this only accept true / false
$boolean = true;
echo gettype($boolean) . ' - ';
echo $boolean;
echo '<br>';
// Variables can have null value, this indicate that variable is not initialized yet
$unassigned = null;
/* if you try to print or get type of null variable, this return an error
    gettype($boolean);
    echo $boolean;
*/
?>



