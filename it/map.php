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
                <div class="recent-blogs">
                  <div class="recent-blog">
                  <a class="blog" href="howToUseGit.php">【Git Cheatsheet】業務で活躍Gitコマンド集</a>
                  </div>
                  <div class="recent-blog">
                  <a class="blog" href="dockerDjangoMysql.php">【Ubuntu-22.04】How to create docker compose to use Django & Mysql</a>
                  </div>
                  <div class="recent-blog">
                  <a class="blog" href="dockerGitLocalEnvironment.php">【Ubuntu-22.04】How to use Docker and Git by using Docker Compose</a>
                  </div>
                  <div class="recent-blog">
                  <a class="blog" href="ubuntuBrightness-en.php">【Ubuntu-22.04】How to change brightness ~BrightnessController~</a>
                  </div>
                  <div class="recent-blog">
                  <a class="blog" href="ubuntuInstallandSetting.php">【Ubuntu-22.04】OS無しデスクトップ環境構築!</a>
                  </div>
                  <div class="recent-blog">
                  <a class="blog" href="ubuntuPassword.php">【Ubuntu】Ubuntuのパスワード簡単にリセット!</a>
                  </div>
                  <div class="recent-blog">
                  <a class="blog" href="ubuntuInstall.php">【Ubuntu】IT初心者がUbuntuインストールしてみた</a>
                  </div>
                  <div class="recent-blog">
                  <a class="blog" href="ubuntuScrollChrome.php">【Ubuntu20.04】Chromeのスクロールスピード簡単に修正!</a>
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