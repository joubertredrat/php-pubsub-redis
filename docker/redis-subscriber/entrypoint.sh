#!/bin/sh

redis-cli -h redis-server -p 6379 subscribe chat
