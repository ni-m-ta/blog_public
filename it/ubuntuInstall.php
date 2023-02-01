<?php
$title = '【初心者向け】意外と簡単!LinuxのUbuntuインストール解説~仮想環境編~';
$description = 'ここでは初心者向けにUbuntuのインストール作業について解説を行います。仮想環境を用いたUbuntuのインストール手順を一つ一つ解説していますので簡単にインストールできます!';
include '../templates/head.php';
?>
   <link rel="stylesheet" href="../css/it/ubuntuInstall.css">
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
                  <a class="date">2022/4/5</a>
                  <h2 class="main-title">【初心者向け】意外と簡単!LinuxのUbuntuインストール解説~仮想環境編~</h2>
                  <div class="main-img"><img src="../img/main1.png"></div>
                  <div class="main-start-explanation">
                    <div class="face-icon">
                      <img src="../img/me2.PNG">
                    </div>
                    <div class="chat">今回はLinuxの一つであるUbuntuのインストール方法について解説していきます!
                        <br>できるだけ簡潔にわかりやすく解説していくので頑張っていきましょう!
                    </div>
                  </div>
                  <div class="achievements">
                    <div class="child-container">
                      <p class="achievements-title">この記事からわかること・できるようになること</p>
                      <ul>
                        <li>LinuxとUbuntuについてわかる</li>
                        <li>Virtual Boxを用いたUbuntuのインストールの方法がわかる</li>
                        <li>Ubuntuのインストール後の設定方法がわかる</li>
                      </ul> 
                    </div>
                  </div>
                  <div class="index">
                    <p class="index-title">目次</p>
                    <div class="index-container">
                      <ol>
                        <li class="index-subcontent">LinuxとUbuntuについて</li>
                        <li class="index-subcontent">Ubuntuの仮インストールの方法</li>
                        <ol>
                            <li>事前準備</li>
                            <li>VirtualBoxのインストール</li>
                            <li>Ubuntuの仮インストール</li>
                            <li>VirtualBoxの設定</li>
                        </ol>
                        <li class="index-subcontent">Ubuntuのインストールについて</li>
                        <li class="index-subcontent">まとめ</li>
                      </ol>
                    </div>
                  </div>
                  <div class="subcontents">
                    <section>
                        <h2 class="subcontents-title">LinuxとUbuntuについて</h2>
                        <p>LinuxとはWindowsやMacOSと同等のOS（オペレーティングシステム）のひとつです。
                            <br>Windowsなどの一般的なOSとは異なり、無償でかつ自由度の高い使用感をもたらしてくれます。またオープンソースであることからより多くの人がセキュリティチェックをすることができ、比較的安全に利用できるOSと言われています。
                        </p>
                        <p>一方Ubuntuとは、Linuxに属するOSの種類の一つです。資金力、人材力に富んだイギリスのカノニカル社が手がけた、使いやすく最新でかつ安定したOSとして設計されています。
                            <br>知名度が高く、簡潔で、サポートも手厚いため初心者にぴったりなLinuxのディストリビューションです。
                        </p>
                    </section>
                    <section>
                        <h2 class="subcontents-title">Ubuntuの仮インストールの方法</h2>
                        <h3 class="subcontents-subtitle">事前準備</h3>
                        <p>必要なものは以下の通りです。</p>
                        <ul>
                            <li>OS(Windowsなど)が入ったパソコン</li>
                            <li>大体25GB以上の空き容量</li>
                            <li>インターネット回線</li>
                        </ul>
                        <h3 class="subcontents-subtitle">VirtualBoxの準備</h3>
                        <p>オラクル社が提供しているVirtualBoxとは、現在使用しているパソコンに新たなOSをインストールし複数のOSを使用するための環境構築に必要なソフトです。
                            <br>たとえば現在MacOSを使用している場合、VirtualBoxを導入することでWindowsやLinuxなどの複数のOSを利用することができます。
                            <br>では早速、VirtualBoxのインストールをしましょう!
                        </p>
                        <p>まずはじめにVirtualBoxの<a href="https://www.oracle.com/jp/virtualization/technologies/vm/downloads/virtualbox-downloads.html">公式サイト</a>にアクセスします。
                            <br>次に、自分のOSに適したパッケージとページ下方の拡張パックをダウンロードします。（拡張パックには、VirtualBox内のOSにおいてUSBを利用可能にするための機能が含まれます）
                        </p>
                        <img class="it-blog-ubuntuInstall-screenshot" src="../img/it-blog-virtualboxAndUbuntu/it-blog-virtualbox1.png">
                        <img class="it-blog-ubuntuInstall-screenshot" src="../img/it-blog-virtualboxAndUbuntu/it-blog-virtualbox2.png">
                        <p>ひとまずVirtualBoxの準備は完了です。残りの設定はUbuntuのインストール後に行います。</p>
                        <h3 class="subcontents-subtitle">Ubuntuの仮インストール</h3>
                        <p>それではUbuntuのインストールをしていきましょう。
                          <br>まずはこちらの<a href="https://ubuntu.com/download/desktop">サイト</a> にアクセスします。
                          <br>その後、Ubuntu 20.&#12295;&#12295;.&#12295;&#12295; LTSをダウンロードします。
                          <br>LTSとはLong Term Supportを意味し、5年間の無償でセキュリティチェックとメンテナンスのためのアップデートを行えます。
                        </p>
                        <img class="it-blog-ubuntuInstall-screenshot" src="img/it-blog-virtualboxAndUbuntu/it-blog-ubuntuDounload.png">
                        <h3 class="subcontents-subtitle">VirtualBoxの設定</h3>
                        <p>再びVirtualBoxを立ち上げます。
                          <br>「新規」をクリック。
                        </p>
                        <img class="it-blog-ubuntuInstall-screenshot" src="../img/it-blog-virtualboxAndUbuntu/it-blog-virtualboxSetting1.png">
                        <p>すると仮想マシンの作成ウインドウがでてきます。
                          <br>名前はUbuntu&#12295;&#12295;&#12295;。&#12295;&#12295;&#12295;の部分は何か名称を入れても入れなくても大丈夫です。
                          <br>その他の部分は、名前を変えた時点で自動的に変更されるのでそのままで大丈夫です。
                        </p>
                        <img class="it-blog-ubuntuInstall-screenshot" src="../img/it-blog-virtualboxAndUbuntu/it-blog-virtualboxSetting2.png">
                        <p>メモリサイズは4GB以上にします。もし使用しているパソコンのメモリが4GB未満の場合はその他のUbuntuから派生したOSを使いましょう。</p>
                        <img class="it-blog-ubuntuInstall-screenshot" src="../img/it-blog-virtualboxAndUbuntu/it-blog-virtualboxSetting3.png">
                        <p>中段の仮想ハードディスクを作成するをチェック。</p>
                        <img class="it-blog-ubuntuInstall-screenshot" src="../img/it-blog-virtualboxAndUbuntu/it-blog-virtualboxSetting4.png">
                        <p>どのタイプでも問題はないようですが、説明書きの通りVDIを選択。</p>
                        <img class="it-blog-ubuntuInstall-screenshot" src="../img/it-blog-virtualboxAndUbuntu/it-blog-virtualboxSetting5.png">
                        <p>どのタイプでも問題ないですが、初心者向けには可変サイズで十分かと思います。</p>
                        <img class="it-blog-ubuntuInstall-screenshot" src="../img/it-blog-virtualboxAndUbuntu/it-blog-virtualboxSetting6.png">
                        <p>容量の目安は25GB程です。
                          <br>作成ボタンをクリックすると仮想環境の作成が完了します。
                        </p>
                    </section>
                    <section>
                      <h2 class="subcontents-title">Ubuntuのインストールについて</h2>
                      <p>再び仮想環境を立ち上げ、「起動」をクリック。</p>
                      <img class="it-blog-ubuntuInstall-screenshot" src="../img/it-blog-virtualboxAndUbuntu/it-blog-UbuntuInstallation1.png">
                      <p>すると仮想環境のウインドウに起動ハードディスクの選択画面が出現します。追加ボタンをクリックし、ファイル選択画面にて、先ほどダウンロードしたUbuntu.isoファイルを選択します（ダウンロードのディレクトリにあるはず）。その後起動。</p>
                      <img class="it-blog-ubuntuInstall-screenshot" src="../img/it-blog-virtualboxAndUbuntu/it-blog-UbuntuInstallation2.png">
                      <p>数分ほど待つと、上のような画面になります。
                        <br>デスクトップを日本語表示したい場合、左の言語一覧より日本語を選択します（画像は英語表示）。右側の「Install Ubuntu」をクリック。
                      </p>
                      <img class="it-blog-ubuntuInstall-screenshot" src="../img/it-blog-virtualboxAndUbuntu/it-blog-UbuntuInstallation3.png">
                      <p>キーボードのレイアウトは自身のパソコンのキーボードに合わせて選択します。したがってJapaneseを選択。</p>
                      <img class="it-blog-ubuntuInstall-screenshot" src="../img/it-blog-virtualboxAndUbuntu/it-blog-UbuntuInstallation4.png">
                      <p>上記のチェックをそのままに「Continue」をクリック。</p>
                      <img class="it-blog-ubuntuInstall-screenshot" src="../img/it-blog-virtualboxAndUbuntu/it-blog-UbuntuInstallation5.png">
                      <p>「Install Now」をクリック。</p>
                      <img class="it-blog-ubuntuInstall-screenshot" src="../img/it-blog-virtualboxAndUbuntu/it-blog-UbuntuInstallation6.png">
                      <p>再び「Continue」をクリック</p>
                      <img class="it-blog-ubuntuInstall-screenshot" src="../img/it-blog-virtualboxAndUbuntu/it-blog-UbuntuInstallation7.png">
                      <p>デフォルトのままTokyoを選択。</p>
                      <img class="it-blog-ubuntuInstall-screenshot" src="../img/it-blog-virtualboxAndUbuntu/it-blog-UbuntuInstallation8.png">
                      <p>ユーザー名とパスワードは任意のものを記入。今後も必要になるのでメモしてください。</p>
                      <img class="it-blog-ubuntuInstall-screenshot" src="../img/it-blog-virtualboxAndUbuntu/it-blog-UbuntuInstallation9.png">
                      <p>しばらく待つと上記の画面になり、再起動を求められます。指示に従い「Restart Now」をクリック。
                        <br>再起動後確認すると、やっとUbuntuを使えるようになります。
                      </p>
                    </section>
                    <section>
                      <h2 class="subcontents-title">まとめ</h2>
                      <p>いかがでしたでしょうか。なかなか面倒な道のりでしたが、なんとかたどり着けたでしょうか。
                        <br>次回はインストール後の設定について詳しく解説していきます。（アップデートや、WiFiの使い方などなど必要なことが盛りだくさん）
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
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/script.js"></script>
  </body>
 </html>