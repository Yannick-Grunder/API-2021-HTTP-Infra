# Step 2: Dynamic HTTP server with express.js

## Table of contents

- [Step 2: Dynamic HTTP server with express.js](#step-2-dynamic-http-server-with-expressjs)
  - [Table of contents](#table-of-contents)
  - [How to use](#how-to-use)
  - [Original instruction](#original-instruction)
    - [Webcasts](#webcasts)
    - [Acceptance criteria](#acceptance-criteria)

## How to use



In order to use this app you need to have docker running on your computer. Than you need a terminal open with the this directory as the working directory. You will than run this command (The parts between \[square brackets\] are for you to fill in and the parts in {curly brackets} are optional) :  
`docker build -t [IMAGE NAME] .`  
You than need to run this command :  
`docker run {--name [CONTAINER NAME]} -d -p [PORT]:3000 [IMAGE NAME]`  
This runs the container is the background on the chose port and eventually gives it a meaningful name if you chose to. Now you only need to connect to `localhost:[PORT]` and you will be connected to your dynamic HTTP server

## Original instruction

### Webcasts

- [Labo HTTP (2a): Application node "dockerisée"](https://www.youtube.com/watch?v=fSIrZ0Mmpis)
- [Labo HTTP (2b): Application express "dockerisée"](https://www.youtube.com/watch?v=o4qHbf_vMu0)

### Acceptance criteria

- You have a GitHub repo with everything needed to build the Docker image.
- You can do a demo, where you build the image, run a container and access content from a browser.
- You generate dynamic, random content and return a JSON payload to the client.
- You cannot return the same content as the webcast (you cannot return a list of people).
- You don't have to use express.js; if you want, you can use another JavaScript web framework or event another language.
- You have **documented** your configuration in your report.
