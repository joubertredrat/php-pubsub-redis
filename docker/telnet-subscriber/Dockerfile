FROM alpine:3.12.0

RUN apk --update add bash busybox-extras expect

ADD ./docker/telnet-subscriber/entrypoint.sh /home

ADD ./docker/telnet-subscriber/telnet.sh /home

ENTRYPOINT ["sh", "/home/entrypoint.sh"]
