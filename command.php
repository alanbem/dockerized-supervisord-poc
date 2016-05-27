<?php

echo date('Y-m-d H:i:s') . ' - start' . PHP_EOL;

for ($i = 1; $i <= 10; $i++) {

    echo date('Y-m-d H:i:s') . ' - ' . $i . PHP_EOL;

    sleep(1);
}

echo date('Y-m-d H:i:s') . ' - exit' . PHP_EOL;

exit(rand(0,1)); // error or not
