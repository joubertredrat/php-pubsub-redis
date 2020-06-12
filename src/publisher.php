<?php

require_once "vendor/autoload.php";

function getMeowFact(): string {
    $data = (array) \json_decode(\file_get_contents('https://meowfacts.herokuapp.com/'), true);
    return $data['data'][0];
}

$redisConfig = [
    'host' => 'redis-server',
    'port' => '6379',
    'read_write_timeout' => 0,
];

$redisClient = new Predis\Client($redisConfig);

while (true) {
    $meowfact = getMeowFact();

    $redisClient->publish('chat', $meowfact);
    echo \sprintf("[chat] message published: %s", $meowfact);
    echo PHP_EOL;

    sleep(mt_rand(3, 6));
}
