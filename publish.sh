#!/bin/bash

message=$1

if [ -z "$message" ]
then
  echo "Dude"
  exit 0
fi

docker exec -it php-pubsub-redis_redis-server_1 redis-cli publish chat "$message"
echo "Published: $message"
