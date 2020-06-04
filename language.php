<?php

if(isSet($_GET['lang']))
{
    $lang = $_GET['lang'];
    // register the session and set the cookie
    $_SESSION['lang'] = $lang;
    setcookie("lang", $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
    $lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
    $lang = $_COOKIE['lang'];
}
else
{
    $lang = 'de';
}
switch ($lang) {
    case 'de':
        //Deutsch
        $lang_file = 'de.php';
        break;
    case 'en':
        //English
        $lang_file = 'en.php';
        break;

    // Default Deutsch
    default:
        $lang_file = 'de.php';
}
include_once 'languages/'.$lang_file;
?>
