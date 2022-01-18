# Step 3: Reverse proxy with apache (static configuration)

- [Step 3: Reverse proxy with apache (static configuration)](#step-3-reverse-proxy-with-apache-static-configuration)
  - [How to use](#how-to-use)
  - [Configuration doc](#configuration-doc)
  - [Original instruction](#original-instruction)
    - [Webcasts](#webcasts)
    - [Acceptance criteria](#acceptance-criteria)

## How to use

In order to use this app you need to have docker running on your computer. No container must be running. Than you need to start the container from Step 1 and than the one from Step 2 without piping the ports:  
`docker run {--name [CONTAINER NAME]} -d [IMAGE NAME]`  
Than you need a terminal open with the this directory as the working directory. You will than run this command (The parts between \[square brackets\] are for you to fill in and the parts in {curly brackets} are optional) :  
`docker build -t [IMAGE NAME] .` **Be carful: the dot at the end is important**  
You than need to run this command :  
`docker run {--name [CONTAINER NAME]} -d -p [PORT]:80 [IMAGE NAME]`  
This runs the container is the background on the chosen port and eventually gives it a meaningful name if you chose to.

To be able to access the app you need to specify a host of `demo.api.ch` and you can this host to your computer in order to use the app in a browser. This is found in the `/etc/hosts` file (`C:\Windows\System32\drivers\etc\hosts` on Windows). You simply need to add, at the end of the file and using admin rights, this line:  
`[the ip to your Docker machine (it was 10.0.0.4  on my Windows machine)] demo.api.ch`

Once this is done you can access the apps with the URLs `http://demo.api.ch:8080` and `http://demo.api.ch:8080/api/step2/` for the first and second app respectively.

## Configuration doc

The Dockerfile simply makes sure that the proxys are at the right place and launched. What is important is the `001-reverse-proxy.conf` file which states the IPs of the other two containers (why we need the containers to be launched in that specific order). I made sure that the container from step 1 is on `172.17.0.2:80` and the one from step 2 on `http://172.17.0.3:3000`.

## Original instruction

### Webcasts

- [Labo HTTP (3a): reverse proxy apache httpd dans Docker](https://www.youtube.com/watch?v=WHFlWdcvZtk)
- [Labo HTTP (3b): reverse proxy apache httpd dans Docker](https://www.youtube.com/watch?v=fkPwHyQUiVs)
- [Labo HTTP (3c): reverse proxy apache httpd dans Docker](https://www.youtube.com/watch?v=UmiYS_ObJxY)

### Acceptance criteria

- You have a GitHub repo with everything needed to build the Docker image for the container.
- You can do a demo, where you start from an "empty" Docker environment (no container running) and where you start 3 containers: static server, dynamic server and reverse proxy; in the demo, you prove that the routing is done correctly by the reverse proxy.
- You can explain and prove that the static and dynamic servers cannot be reached directly (reverse proxy is a single entry point in the infra).
- You are able to explain why the static configuration is fragile and needs to be improved.
- You have **documented** your configuration in your report.
