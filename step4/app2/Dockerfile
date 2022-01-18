FROM node:16.13
RUN apt-get update && apt-get install -y vim
COPY src /opt/app
CMD cd /opt/app && npm install && node index.js