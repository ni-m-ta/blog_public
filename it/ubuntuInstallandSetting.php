<?php
$title = '【Ubuntu-22.04】OS無しデスクトップにUbuntu環境を構築';
$description = 'みなさんこんにちは、今回は備忘録を兼ねて新しく買ったデスクトップにUbuntuの環境を構築していきます。至らぬ点はございますがメール等でご指摘ください！';
$keywords = 'NiTa, nita, にさとたつや, Linux, Ubuntu, 環境構築';
include '../templates/head.php';
?>
   <link rel="stylesheet" href="../css/it/ubuntuInstallandSetting.css">

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
                  <a class="date">2022/6/9</a>
                  <h2 class="main-title">【Ubuntu-22.04】備忘録、OS無しデスクトップ環境の構築</h2>
                  <div class="main-img"><img src="../img/main1.png"></div>
                  <div class="main-start-explanation">
                    <div class="face-icon">
                      <img src="../img/me2.PNG">
                    </div>
                    <div class="chat">今回はOS無しデスクトップを買ったのでそちらの環境構築をしていきます!
                        <br>できるだけ簡潔にわかりやすく解説していくので頑張っていきましょう!
                    </div>
                  </div>
                  <div class="achievements">
                    <div class="child-container">
                      <p class="achievements-title">この記事からわかること・できるようになること</p>
                      <ul>
                        <li>OS無しデスクトップを買った経緯</li>
                        <li>環境構築の手順</li>
                      </ul> 
                    </div>
                  </div>
                  <div class="index">
                    <p class="index-title">目次</p>
                    <div class="index-container">
                      <ol>
                        <li class="index-subcontent">OS無しデスクトップを買った経緯</li>
                        <li class="index-subcontent">環境構築の手順</li>
                        <li class="index-subcontent">まとめ</li>
                      </ol>
                    </div>
                  </div>
                  <div class="subcontents">
                    <section>
                        <h2 class="subcontents-title">OS無しデスクトップを買った経緯</h2>
                        <p>今回このようなデスクトップを買ったわけですが、特に切羽詰まった理由があるわけではございません。
                            <br>それよりも①デスクトップ環境がとりあえずほしいという願望(クリスマスのときにプレゼントをもらうような感覚)②LinuxのCUI環境に慣れたいと思ったからです。
                            <br>色々探していたところ、ジャンクワールドでCPUがCorei5-5600?ぐらいのpassmark5000弱ほど、メモリ8GB、ストレージ1TBのPCが17,000円で売っていたので購入。
                            <br>いい買い物と信じて購入しました。
                        </p>
                    </section>
                    <section>
                        <h2 class="subcontents-title">環境構築の手順</h2>
                        <p>早速環境構築をしていきます。大体の手順はこちらの<a href="https://kb.seeck.jp/quick-index/write-image">サイト</a>を参考にしました(感謝)</p>
                        <p>まず手始めに別のパソコンでUbuntuのisoファイルをダウンロードしておきます。</p>
                        <p>その後USBにisoファイルを移し替えます。
                            <br>このとき、「Rufas」というソフトウェアをつかいました。直感的に操作できるので初心者でも大丈夫だと思います。
                        </p>
                        <p>一旦休憩します。</p>
                        <p>今からデスクトップPCなどなどの準備をしていきます。
                            <br>必要なものは、キーボード、モニター、LANケーブル(僕のパソコンは有線のみなのを失念)。
                            <br>こちらも直感的にコードをつないでおけばできちゃいました(一応調べながら進めましたが。)
                        </p>
                        <p>これからUbuntuのインストールをしていきます。</p>
                        <p>まずはじめにUSBを差し込み電源ON
                            <br>少し待つと見覚えのある画面に。
                            <br>言語を選択して、「Install Ubuntu」をクリック
                            <br>キーボードレイアウトを選択したのちはそのまま進めていきます。
                            <br>タイムゾーンとアカウントへ情報を入力したらインストール開始。
                            <br>少し待つと、完了画面に。
                            <br>いくつかでてくるポップアップを無視してはい完了です。
                        </p>
                        <p>基本的は作業はここで完了しますが、自分好みに環境を変えていきます。</p>
                        <p>まず「ctrl+alt+t」でターミナルを開いて、</p>
                        <div class="like-terminal">
                            <p class="like-terminalCommands">$ sudo apt update && apt upgrade</p>
                        </div>
                        <p>これで最新の状態に。</p>
                        <p>その後、不要なアプリを消していきます。今回は最初に「Thunder Bird」を消しました(gmailあるし...)</p>
                        <div class="like-terminal">
                            <p class="like-terminalCommands">$ sudo remove thunderbird</p>
                        </div>
                        <p>ついでに「FireFox」も消しました。こちらは特殊で、</p>
                        <div class="like-terminal">
                            <p class="like-terminalCommands">$ sudo snap remove -purge firefox</p>
                        </div>
                        <p>そしてchromeをいれます。</p>
                        <div class="like-terminal">
                            <p class="like-terminalCommands">$ wget https://dl.google.com/linux/direct/google-chrome-stable-current-amd64.deb</p>
                        </div>
                        <p>これでいけたはず。</p>
                        <p>あとは画面の明るさの調整とCapsLockと半角全角のいれかえをするのですが、詳しいことはまた今度(解決しきれていないから...)</p>
                    </section>
                    <section>
                      <h2 class="subcontents-title">まとめ</h2>
                      <p>こんな感じで初デスクトップ環境の構築をまとめてみました。読んでくれてありがとうございました!!!!!</p>
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