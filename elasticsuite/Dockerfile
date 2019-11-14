
FROM docker.elastic.co/elasticsearch/elasticsearch:6.8.1

MAINTAINER ZHANG Zhao <zo.zhang@gmail.com>

ENV INSTALL_PATH /usr/share/elasticsearch/

RUN $INSTALL_PATH/bin/elasticsearch-plugin install analysis-icu

RUN $INSTALL_PATH/bin/elasticsearch-plugin install analysis-phonetic

EXPOSE 9200 9300