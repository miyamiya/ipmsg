<?php
spl_autoload_register(function($class) {
    include __DIR__ . '/IPMessenger/' . $class . '.php';
});

// options parser
$command = array_shift($argv);
$option  = array_shift($argv);
$value   = array_shift($argv);

try {
    $ipmsg = new IPMessenger($option, $value);
    $ipmsg->exec();
} catch (Exception $e) {
    echo $e->getMessage(). "\n";
}

