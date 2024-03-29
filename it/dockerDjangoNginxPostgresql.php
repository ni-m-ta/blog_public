<?php
$title = 'Docker、Django、Nginx、PostgreSQLを用いてWebサイト制作!';
$description = '学生エンジニアのnitaです!今回はDockerを用いてWebサイトを制作しましょう!';
include '../templates/head.php';
?>
   <link rel="stylesheet" href="../css/it/dockerDjangoNginxPostgresql.css">
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
                  <a class="date">2022/11/23</a>
                  <h2 class="main-title"></h2>
                  <div class="main-img"><img src="../img/main1.png">Docker、Django、Nginx、PostgreSQLを用いてWebサイト制作!</div>
                  <div class="main-start-explanation">
                    <div class="face-icon">
                      <img src="../img/me2.PNG">
                    </div>
                    <div class="chat">今回は<a href="https://testdriven.io/blog/dockerizing-django-with-postgres-gunicorn-and-nginx/#static-files">Michael Hermanさん</a>のアイデアを参考にします。
                    </div>
                  </div>
                  <div class="achievements">
                    <div class="child-container">
                      <p class="achievements-title">この記事からわかること・できるようになること</p>
                      <ul>
                        <li>docker compose の書き方がわかる</li>
                        <li>実際にWebサイトを制作できる</li>
                      </ul> 
                    </div>
                  </div>
                  <div class="index">
                    <p class="index-title">目次</p>
                    <div class="index-container">
                      <ol>
                        <li class="index-subcontent">Dockerの準備</li>
                        <li class="index-subcontent">PostgreSQLの準備</li>
                        <li class="index-subcontent">Nginxの準備</li>
                        <li class="index-subcontent">Static、Media filesの準備</li>
                        <li class="index-subcontent">デプロイの準備</li>
                      </ol>
                    </div>
                  </div>
                  <div class="subcontents">
                    <section>
                      <h2>Dockerの準備</h2>
                      <p>まず始めに今回の環境についてです。</p>
                      <ul>
                        <li>Docker 20.10.17 (Docker Desktop Ver.)</li>
                        <li>Django 3.2.6</li>
                        <li>Gunicorn 20.1.0</li>
                        <li>Ngins 1.21-alpine</li>
                        <li>PostgreSQL 13.0-alpine</li>
                      </ul>
                      <div class="like-terminal">
                        <p class="like-terminalCommands">
                          $ mkdir DirectoryName
                          <br>$ cd DirectoryName
                          <br>$ mkdir app
                          <br>$ python3.9 -m venv env
                          <br>$ source env/bin/activate
                          <br>(env)$ pip install django==3.2.6
                          <br>(env)$ django-admin.py startproject FunctionName
                          <br>(env)$ python manage.py migrate
                          <br>(env)$ python manage.py runserver
                        </p>
                      </div>
                      <p>その後<a href="http://localhost:8000/">http://localhost:8000/</a>に移動すると、Djangoのスクリーンを確認できます。そこで第一段階完了。</p>
                      <div class="like-terminal">
                        <p class="like-terminalCommands">
                          -- app
                          <br>    -- FunctionName
                          <br>        -- __init__.py
                          <br>        -- asgi.py
                          <br>        -- settings.py
                          <br>        -- urls.py
                          <br>        -- wsgi.py
                          <br>    -- manage.py
                          <br>    -- requirements.txt
                          <br>    -- db.sqlite3
                        </p>
                      </div>
                      <p>上記のようなフォルダ構成になっているはずです。requirements.txtがない場合は追加。またDockerがない場合はインストール(今回はDocker Desktop Ver.を使用)</p>
                      <p>appディレクトリに「Dockerfile」ファイルを追加。</p>
                      <div class="like-terminal">
                        <p class="like-terminalCommands">
                          FROM python:3.9.6-alpine
                          <br>WORKDIR /usr/src/app
                          <br>ENV PYTHONDONTWRITEBYTECODE 1
                          <br>ENV PYTHONUBUFFERED 1
                          <br>RUN pip install --upgrade pip
                          <br>COPY ./requirements.txt
                          <br>RUN pip install -r requirments.txt
                          <br>COPY . .
                        </p>
                      </div>
                      <p>その後ルートディレクトリに「docker-compose.yml」ファイルを追加</p>
                      <div class="like-terminal">
                        <p class="like-terminalCommands">
                          version '3.8'
                          <br>services:
                          <br>  web:
                          <br>    build: ./app
                          <br>    command: python manage.py runserver 0.0.0.0:8000
                          <br>    volumes:
                          <br>      -  ./app/:/usr/src/app/
                          <br>    ports:
                          <br>      -  8000:8000
                          <br>    env_file:
                          <br>      - ./.env.dev
                        </p>
                      </div>
                      <p>その後「settings.py」を以下のように編集</p>
                      <div class="like-terminal">
                        <p class="like-terminalCommands">
                          import os
                          <br>SECRET_KEY = os.environ.get("SECRET_KEY")
                          <br>DEBUG = int(os.environ.get("DEBUG", default=0))
                          <br>ALLOWED_HOSTS = os.environ.get("DJANGO_ALLOWED_HOSTS").split(" ")
                        </p>
                      </div>
                      <p>その後「env.dev」ファイルを追加。</p>
                      <div class="like-terminal">
                        <p class="like-terminalCommands">
                          DEBUG=1
                          <br>SECRET_KEY=foo
                          <br>DJANGO_ALLOWED_HOSTS=localhost 127.0.0.1 [::1]
                        </p>
                      </div>
                      <p>もう一度django スクリーンを表示できるか確認。</p>
                      <div class="like-terminal">
                        <p class="like-terminalCommands">
                          $ docker-compose build
                          <br>$ docker-compose up -d
                        </p>
                      </div>
                      <p>その後<a href="http://localhost:8000/">http://localhost:8000/</a>に移動すると、Djangoのスクリーンを確認で。そこで第二段階完了。</p>
                    </section>
                    <section>
                      <h2>PostgreSQLの準備</h2>
                      <p>ここでファイル構成を確認。</p>
                      <div class="like-terminal">
                        <p class="like-terminalCommands">
                          -- app
                          <br>    -- FunctionName
                          <br>        -- __init__.py
                          <br>        -- asgi.py
                          <br>        -- settings.py
                          <br>        -- urls.py
                          <br>        -- wsgi.py
                          <br>    -- manage.py
                          <br>    -- requirements.txt
                          <br>    -- db.sqlite3
                          <br>    -- env.dev
                          <br>    -- docker-compose.yml
                        </p>
                      </div>
                      <p>docker-compose.yml ファイルを編集。</p>
                      <div class="like-terminal">
                        <p class="like-terminalCommands">
                          version: '3.8'
                          <br>services:
                          <br>  web:
                          <br>    build: ./app
                          <br>    command: python manage.py runserver 0.0.0.0:8000
                          <br>    volumes:
                          <br>      - ./app/:/usr/src/app/
                          <br>    ports:
                          <br>      - 8000:8000
                          <br>     env_file:
                          <br>      - ./.env.dev
                          <br>      depend_on:
                          <br>        - db
                          <br>  db:
                          <br>    image:  postgres:13.0-alpine
                          <br>    volumes:
                          <br>      - postgres_data:/var/lib/postgresql/data
                          <br>    environment:
                          <br>      - POSTGRES_USER=root
                          <br>      - POSTGRES_PASSWORD=root
                          <br>      - POSTGRES_DB=root_dev
                          <br>
                          <br>   volumes:
                          <br>      postgres_data:
                        </p>
                      </div>
                      <p>volumesとはデータを永続化するための保管場所です。本来コンテナを削除した際データ諸々消えますが、それを防ぐための機能がボリュームです。</p>
                      <p>また.env.devファイルを編集。</p>
                      <div class="like-terminal">
                        <p class="like-terminalCommands">
                          DEBUG=1
                          <br>SECRET_KEY=foo
                          <br>DJANGO_ALLOWED_HOSTS=localhost 127.0.0.1 [::1]
                          <br>SQL_ENGINE=django.db.backends.postgresql
                          <br>SQL_DATABASE=db_dev
                          <br>SQL_USER=root
                          <br>SQL_PASSWORD=root
                          <br>SQL_HOST=db
                          <br>SQL_PORT=5432
                        </p>
                      </div>
                      <p>またsettings.pyのDATABASESを編集。</p>
                      <div class="like-terminal">
                        <p class="like-terminalCommands">
                          DATABASES = {
                          <br>    "default":  {
                          <br>        "ENGINE": os.environ.get("SQL_ENGINE", "django.db.backends.sqlite3"),
                          <br>        "NAME": os.environ.get("SQL_DATABASE", BASE_DIR / "db.sqlit3"),
                          <br>        "USER": os.environ.get("SQL_USER", "user"),
                          <br>        "PASSWORD": os.environ.get("SQL_PASSWORD", "password"),
                          <br>        "HOST": os.environ.get("SQL_HOST", "localhost"),
                          <br>        "PORT": os.environ.get("SQL_PORT", "5432"),
                          <br>    }
                          <br>}
                        </p>
                      </div>
                      <p>ここで、envの情報をもとに構築されるようになりました。</p>
                      <p>次にDockerファイルを編集</p>
                      <div class="like-terminal">
                        <p class="like-terminalCommands">
                          # pull official base image
                          <br>FROM python:3.9.6-alpine
                          <br>
                          <br># set work directory
                          <br>WORKDIR /usr/src/app
                          <br>
                          <br># set environment variables
                          <br>ENV PYTHONDONTWRITEBYTECODE 1
                          <br>ENV PYTHONUNBUFFERED 1
                          <br>
                          <br># install psycopg2 dependencies
                          <br>RUN apk update \ 
                          <br>    && apk add postgresql-dev gcc python3-dev musl-dev
                          <br>
                          <br># install dependencies
                          <br>RUN pip install --upgrade pip
                          <br>COPY ./requirements.txt .
                          <br>RUN pip install -r requirements.txt
                          <br>
                          <br># copy project
                          <br>COPY . .
                        </p>
                      </div>
                      <p>psycopg2とはPythonからPostgreSQLにアクセスするためのツールです。</p>
                      <p>requirements.txtに以下のコードを追加。</p>
                      <div class="like-terminal">
                        <p class="like-terminalCommands">
                          Django==3.2.6
                          <br>psycopg2-binary==2.9.1
                        </p>
                      </div>
                      <p>ここであらためてビルドしてみましょう。</p>
                      <div class="like-terminal">
                        <p>
                          $ docker-compose down -v(もし以前のものをビルドしたままであれば...)
                          <br>$ docker-compose up -d --build
                          <br>$ docker-compose exec web python manage.py migrate --noinput
                        </p>
                      </div>
                    </section>
                    <section>
                    </section>
                    <section>
                    </section>
                    <section>
                      <h2 class="subcontents-title">まとめ</h2>
                      <p>いかがでしたでしょうか。今後もUbuntuに関するtipsを紹介していくので是非ご覧ください!
                        <br>お疲れさまでした!
                      </p>
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