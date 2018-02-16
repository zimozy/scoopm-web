<?php
$search = array('/(?:(?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*+\/)|(?:(?<!\:|\\\|\'|\")\/\/.*))/', '/\n/', '/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s', '/<!--.*?-->/');

$replace = array(' ', ' ', '>', '<', '\\1', '');

header("Content-Type: text/css");
header("X-Content-Type-Options: nosniff");

echo preg_replace($search, $replace, file_get_contents('/var/www/public/css/' . $_GET['f'] . '.css'));