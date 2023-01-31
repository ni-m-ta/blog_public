<?php
$title = '【Ubuntu 20.04】Chromeのスクロール遅い問題を簡単に解決';
$description = 'バックエンジニアのNiTaです!今回はUbuntu上で使うChromeのスクロール遅い問題を解決しましょう!';
include '../templates/head.php';
?>
   <link rel="stylesheet" href="../css/it/ubuntuScrollChrome.css">

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
                  <a class="date">2022/5/9</a>
                  <h2 class="main-title">【Ubuntu 20.04】Chromeのスクロール遅い問題を簡単に解決</h2>
                  <div class="main-img"><img src="../img/main1.png"></div>
                  <div class="main-start-explanation">
                    <div class="face-icon">
                      <img src="../img/me2.PNG">
                    </div>
                    <div class="chat">今回はUbuntu上でChromeスクロール遅い問題。
                        <br>今回は<a href="https://github.com/ElectricRCAircraftGuy">Gabriel Staplesさん</a>のアイデアをお借りして設定をしていきます。
                        <br>実際の<a href="https://askubuntu.com/questions/254367/permanently-fix-chrome-scroll-speed">サイト</a>はこちらから
                    </div>
                  </div>
                  <div class="achievements">
                    <div class="child-container">
                      <p class="achievements-title">この記事からわかること・できるようになること</p>
                      <ul>
                        <li>コマンドをテキストの作成方法がわかる</li>
                        <li>Ubuntu立ち上げ時に起動してほしいプログラムの設定の仕方がわかる</li>
                        <li>Google Chrome のスクロールスピードを変えることができる</li>
                      </ul> 
                    </div>
                  </div>
                  <div class="index">
                    <p class="index-title">目次</p>
                    <div class="index-container">
                      <ol>
                        <li class="index-subcontent">テキスト作成</li>
                        <li class="index-subcontent">Ubuntu起動時のアプリケーション設定</li>
                        <li class="index-subcontent">まとめ</li>
                      </ol>
                    </div>
                  </div>
                  <div class="subcontents">
                    <section>
                        <h2 class="subcontents-title">テキスト作成</h2>
                        <p>ここの章のアイデアは全面的にStaplesさんからお借りしました。
                            <br>日本語でもこのアイデアを共有したいと連絡したら快くOKをもらえました!
                        </p>
                        <p>まずはターミナルを立ち上げます。(ショートカットキーはctrl+alt+t)
                            <br>その後以下のコマンドをターミナルに入力します。
                        </p>
                        <div class="like-terminal">
                          <p class="like-terminalCommands">sudo apt update
                              <br>sudo apt install imwheel
                              <br>gedit ~/.imwheelrc
                          </p>
                        </div>
                        <p>「sudo apt install imwheel」でスクロール量を変更するためのソフトウェアをインストールします。
                          <br>「gedit ~/.imwheelrc」でデフォルトのテキストエディタに.imwheelrcファイルを作成します。
                        </p>
                        <p>次に作成した.imwheelrcファイルに以下の記述を行います。</p>
                        <div class="like-terminal">
                          <p class="like-terminalCommands"><a class="color-red">".*-chrome*"</a>
                            <br>None,      Up,   Button4, <a class="color-red">5</a>
                            <br>None,      Down, Button5, <a class="color-red">5</a>
                            <br>Control_L, Up,   Control_L|Button4
                            <br>Control_L, Down, Control_L|Button5
                            <br>Shift_L,   Up,   Shift_L|Button4
                            <br>Shift_L,   Down, Shift_L|Button5
                          </p>
                        </div>
                        <p>「".*-chrome*"」はスクロールスピードの変更をchromeにのみ適用するということを指します。
                          <br>また赤字の「5」はスクロールスピードを指します。早めたければ大きい数字に、遅くしたいのであれば小さい数字に変更してください。
                        </p>
                        <img class="content-img" src="../img/ubuntuScrollChrome/ubuntuScrollChrome3.png">
                        <p>設定したスクロールスピードを確認するために再びターミナルに戻ります。以下の記述を行いスピードを確認してください。</p>
                        <div class="like-terminal">
                          <p class="like-terminalCommands">imwheel</p>
                        </div>
                        <p>設定したスピードを修正する際は、上記の数字を変えたのちに、以下の記述を行い設定したスピードを取り消してください。</p>
                        <div class="like-terminal">
                          <p class="like-terminalCommands">killall imwheel</p>
                        </div>
                        <p>再度テストする際は、ターミナルに「imwheel」を記入してください。</p>
                    </section>
                    <section>
                      <h2 class="subcontents-title">Ubuntu起動時のアプリケーション設定</h2>
                      <p>適切なスピードを設定できたのであれば、次の作業に移ります。
                        <br>今のままでは毎回ターミナルに「imwheel」を記述する必要があるので、Ubuntu起動時に自動的に動くように設定しましょう。
                      </p> 
                      <p>再びターミナルを開き、以下の記述を行い「startup application preferences」を開きます。</p>
                      <div class="like-terminal">
                        <p class="like-terminalCommands">gnome-session-properties</p>
                      </div>
                      <img class="content-img" src="../img/ubuntuScrollChrome/ubuntuScrollChrome1.png">
                      <p>そして項目を一つ追加し、「command」部分に「imwheel」を入力してください。
                        <br>そして保存を忘れずに。
                        <br>再起動してChromeを開いてみてください。サクサク加減に感動します。
                      </p>
                      <img class="content-img" src="../img/ubuntuScrollChrome/ubuntuScrollChrome2.png">
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