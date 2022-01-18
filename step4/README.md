# Step 4: AJAX requests with JQuery

## How to use

In order to use this app you need to have docker running on your computer. No container mus be running.  Than you need to start the container from Step 1 and than the one from Step 2 without piping the ports:  
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

- [Labo HTTP (4): AJAX avec JQuery](https://www.youtube.com/watch?v=fgpNEbgdm5k)

### Acceptance criteria

- You have a GitHub repo with everything needed to build the various images.
- You can do a complete, end-to-end demonstration: the web page is dynamically updated every few seconds (with the data coming from the dynamic backend).
- You are able to prove that AJAX requests are sent by the browser and you can show the content of th responses.
- You are able to explain why your demo would not work without a reverse proxy (because of a security restriction).
- You have **documented** your configuration in your report.