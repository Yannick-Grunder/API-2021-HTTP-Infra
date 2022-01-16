# Step 1: Static HTTP server with apache httpd

## Table of contents

- [Step 1: Static HTTP server with apache httpd](#step-1-static-http-server-with-apache-httpd)
  - [Table of contents](#table-of-contents)
  - [How to use](#how-to-use)
  - [Configuration doc](#configuration-doc)
  - [Original instruction](#original-instruction)
    - [Webcasts](#webcasts)
    - [Acceptance criteria](#acceptance-criteria)

## How to use

In order to use this app you need to have docker running on your computer. Than you need a terminal open with the this directory as the working directory. You will than run this command (The parts between \[square brackets\] are for you to fill in and the parts in {curly brackets} are optional) :  
`docker build -t [IMAGE NAME] .`  
You than need to run this command :  
`docker run {--name [CONTAINER NAME]} -d -p [PORT]:80 [IMAGE NAME]`  
This runs the container is the background on the chosen port and eventually gives it a meaningful name if you chose to. Now you only need to connect to `localhost:[PORT]` and you will be connected to your static HTTP server

## Configuration doc

We have a content file which is just a static example internet page found for free on the internet. The Dockerfile simply copies the content file at the right place of an Apache app in order to access it.

## Original instruction

### Webcasts

- [Labo HTTP (1): Serveur apache httpd "dockerisé" servant du contenu statique](https://www.youtube.com/watch?v=XFO4OmcfI3U)

### Acceptance criteria

- You have a GitHub repo with everything needed to build the Docker image.
- You can do a demo, where you build the image, run a container and access content from a browser.
- You have used a nice looking web template, different from the one shown in the webcast.
- You are able to explain what you do in the Dockerfile.
- You are able to show where the apache config files are located (in a running container).
- You have **documented** your configuration in your report.
