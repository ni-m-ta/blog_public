<?php
$title = '【リモートデスクトップ】Mac上でWindowsのデスクトップをリモートで操作';
$description = 'エンジニアのNiTaです!今回はRDPについて解説していきます。Jan/2023';
include '../templates/head.php';
?>
<link rel="stylesheet" href="../css/it/rdp.css">
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
                  <a class="date">2022/4/19</a>
                  <h2 class="main-title">【リモートデスクトップ】Mac上でWindowsのデスクトップをリモートで操作</h2>
                  <div class="main-img"><img src="../img/main1.png"></div>
                  <div class="main-start-explanation">
                    <div class="face-icon">
                      <img src="../img/me2.PNG">
                    </div>
                    <div class="chat">Mac上でWindowsのデスクトップをリモートで操作するための方法を解説していきます!
                    </div>
                  </div>
                  <div class="achievements">
                    <div class="child-container">
                      <p class="achievements-title">この記事からわかること・できるようになること</p>
                      <ul>
                        <li>Ubuntu自体を立ち上げるGRUBについてわかる</li>
                        <li>Ubuntuアカウントのパスワードリセットの方法がわかる</li>
                      </ul> 
                    </div>
                  </div>
                  <div class="index">
                    <p class="index-title">目次</p>
                    <div class="index-container">
                      <ol>
                        <li class="index-subcontent">GRUBについて</li>
                        <li class="index-subcontent">Ubuntuのパスワードのリセット</li>
                        <li class="index-subcontent">まとめ</li>
                      </ol>
                    </div>
                  </div>
                  <div class="subcontents">
                    <section>
                        <h2 class="subcontents-title">GRUBについて</h2>
                        <p>UbuntuにはOSを立ち上げるためのソフトウェアが内蔵されています。
                            <br>そのようなプログラムをbootloaderと言い、Ubuntuに内蔵されているbootloaderをGRUBと呼びます。
                            <br>そのbootloaderによりカーネルを起動し、その他のオペレーティングシステムを起動します。
                        </p>
                        <p>パスワードのリセットにはGRUBがUbuntuを起動するタイミングが肝となります。</p>
                    </section>
                    <section>
                        <h2 class="subcontents-title">Ubuntuのパスワードのリセット</h2>  
                        <p>では早速写真を交えてUbuntuのパスワードのリセットについて解説していきます。</p>
                        <img src="img/it-blog-UbuntuPassword/password1.png">
                        <p>先ほどGRUBによるUbuntu起動のタイミングが重要であると言いましたが、このタイミングで「shift」キーを長押しします。
                            <br>タイミングがずれると失敗しますので何度か試してみてください。
                        </p>     
                        <img src="img/it-blog-UbuntuPassword/password2.png">
                        <p>成功すると上記のような画面になります。
                            <br>その後&uarr;または&darr;を使い、「Adovanced options for ubuntu」を選択し「Enter」キーを押します。
                        </p>
                        <img src="img/it-blog-UbuntuPassword/password3.png">
                        <p>先ほどと同じ要領で、適切なバージョンのLinuxでかつrecovery modeを選択します。</p>
                        <img src="img/it-blog-UbuntuPassword/password4.png">
                        <p>すると雰囲気が一変。上記のような画面となります。
                            <br>そこで&uarr;または&darr;を使い、「root ~~~」を選択します。
                        </p>
                        <img src="img/it-blog-UbuntuPassword/password5.png">
                        <p>するとコマンドラインが出現します。今回はアカウント名が「nita」という体で進めていきます。
                            <br>root@○○○-VirtualBox:~# の次の部分に「passwd △△△」を記入します。それぞれ○○○にはVirtualBoxの名前が、△△△には自分のアカウント名を入れます。
                            <br>次にNew password:とでるので、「×××」を記入します。×××には新しいパスワードを記入します。画面には表示されませんが、記入されているので注意。
                            <br>Retype new password:とでるので、「×××」を記入します。passwd: password updated successfully とでればOKです。
                        </p>
                        <img src="img/it-blog-UbuntuPassword/password6.png">
                        <p>再び「Enter」を押すと、上記の画面に戻ります。
                            <br>そして「resume ~~~」を選択します。
                        </p>
                        <img src="img/it-blog-UbuntuPassword/password7.png">
                        <p>するとこちらの画面が出現するので再び「Enter」を押します。その後再び起動しますのでしばらくお待ちください。これでパスワードのリセットは完了です!</p>
                    </section>
                    <section>
                      <h2 class="subcontents-title">まとめ</h2>
                      <p>いかがでしたでしょうか。パスワードを忘れて焦っていたのはいつのことでしょう。これでひとまず安心ですね
                        <br>今度こそインストール後の設定について詳しく解説していきます。（アップデートや、WiFiの使い方などなど必要なことが盛りだくさん）
                        <br>それではまたお会いしましょう!お疲れさまでした!
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