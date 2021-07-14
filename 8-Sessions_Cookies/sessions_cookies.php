<?php

// First we need start session
session_start();
$string_variable = "someValue";
$_SESSION['random_variable'] = $string_variable;
//to get value of session
$session_value = $_SESSION['random_variable'];
session_destroy();

//Cookies

//basic
setcookie("cookie_base", "value");
if (isset($_COOKIE['cookie_base'])) {
    echo $_COOKIE['cookie_base'];
}

//with expiration
setcookie("cookie_expire", "value_expirable", time() + (60 * 60 * 24 * 365));
if (isset($_COOKIE['cookie_expire'])) {
    echo $_COOKIE['cookie_expire'];
}
