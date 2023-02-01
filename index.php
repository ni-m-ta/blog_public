<?php
$title = 'NiTa Blog';
$description = 'バックエンジニアのNiTaです!どうぞよろしくお願いします!';
include 'templates/head_root.php';
?>
   <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
  <?php include('templates/header_root.php');?>
    <div class="top-slides">
      <img class="slide" src="img/myBlog_top_programming1.jpg">
      <img class="slide" src="img/myBlog_top_programming2.jpg">
      <img class="slide" src="img/myBlog_top_programming3.jpg">
    </div>
    <main>
      <section>
        <div class="profile">
          <div class="container">
              <h2>Profile</h2>
              <div class="profile-parent">
                <div class="profile-photo">
                </div>
                <div class="profile-descripton">
                  <h3>About | NiTa</h3>
                  <p>2000年生まれ | 岩手県出身 | 国際教養大学所属</p>
                  <p>幼い頃からテニス一筋で生活。一時期はプロを目指したものの、高校三年生の時に結果を出せず断念。<br>
                      あらためて自分の生き方を見つめなおした結果、IT系の職につきたいと考えるように。<br>
                      先人の知恵に頼りつつ、新たな発想でこの社会を豊かにしていきたい。
                  </p>
                  <p>趣味は昼寝や美味しいものを食べること、また猫と戯れること</p>
                  <p>ポケモンはいちばんお気に入りのゲーム。好きなポケモンはジュペッタ</p>
                  <p>猫の名前はぶん</p>
                </div>
              </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <h2>Advertisements</h2>
          <p>ただいまWebサイト制作を受注いたしております!英語版のWebサイトも運営できます!
            <br>お気軽に御連絡ください!
          </p>
          <p>I want to create your websites! If you want a Japanese website, I will create the suitable one!
            <br>Free to ask me!
          </p>
        </div>
      </section>
      <section>
        <div class="recent-blogs">
          <div class="container">
            <h2>Recent Blogs</h2>
            <div class="recent-blog">
              <a href="it/rdp.php">【リモートデスクトップ】Mac上でWindowsのデスクトップをリモートで操作</a>
            </div>
            <div class="recent-blog">
              <a href="it/dockerDjangoMysql.php">【Ubuntu 22.04】How to write docker compose files to use Django & Mysql</a>
            </div>
            <div class="recent-blog">
              <a href="it/dockerGitLocalEnvironment.php">【Ubuntu 22.04】How to use Docker and Git to develop apps locally</a>
            </div>
            <div class="recent-blog">
              <a href="it/ubuntuBrightness-en.php">【Ubuntu-22.04】How to change brightness ~BrightnessController~</a>
            </div>
            <div class="recent-blog">
              <a href="it/ubuntuInstallandSetting.php">【Ubuntu22.04】備忘録、OS無しデスクトップ環境の構築!</a>
            </div>
            <div class="recent-blog">
              <a href="it/ubuntuScrollChrome.php">【Ubuntu20.04】Google Chrome スクロール遅い問題を解決!</a>
            </div>
            <div class="recent-blog">
              <a href="others-blog-visaApplication.php">【アメリカ留学】めんどくさいビザの申請やってみた</a>
            </div>
            <div class="recent-blog">
              <a href="css-blog-elementsPosition.php">【CCS】【初心者向け】左右中央寄せを完璧に!text-align:center;とmargin:auto;</a>  
            </div>
            <div class="recent-blog">
              <a href="html-blog-base.php">【HTML】【初心者向け】HTMLテンプレート公開&解説!</a>  
            </div>
            <div class="recent-blog">
              <a href="css-blog-elementsPosition.php">【CSS】【For Beginners】To center elements horizontary!~text-align:center; & margin:auto;~</a>  
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php include('templates/footer_root.php');?>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/slides.js"></script>
    <script src="js/script.js"></script>
  </body>
 </html>