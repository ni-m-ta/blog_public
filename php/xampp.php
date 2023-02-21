<?php
$title = '【XAMPP】ローカル環境においてブラウザ上でPHPファイルを確認したい';
$description = 'エンジニアのNiTaです!今回はXAMPPについて解説していきます。Feb/2023';
include '../templates/head.php';
?>
<link rel="stylesheet" href="../css/php/xampp.css">
  </head>
  <body>
    <?php include('../templates/header.php');?>
    <h1 class="title">PHP Blog</h1>
    <div class="container">
      <div class="contents">
        <main>
          <div class="main">
            <article>
              <div class="child-container">
                  <a class="date">2023/2/6</a>
                  <h2 class="main-title">【XAMPP】ローカル環境においてブラウザ上でPHPファイルを確認したい</h2>
                  <div class="main-img"><img src="../img/main1.png"></div>
                  <div class="main-start-explanation">
                    <div class="face-icon">
                      <img src="../img/me2.PNG">
                    </div>
                    <div class="chat">今回はXAMPPを用いてローカル環境のブラウザ上でPHPファイルの挙動を確認する方法を記します。
                    </div>
                  </div>
                  <div class="achievements">
                    <div class="child-container">
                      <p class="achievements-title">この記事からわかること・できるようになること</p>
                      <ul>
                        <li>XAMPPとは何か</li>
                        <li>XAMPPの使い方</li>
                      </ul> 
                    </div>
                  </div>
                  <div class="index">
                    <p class="index-title">目次</p>
                    <div class="index-container">
                      <ol>
                        <li class="index-subcontent">XAMPPについて</li>
                        <li class="index-subcontent">XAMPPの使い方</li>
                        <li class="index-subcontent">まとめ</li>
                      </ol>
                    </div>
                  </div>
                  <div class="subcontents">
                    <section>
                        <h2 class="subcontents-title">XAMPPについて</h2>
                        <p>XAMPPについての解説は以下の2つの記事を参考にしました。
                            <br><a href="https://www.apachefriends.org/jp/index.html">Apache Friends</a>
                            <br><a href="https://e-words.jp/w/XAMPP.html">IT用語辞典</a>
                        </p>
                        <p>XAMPPとは完全無償、簡単にインストール可能なPHP開発環境に適したApacheのディストリビューションです。</p>
                        <p>XAMPPはApache、MariaDB、PHP、Perlを含むクロスプラットフォーム(LinuxやWindows、MacOSで使用可能)です</p>
                    </section>
                    <section>
                        <h2 class="subcontents-title">ローカル環境でのXAMPPの使い方</h2>  
                        <h3 class="subcontents-subtitle">XAMPPをダウンロード</h3>
                            <p>まず<a href="https://www.apachefriends.org/jp/download.html">こちら</a>から自分のPCのOSと入れたいバージョンに合うものをダウンロードします。
                        <h3 class="subcontents-subtitle">XAMPPをインストール</h3>
                            <p>ダウンロード後インストーラーが起動するので、特にこだわりが無い場合提示されたフォルダにXAMPPを入れます。
                        <h3 class="subcontents-subtitle">XAMPP内のフォルダにPHPファイルもしくは該当するフォルダを入れる</h3>
                            <p>XAMPPフォルダ内にあるhtdocsに確認したいファイルもしくはフォルダを入れます。<p>
                            <img class="img-size" src="../img/xampp/1.png">
                            <p>XAMPPフォルダ内</p>
                            <img class="img-size" src="../img/xampp/2.png">
                            <p>htdocsフォルダ内。ちなみに今回blog_publicは確認しようと思っているPHPファイルを含んだフォルダです。</p>
                        <h3 class="subcontents-subtitle">Apacheを起動</h3>
                            <p>XAMPPを開き、上部にあるManage Serverをクリック</p>
                            <img class="img-size" src="../img/xampp/3.png">
                            <p>Apache Serverを選択しStartをクリック
                            <img class="img-size" src="../img/xampp/4.png">
                        <h3 class="subcontents-subtitle">ブラウザ上で確認</h3>
                            <p>ブラウザのURL欄にhttps://localhost/ファイル名もしくはフォルダ名を入力します。自分の場合https://localhost/blog_publicです。</p>
                            <p>すると表示されるはずです。</p>
                    </section>
                    <section>
                      <h2 class="subcontents-title">まとめ</h2>
                      <p>いかがでしたでしょうか。もし修正点や疑問点があればご連絡ください!
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
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
  </body>
 </html>