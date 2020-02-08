<?php

require_once __DIR__ . '/../vendor/autoload.php';

$hello = new Rivsen\Demo\Hello();
echo $hello->hello();

echo '<br /><a href="/phpinfo">/phpinfo</a>';