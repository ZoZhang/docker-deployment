FROM redis:latest

MAINTAINER Macken <rystlee100@gmail.com>

COPY redis.conf /etc/redis.conf

VOLUME /data

EXPOSE 6379

CMD ["redis-server", "/etc/redis.conf"]
