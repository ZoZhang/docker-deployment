FROM nginx:stable-alpine

MAINTAINER ZoZhang <zo.zhang@gmail.com>

# fix a problem, change application source from dl-cdn.alpinelinux.org to aliyun source.
#RUN sed -i 's/dl-cdn.alpinelinux.org/mirrors.aliyun.com/' /etc/apk/repositories

RUN apk update \
    && apk upgrade \
    && apk add --no-cache bash \
    && adduser -D -H -u 1000 -s /bin/bash www-data -G www-data \
    && rm -rf /etc/nginx/conf.d

CMD ["nginx"]

EXPOSE 80 443 3308