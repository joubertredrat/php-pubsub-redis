<?php

require_once "vendor/autoload.php";

$redisConfig = [
    'host' => 'redis-server',
    'port' => '6379',
    'read_write_timeout' => 0,
];

$redisClient = new Predis\Client($redisConfig);

$loop = $redisClient->pubSubLoop();
$loop->subscribe('chat');

foreach ($loop as $message) {
    switch($message->kind) {
        case 'subscribe':
            echo \sprintf("Subscribed to channel: %s", $message->channel);
            echo PHP_EOL;
            break;
        case 'message':
            echo \sprintf("[%s] message received: %s", $message->channel, $message->payload);
            echo PHP_EOL;
            break;
    }
}
