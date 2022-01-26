# Step 5: Dynamic reverse proxy configuration

- [Step 5: Dynamic reverse proxy configuration](#step-5-dynamic-reverse-proxy-configuration)
  - [How to use](#how-to-use)
  - [Configuration doc](#configuration-doc)
  - [Original instruction](#original-instruction)
    - [Webcasts](#webcasts)
    - [Acceptance criteria](#acceptance-criteria)

## How to use

In order to use this app you need to have docker running on your computer. Than you need to start the containers app1 and app2 from Step 4 (be sure they are built):  
`docker run --name [CONTAINER NAME] -d [IMAGE NAME]`  
You can do this any number of times just be sure to name the one you want to use.  
You now need to find the IP adresse of these containers using:  
`docker inspect [CONTAINER NAME] | grep -i ipaddr`  
make sure to write them down somewhere.

Than you need a terminal open with the this directory as the working directory. You will than run this command (The parts between \[square brackets\] are for you to fill in and the parts in {curly brackets} are optional) :  
`docker build -t [IMAGE NAME] .` **Be carful: the dot at the end is important**  
You than need to run this command :  
`docker run {--name [CONTAINER NAME]} -d -p [PORT]:80 -e STATIC_APP=[STEP 1 CONTAINER IP]:80 -e DYNAMIC_APP=[STEP 2 CONTAINER IP]:3000 [IMAGE NAME]`  
This runs the container is the background on the chosen port and eventually gives it a meaningful name if you chose to.

To be able to access the app you need to specify a host of `demo.api.ch` and you can this host to your computer in order to use the app in a browser. This is found in the `/etc/hosts` file (`C:\Windows\System32\drivers\etc\hosts` on Windows). You simply need to add, at the end of the file and using admin rights, this line:  
`[the ip to your Docker machine (it was localhost or 127.0.0.1 on my Windows machine)] demo.api.ch`

Once this is done you can access the apps with the URLs `http://demo.api.ch:[PORT]` and `http://demo.api.ch:[PORT]/api/step2/` for the first and second app respectively.

## Configuration doc

The Dockerfile simply makes sure that the proxys are at the right place and launched. It also makes sure that the `setup.sh` file is at a good place same fort our PHP config file (`config.template.php`). When you `docker run ...` (as seen above) the `setup.sh` file will be launched and run in order to run the `config.template.php` file and pipe it's output in the `001-reverse-proxy.conf` file effectively making sure that the proxy now directs to the IPs given.

## Original instruction

### Webcasts

- [Labo HTTP (5a): configuration dynamique du reverse proxy](https://www.youtube.com/watch?v=iGl3Y27AewU)
- [Labo HTTP (5b): configuration dynamique du reverse proxy](https://www.youtube.com/watch?v=lVWLdB3y-4I)
- [Labo HTTP (5c): configuration dynamique du reverse proxy](https://www.youtube.com/watch?v=MQj-FzD-0mE)
- [Labo HTTP (5d): configuration dynamique du reverse proxy](https://www.youtube.com/watch?v=B_JpYtxoO_E)
- [Labo HTTP (5e): configuration dynamique du reverse proxy](https://www.youtube.com/watch?v=dz6GLoGou9k)

### Acceptance criteria

- You have a GitHub repo with everything needed to build the various images.
- You have found a way to replace the static configuration of the reverse proxy (hard-coded IP adresses) with a dynamic configuration.
- You may use the approach presented in the webcast (environment variables and PHP script executed when the reverse proxy container is started), or you may use another approach. The requirement is that you should not have to rebuild the reverse proxy Docker image when the IP addresses of the servers change.
- You are able to do an end-to-end demo with a well-prepared scenario. Make sure that you can demonstrate that everything works fine when the IP addresses change!
- You are able to explain how you have implemented the solution and walk us through the configuration and the code.
- You have **documented** your configuration in your report.
