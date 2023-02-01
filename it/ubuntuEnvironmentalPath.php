<?php
$title = '【Ubuntu20.04】意外と簡単!環境変数パスを通して仮想環境を使いこなす。~Anaconda~';
$description = 'ここでは環境パスの通し方、もとい.bashrcと.bash_profile(.profile)について説明していきます。';
include '../templates/head.php';
?>
   <link rel="stylesheet" href="../css/it/ubuntuEnvironmentPath.css">
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
                  <a class="date">2022/5/19</a>
                  <h2 class="main-title">【Ubuntu20.04】意外と簡単!環境変数パスを通して仮想環境を使いこなす。~Anaconda~</h2>
                  <div class="main-img"><img src="../img/main1.png"></div>
                  <div class="main-start-explanation">
                    <div class="face-icon">
                      <img src="../img/me2.PNG">
                    </div>
                    <div class="chat">今回は一度は手こずるAnaconda上でのパスの通し方(環境変数の設定)について説明していきます!
                        <br>別の仮想環境でもAnacondaに内包されているプログラムを使えるようにしましょう!
                    </div>
                  </div>
                  <div class="achievements">
                    <div class="child-container">
                      <p class="achievements-title">この記事からわかること・できるようになること</p>
                      <ul>
                        <li>環境変数とパスについてわかる</li>
                        <li>.bashrcと.bash_prifle(.profile)についてわかる</li>
                        <li>Anacondaの仮想環境を使いこなせる</li>
                      </ul> 
                    </div>
                  </div>
                  <div class="index">
                    <p class="index-title">目次</p>
                    <div class="index-container">
                      <ol>
                        <li class="index-subcontent">自分が困った点</li>
                        <li class="index-subcontent">環境変数とパスについて</li>
                        <li class="index-subcontent">.bashrcと.bash_prifle(.profile)についてわかる</li>
                        <ol>
                            <li>起動時のファイルの読み取り順</li>
                            <li>記述方法</li>
                        </ol>
                        <li class="index-subcontent">環境変数を設定しAnaconda上で仮想環境にパスを通す</li>
                        <li class="index-subcontent">まとめ</li>
                      </ol>
                    </div>
                  </div>
                  <div class="subcontents">
                    <section>
                      <h2 class="subcontents-title">自分が困った点</h2>
                      <p>時はVirtualBoxに入れているUbuntu上でAnacondaを使っているときです。
                        <br>仮想環境(名はstatistics)をつくり、Anacondaにもとから入っているプログラム(numpyなどの統計解析に用いるソフトウェア)をstatistics上で使おうとしたときです。
                        <br>いくらimportしようとしてもnumpy達を使えない問題に直面。調べた結果どうやらOS(Ubuntu)の環境変数を設定する必要があるそうです。
                      </p>
                  </section>
                    <section>
                        <h2 class="subcontents-title">環境変数とパスについて</h2>
                        <p>自分の復習もかねて今回のキーワードである環境変数とパスについて解説します。</p>
                        <p>「環境変数」とはOSがもともと保存した設定であり、その設定を子プロセスが利用するための仕組み。
                          <br>要はOSの初期設定みたいなものでしょうか(もし表現が不正確であればご指摘ください)
                        </p>
                        <p>「パス」とは、実行したいプログラムの保管場所を指し示す道筋と言えると思います。
                          <br>よく耳にする「パスを通す」という言葉は、「パスを設定する」と言い換えられるでしょうか。
                        </p>
                        <p>今回目標とすることは、環境変数に自らパスを設定することで、プログラム名をコマンドに入力するだけでそのプログラムを利用できるようになることです。</p>
                    </section>
                    <section>
                        <h2 class="subcontents-title">.bashrcと.bash_prifle(.profile)についてわかる</h2>
                        <p></p>
                        <h3 class="subcontents-subtitle">起動時のファイルの読み取り順</h3>
                        <h3 class="subcontents-subtitle">記述方法</h3>
                    </section>
                    <section>
                      <h2 class="subcontents-title">環境変数を設定しAnaconda上で仮想環境にパスを通す</h2>
                    </section>
                    <section>
                      <h2 class="subcontents-title">まとめ</h2>
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