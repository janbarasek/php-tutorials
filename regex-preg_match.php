<?php

require __DIR__ . '/vendor/autoload.php';

\Tracy\Debugger::enable();

$url = 'http://github.com/janbarasek/php-tutorials';

dump($url);

dump(preg_match('/(?<protocol>https?)\:?\/\/(?<domain>[^\/]+)\/?(?<uri>.+)/', $url, $urlParser));

dump($urlParser);

echo $urlParser['domain'];