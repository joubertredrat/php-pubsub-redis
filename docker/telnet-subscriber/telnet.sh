#!/usr/bin/expect

set timeout 5
spawn telnet redis-server 6379
sleep 1
send "subscribe pato\r"
interact
