<?php

$message = sprintf('Executing "%s" at %s', __FILE__, date('Y-m-d H:i:s'));
echo  purple($message) . PHP_EOL;

exit(rand(0,1)); // error or not

function purple($text) {
    return "\033[35m" . $text . "\033[0m";
}
