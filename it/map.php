<?php
$title = 'IT Blogs';
$description = 'バックエンドエンジニアのNiTaです!どうぞよろしくお願いいたします!';
include '../templates/head.php';
?>
   <link rel="stylesheet" href="../css/it/it.css">
  </head>
  <body>
  <?php include('../templates/header.php');?>
    <h1 class="title">IT Blogs</h1>
    <div class="container">
      <div class="contents">
        <main>
          <div class="main">
            <article>
              <div class="child-container">
                <div class="main-container">
                  <a class="blog ubuntuScrollChrome" href="it-blog-ubuntuScrollChrome.html">
                    <p class="blog-subtitle">【Ubuntu20.04】</p>
                    <p class="blog-title">Chromeのスクロールスピード<br>簡単に修正!</p>
                  </a>
                  <a class="blog ubuntuInstall" href="it-blog-ubuntuInstall.html">
                    <p class="blog-subtitle">【Ubuntu】</p>
                    <p class="blog-title">IT初心者がUbuntu<br>インストールしてみた</p>
                  </a>
                  <a class="blog ubuntuPassword" href="it-blog-UbuntuPassword.html">
                    <p class="blog-subtitle">【Ubuntu】</p>
                    <p class="blog-title">Ubuntuのパスワード<br>簡単にリセット!</p>
                  </a>  
                  <a class="blog ubuntuInstallandSetting" href="it-blog-ubuntuInstallandSetting.html">
                    <p class="blog-subtitle">【Ubuntu-22.04】</p>
                    <p class="blog-title">OS無しデスクトップ環境構築!</p>
                  </a>
                  <a class="blog ubuntuBrightness-en" href="it-blog-ubuntuBrightness-en.html">
                    <p class="blog-subtitle">【Ubuntu-22.04】</p>
                    <p class="blog-title">How to change brightness<br>~BrightnessController</p>
                  </a>
                  <a class="blog dockerGitLocalEn" href="it-blog-dockerGitLocalEnvironment.html">
                    <p class="blog-subtitle">【Ubuntu-22.04】</p>
                    <p class="blog-title">How to use Docker and Git<br>By using Docker Compose</p>
                  </a>
                  <a class="blog dockerDjangoMysql" href="it-blog-dockerDjangoMysql.html">
                    <p class="blog-subtitle">【Ubuntu-22.04】</p>
                    <p class="blog-title">How 2 create docker compose<br>to use Django & Mysql</p>
                  </a>
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