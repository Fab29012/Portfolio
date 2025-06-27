<?php
session_start();

$lang = 'en'; // Default language

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
} elseif (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
}

$lang_file = "lang/$lang.php";

if (!file_exists($lang_file)) {
    die("Error: Language file '$lang_file' not found!"); // Debugging message
}

$translations = include $lang_file;
?>
