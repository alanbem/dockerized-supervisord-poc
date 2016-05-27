FROM alpine:3.3

RUN apk update && apk add --update python py-pip docker
RUN pip install --upgrade pip && pip install docker-compose supervisor

VOLUME /var/run/docker.sock
VOLUME /etc/supervisord.conf

ENTRYPOINT ["supervisord"]
CMD ["--nodaemon", "--configuration", "/etc/supervisord.conf"]
