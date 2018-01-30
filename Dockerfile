FROM node:latest

RUN npm install -g gulp bower

WORKDIR /alloy-sage

RUN npm install --allow-root
RUN bower install --allow-root

RUN gulp
RUN gulp watch
