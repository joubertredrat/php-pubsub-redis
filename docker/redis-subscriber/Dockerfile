FROM alpine:3.12.0

RUN apk --update add redis

ADD ./docker/redis-subscriber/entrypoint.sh /home

ENTRYPOINT ["sh", "/home/entrypoint.sh"]
