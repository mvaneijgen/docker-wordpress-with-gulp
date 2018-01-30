FROM node:latest

RUN npm install -g gulp bower

RUN npm install gulp
RUN npm install bower

RUN npm install
