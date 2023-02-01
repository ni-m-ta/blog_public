<?php
$title = '【Ubuntu 22.04】How to use Docker and Git to develop apps locally';
$description = 'Today, I will introduce how to use Docker and Git to develop apps locally, this page will be help you!';
include '../templates/head.php';
?>
<link rel="stylesheet" href="../css/it/dockerGitLocalEnvironment.css">
  </head>
  <body>
  <?php include('../templates/header.php');?>
    <h1 class="title">IT Blog</h1>
    <div class="container">
      <div class="contents">
        <main>
          <div class="main">
            <article>
              <div class="child-container">
                  <a class="date">2022/6/16</a>
                  <h2 class="main-title">【Ubuntu 22.04】How to use Docker and Git to develop apps locally</h2>
                  <div class="main-img"><img src="../img/main1.png"></div>
                  <div class="main-start-explanation">
                    <div class="face-icon">
                      <img src="../img/me2.PNG">
                    </div>
                    <div class="chat">Today, I will introduce how to use Docker and Git to develop apps locally.
                    </div>
                  </div>
                  <div class="index">
                    <p class="index-title">Index</p>
                    <div class="index-container">
                      <ol>
                        <li class="index-subcontent">What is Docker</li>
                        <li class="index-subcontent">Steps to run a test container</li>
                            <ol>
                                <li>Check local environment</li>
                                <li>Install Docker and Docker Compose</li>
                                <li>How to organize the contents</li>
                                <li>To run a test container</li>
                            </ol>
                        <li class="index-subcontent">Tips</li>
                        <li class="index-subcontent">Summary</li>
                      </ol>
                    </div>
                  </div>
                  <div class="subcontents">
                    <section>
                        <h2 class="subcontents-title">What is Docker</h2>
                        <p>Docker is a tool to provide environments where places which store programs can be separated from host OS.
                          <br>By doing this, it is possible to develop programs without messy for your local environment, and allow your programs to work well on other OS.
                        </p>
                    </section>
                    <section>
                        <h2 class="subcontents-title">Steps to run a test container</h2> 
                        <p>I will introduce how to set up environments to develope programs locally.
                          <br>Today, I will intstall Docker Engine for Linux. 
                          <br>When I installed Docker and other programs, I refer to <a href="https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-20-04-ja">Community</a> & <a href="https://blackbird-blog.com/docker-on-ubuntu">ばったんの技術ブログ</a>                     
                        </p>
                        <h2 class="subcontents-subtitle">Check local environment</h2>
                        <p>This is my local environment.</p>
                        <img src="../img/it-blog-dockerGitLocalEnvironment/img1.png">
                        <img src="../img/it-blog-dockerGitLocalEnvironment/img2.png">
                        <p>I assume that you have installed Git.</p>
                        <h2 class="subcontents-subtitle">Install Docker and Docker Compose</h2>
                        <p>First, write the following commands in your command line to update existing packages</p>
                        <div class="like-terminal">
                          <p class="like-terminalCommands">$ sudo apt update</p>
                        </div>
                        <p>To install programs through http, you will install following programs.</p>
                        <div class="like-terminal">
                          <p class="like-terminalCommands">$ sudo apt install apt-transport-https ca-certificates curl software-properties-common</p>
                        </div>
                        <p>To add GPG key in your system</p>
                        <div class="like-terminal">
                          <p class="like-terminalCommands">$ curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -</p>
                        </div>
                        <p>To add Docker repository to apt source</p>
                        <div class="like-terminal">
                          <p class="like-terminalCommands">$ sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu focal stable"</p>
                        </div>
                        <p> To update, </p>
                        <div class="like-terminal">
                          <p class="like-terminalCommands">$ sudo apt update</p>
                        </div>
                        <p>From now on, you will install Docker.
                          <br>But in my case, I cannot success in the following process. So, I will introduce the basic process and my way.
                        </p>
                        <p>Here is the basic process</p>
                        <div class="like-terminal">
                          <p class="like-terminalCommands">$ sudo apt install docker-ce</p>
                        </div>
                        <p>To check whether it is going well</p>
                        <div class="like-terminal">
                          <p class="like-terminalCommands">$ sudo systemctl status docker</p>
                        </div>
                        <p>If it goes well,</p>
                        <img src="../img/it-blog-dockerGitLocalEnvironment/img4.png">
                        <p>However, in my case...</p>
                        <img src="../img/it-blog-dockerGitLocalEnvironment/img3.png">
                        <p>According to the error message, docker-ce has something wrong.
                          <br>So before reinstall docker-ce, you will disconnect the network. The following idea comes from <a href="https://forums.docker.com/t/subprocess-installed-post-installation-script-returned-error-exit-status-1/37444/3">the site.</a>
                        </p>
                        <div class="like-terminal">
                          <p class="like-terminalCommands">$ sudo systemctl restart systemd-networkd,service
                            <br>$ sudo apt remove docker-ce
                            <br>$ sudo apt install docker-ce
                            <br>$ sudo systemctl status docker.service
                          </p>
                        </div>
                        <p>After the above commands, my terminal was like this.</p>
                        <img src="../img/it-blog-dockerGitLocalEnvironment/img4.png">
                        <p>Next, you will install Docker Compose.
                          <br>The prugin is so useful because the plugin can allow the user to organize & manage several containers by writing one ymal file.
                        </p>
                        <p>Before installing, you will check whether you have already installed or not.
                          <br>If you use an old docker, may be you have the old version of Docker Compose (Compose V1).
                        </p>
                        <div class="like-terminal">
                          <p class="like-terminalCommands">$ sudo docker compose --version</p>
                        </div>
                        <p>If not, you will install in the following way. When you will install Docker Compose in the second line, you should check the version of Docker Compose (here, v2.6.0). </p>
                        <div class="like-terminal">
                          <p class="like-terminalCommands">$ mkdir /usr/local/lib/docker/cli-plugins
                            <br>$ curl -SL https://github.com/docker/compose/releases/download/v2.6.0/docker-compose-linux-x86_64 -o /usr/local/lib/docker/cli-plugins/docker-compose
                            <br>$ chmod +x /usr/local/lib/docker/cli-plugins/docker-compose
                            <br>$ docker compose version
                          </p>                          
                        </div>
                        <p>When you can see the following output, you have done the all setting.</p>
                        <div class="like-terminal">
                          <p class="like-termimalCommands">Docker Compose version v2.6.0</p>
                        </div>
                        <h2 class="subcontents-subtitle">How to organize the contents</h2> 
                        <p>From now on, we will write codes on yml file and test files (.html and .css).
                          <br>My codes is available on <a href="https://github.com/ni-m-ta/compose-test">the page of my GitHub</a>. So, check the these codes.
                          <br>When writing my codes, I refer to <a href="https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-compose-on-ubuntu-22-04">the site.</a>
                        </p>
                        <h2 class="subcontents-subtitle">To run a test container</h2> 
                        <p>To run your containers, you will put the following command</p>
                        <div class="like-terminal">
                          <p class="like-terminalCommands">$ cd ~/FOLDERNAME
                          <br>$ sudo docker compose up -d
                        </div>
                        <p>The output will be...</p>
                        <div class="like-terminal">
                          <p class="like-terminalCommands">     Name     Command     State    Ports
                            <br>------------------------------------------------
                          </p>
                        </div>
                        <p>In your brouser, by inputting "localhost:8000", you can see the web page.</p>
                        <p>If you start or stop running, you can input the commands</p>
                        <div class="like-terminal">
                          <p class="like-terminalCommands">$ sudo docker compose start
                          <br>$ sudo docker compose stop
                        </div>
                    </section>
                    <section>
                      <h2 class="subcontents-title">Tips</h2>
                      <ul>
                        <li>When writing yml files, you have to indent two spaces.</li>
                        <li>There are different version for Docker Compose like V1 and V2.</li>
                        <li>There are several types for Docker. For linux users, Docker Engin. For Windows and macOS, Docker Desktop.</li>
                        <li>WIthout dockerhub, you can enjoy the benefits of Docker if you develop your programms by yourself.</li>
                      </ul>
                    </section>
                    <section>
                      <h2 class="subcontents-title">Summary</h2>
                      <p>Done!!! If you have a comment or question, feel free to send my e-mail!!!</p>
                    </section>
                  </div>
              </div>
          </article>
          </div>
        </main>
        <?php include('../templates/profile.php');?>
      </div>
    </div>
    <?php include('../templates/footer.php');?>
    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/script.js"></script>
  </body>
 </html>