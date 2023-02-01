<?php
$title = '【Ubuntu 22.04】How to write docker compose files to use Django & Mysql';
$description = 'Today, I will introduce how to use Docker with Django and Mysql, this page will help you!';
include '../templates/head.php';
?>
   <link rel="stylesheet" href="../css/it/dockerDjangoMysql.css">
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
                  <a class="date">2022/7/14</a>
                  <h2 class="main-title">【Ubuntu 22.04】How to write docker compose files to use Django & Mysql</h2>
                  <div class="main-img"><img src="../img/main1.png"></div>
                  <div class="main-start-explanation">
                    <div class="face-icon">
                      <img src="..img/me2.PNG">
                    </div>
                    <div class="chat">Today's topic is docker with Django and Mysql.
                        <br>This article is based on <a href="https://docs.docker.com/samples/django/">docker.docs</a> & <a href="https://book-reviews.blog/build-django-mysql-environment-with-docker-compose/">Motoaki Shibagaki's site.</a>
                    </div>
                  </div>
                  <div class="index">
                    <p class="index-title">Index</p>
                    <div class="index-container">
                      <ol>
                        <li class="index-subcontent">Preparation by setting some files</li>
                        <li class="index-subcontent">Start a Django project</li>
                        <li class="index-subcontent">Connect the project to Database</li>
                        <li class="index-subcontent">Summary</li>
                      </ol>
                    </div>
                  </div>
                  <div class="subcontents">
                    <section>
                        <h2 class="subcontents-title">Preparation by setting some files</h2>
                        <p>Before preparing some files, let's check the organization for the folder.</p>
                        <div class="like-terminal">
                            <p class="like-terminalCommands">logform</p>
                            <p class="like-terminalCommands">|---docker-compose.yml</p>
                            <p class="like-terminalCommands">|---DockerFile</p>
                            <p class="like-terminalCommands">|---requirements.txt</p>
                            <p class="like-terminalCommands">|---manage.py</p>
                            <p class="like-terminalCommands">|---data</p>
                            <p class="like-terminalCommands">|---app</p>
                        </div>
                        <p>In this section, you will create Dockerfile, requirements.txt, and docker-compose.yml.</p>
                        <ol>
                            <li>Crate an empty folder</li>
                              <p>You can choose any name for the folder. In my case, the folder name is "logform".(I will create the webapp to discuss freely)</p>
                            <li>Create a new file in the folder (here logform). The name of the new file is "Dockerfile".</li>
                              <p>This Dockerfile defines an application's image. Once you build, you can run the image in a containter.</p>    
                            <li>Write down the following content to the Dockerfile.</li>
                              <div class="like-terminal">
                                <p class="like-terminalCommands">#syntax=docker/dockerfile:1
                                    <br>FROM python:3
                                    <br>ENV PYTHONDONTWRITEBYCODE=1
                                    <br>ENV PYTHONUNBUFFERED=1
                                    <br>WORKDIR /code
                                    <br>COPY requirements.txt /code/
                                    <br>RUN pip install -r requirements.txt
                                    <br>COPY . /code/
                                </p>
                              </div>
                              <p>This Dockerfile starts with a Python 3 parent image. The parent image can be modified by a new directory called "code" and installing the Python requirements defined in the requirements.txt file.</p>
                            <li>Save and close this Dokerfile.</li>
                            <li>Create a requirements.txt in your project directory. </li>
                              <p>To create the text file, you will input the following command in your terminal.</p>
                              <div class="like-terminal">
                                <p class="like-terminalCommands">
                                      Django>=3.0,&#60;4.0
                                  <br>psycopg2>=2.8
                                </p>
                              </div>
                              <p>This file will be runed by "RUN pip install -r requirements.txt" command in your Dockerfile</p>
                              <p>Save and close this requirements.txt.</p>
                            <li>Create a file called docker-compose.yml in your project directory. And Write down the following configuration in the docker-compose.yml.</li>
                              <div class="like-terminal">
                                <p class="like-terminalCommands">
                                      version: '3.9'
                                  <br>services:
                                  <br>  db:
                                  <br>    image: mysql:5.7
                                  <br>    environment:
                                  <br>      MYSQL_ROOT_PASSWORD: root
                                  <br>      MYXQL_USER: 'django'
                                  <br>      MYSQL_PASSWORD: 'django'
                                  <br>      MYSQL_DATABASE: 'django'
                                  <br>    ports:
                                  <br>      - 3306:3306
                                  <br>    volumes:
                                  <br>      - ./data/db:/var/lib/mysql/data
                                  <br>  web:
                                  <br>    build:
                                  <br>    command: python3 manage.py runserver 0.0.0.0:8000
                                  <br>    volumes:
                                  <br>      - .:/code
                                  <br>    links:
                                  <br>      - db
                                  <br>    depend_on:
                                  <br>      - db
                                </p>
                              </div>
                              <p>The file describes the foundamental information of your project.</p>
                            <li>Save and close the docker-compose.yml file.</li>
                        </ol>
                    </section>
                    <section>
                        <h2 class="subcontents-title">Start a Django project</h2> 
                        <p>In this section, you will start a Django project based on what you have created in the previous section.</p>
                        <ol>
                          <li>Go to the root of your project directory.</li>
                          <li>Create the Django project by running the following command. Before running the following command, you should check whether you have installed Django or not. If not, you have to install Django.</li>
                            <div class="like-terminal">
                              <p class="like-terminalCommands">$ sudo docker compose run web django-admin startproject composeexample</p>
                            </div>
                          <li>After the process of docker-compose done, you should check whether good or not.</li>
                            <div class="like-terminal">
                              <p class="like-terminalCommands">~/logform$ ls -l</p>
                            </div>
                            <p>If your commands are like the following img, you have successed starting your Django project.</p>
                            <img src="../img/it-blog-dockerDjangoMysql/1.png">
                        </ol>
                    </section>
                    <section>
                      <h2 class="subcontents-title">Connect the project to Database</h2>
                      <p>In this section, let's prepare teh database for Django.</p>
                      <ol>
                        <li>In your project directory, edit the composeexample/settings.py file in the following way.</li>
                          <div class="like-terminal">
                            <p class="like-terminalCommands">
                                  # settings.py
                              <br>import os
                              <br>[...]
                              <br>DATABASE = {
                              <br>    'default': {
                              <br>                  'ENGINE': 'django.db.backends.postgresql',
                              <br>                  'NAME': BASE_DIR / 'db.splite3',
                              <br>                  'USER': os.environ.get('MYSQL_USER'),
                              <br>                  'PASSWORD': os.environ.get('MYSQL_DATABASE'),
                              <br>                  'HOST': 'db',
                              <br>                  'PORT': 5432,
                              <br>              }
                              <br>         }
                            </p>
                          </div>
                        <li>Save and close the file.</li>
                        <li>Run the sudo docker compose up command in teh top level directory of your project.</li>
                        <li>To check whether it works well, you will input in your brousa "http://localhost:8000".</li>
                      </ol>
                    </section>
                    <section>
                      <h2 class="subcontents-title">Summary</h2>
                      <p>That's it! If you find any problems, you can feel free to email me!!!</p>
                    </section>
                    <div class="ad-space">
                      <a href="https://px.a8.net/svt/ejp?a8mat=3H9ZPO+64AFDM+50+2HH8I9" rel="nofollow">
                      <img border="0" width="728" height="90" alt="" src="https://www28.a8.net/svt/bgt?aid=210418188370&wid=002&eno=01&mid=s00000000018015029000&mc=1"></a>
                      <img border="0" width="1" height="1" src="https://www11.a8.net/0.gif?a8mat=3H9ZPO+64AFDM+50+2HH8I9" alt="">
                      <a href="https://px.a8.net/svt/ejp?a8mat=3N7ZF3+46MPLM+CO4+15TP8X" rel="nofollow">
                      <img border="0" width="728" height="90" alt="" src="https://www27.a8.net/svt/bgt?aid=220402191253&wid=002&eno=01&mid=s00000001642007025000&mc=1"></a>
                      <img border="0" width="1" height="1" src="https://www10.a8.net/0.gif?a8mat=3N7ZF3+46MPLM+CO4+15TP8X" alt="">
                    </div>
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