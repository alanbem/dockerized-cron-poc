FROM alpine:3.3

RUN apk update && apk add --update python py-pip docker
RUN pip install --upgrade pip && pip install docker-compose

RUN rm -f /var/run/docker.sock
RUN rm -f /var/spool/cron/crontabs/root
RUN ln -sf /dev/stdout /var/log/cron.log

VOLUME /var/run/docker.sock
VOLUME /var/spool/cron/crontabs/root

ENTRYPOINT ["crond"]
CMD ["-l", "2", "-f", "-L", "/var/log/cron.log"]
