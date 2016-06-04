<?php

$message = sprintf('Executing "%s" at %s', __FILE__, date('Y-m-d H:i:s'));
echo  purple($message);

for ($i = 1; $i <= 10; $i++) {

    $message = sprintf('>>> %s', date('Y-m-d H:i:s'));
    echo  purple($message) . PHP_EOL;

    sleep(1);
}

exit(rand(0,1)); // error or not


function purple($text) {
    return "\033[35m" . $text . "\033[0m";
}
