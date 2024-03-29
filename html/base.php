<?php
$title = '【初心者向け】コピペOK!HTMLテンプレート公開・解説';
$description = '今回は初心者向けにHTMLのテンプレートを公開&解説をいたします。Progateなどのプログラミング講座を終えたばかりの方で、これから自分の力でサイトを完成させようと奮闘する方必見です。';
include '../templates/head.php';
?>
   <link rel="stylesheet" href="../css/html/base.css">
  </head>
  <body>
  <?php include('../templates/header.php');?>
    <h1 class="title">HTML Blog</h1>
    <div class="container">
      <div class="contents">
        <main>
          <div class="main">
            <article>
              <div class="child-container">
                  <p class="date">2022/3/31</p>
                  <h2 class="main-title">【初心者向け】コピペOK!HTMLひな形公開・解説</h2>
                  <div class="main-img"><img src="../img/myBlog_html_base.jpg"></div>
                  <div class="main-start-explanation">
                    <div class="face-icon">
                      <img src="../img/me2.PNG">
                    </div>
                    <div class="chat">新規ページの作成は最初からつくるよりもひな形を用意したほうが絶対楽！
                                      <br>そこで今回はHTMLのひな型を用意しました!
                    </div>
                  </div>
                  <div class="achievements">
                    <div class="child-container">
                      <p class="achievements-title">この記事からわかること・できるようになること</p>
                      <ul>
                        <li>HTMLの書き出し方がわかる</li>
                        <li>HTMLの構成がわかる</li>
                        <li>よく使うCSSやJavaScriptの読み込み方がわかる</li>
                        <li>無駄な時間を節約できる</li>
                      </ul> 
                    </div>
                  </div>
                  <div class="index">
                    <p class="index-title">目次</p>
                    <div class="index-container">
                      <ol>
                        <li class="index-subcontent">HTMLひな形見本</li>
                        <li class="index-subcontent">各タグ解説</li>
                          <ul>
                            <li>始めの2行について</li>
                            <li>&lt;head&gt;について</li>
                            <li>&lt;body&gt;について</li>
                            <li>&lt;main&gt;について</li>
                          </ul>
                          <li class="index-subcontent">まとめ</li>
                      </ol>
                    </div>
                  </div>
                  <div class="subcontents">
                    <section>
                      <h2 class="subcontents-title">HTMLひな形見本</h2>
                      <p>では早速、HTMLのひな形を公開いたします。
                        <br>後ほど解説いたしますので、軽く目を通しておきましょう。
                      </p>
                      <p>コードの中に度々日本語の部分がありますが、その部分はプログラマーのあなたが自身のサイト情報に合わせて書く部分です。
                        <br>反対にアルファベットで記載されている部分はコピペ可の部分です。
                      </p>
                      <p class="codepen" data-height="300" data-default-tab="html" data-slug-hash="YzYQGRQ" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/YzYQGRQ">
                        Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                        on <a href="https://codepen.io">CodePen</a>.</span>
                      </p>
                    </section>
                    <section>
                      <h2 class="subcontents-title">HTMLひな形解説</h2>
                      <p>上記のコードについて一行ずつ解説していきます。</p>
                      <h3 class="subcontents-subtitle">始めの2行について</h3>
                      <p class="codepen" data-height="130" data-default-tab="html" data-slug-hash="YzYxPGw" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/YzYxPGw">
                        Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                        on <a href="https://codepen.io">CodePen</a>.</span>
                      </p>
                      <p>&lt;!DOCTYPE&gt;タグとは、ブラウザに対して当ファイルはどの言語で書かれているか伝達する役割を果たします。</p>
                      <p class="codepen" data-height="130" data-default-tab="html" data-slug-hash="OJzjPWm" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/OJzjPWm">
                        Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                        on <a href="https://codepen.io">CodePen</a>.</span>
                      </p>
                      <p>htmlタグとは、HTMLの記述の始めと終わりを決めるためのタグです。</p>
                      <h3 class="subcontents-subtitle">&lt;head&gt;内について</h3>
                      <p class="codepen" data-height="130" data-default-tab="html" data-slug-hash="KKZvwvB" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/KKZvwvB">
                        Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                        on <a href="https://codepen.io">CodePen</a>.</span>
                      </p>
                      <p>headタグとは、当ファイルに関する様々な情報を記入するためのタグです。
                        <br>多くの場合ブラウザに表示されないような情報、例えばサイト名やキャプションを記載します。
                      </p>
                      <p class="codepen" data-height="130" data-default-tab="html" data-slug-hash="jOYLPvO" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/jOYLPvO">
                        Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                        on <a href="https://codepen.io">CodePen</a>.</span>
                      </p>
                      <p>metaタグとは、サイトに関する情報を記載する箇所です。
                        <br>ここでは「文字コード」の種類（例:UTF-8, Shift_JISなど）を指定しています。基本的にはUTF-8が推奨されているので、上記のコードで問題ありません。
                      </p>
                      <p class="codepen" data-height="130" data-default-tab="html" data-slug-hash="NWXvGvN" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/NWXvGvN">
                        Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                        on <a href="https://codepen.io">CodePen</a>.</span>
                      </p>
                      <p>titleタグとは、検索結果に表示されるサイト名及びタブ上に記載されるタイトルを指定するときに使います。
                        <br>またtitleタグはSEO対策において非常に重要なポイントとなります。適切なタイトルをつけることで、ユーザーを惹きつけるとともにGoogleにも愛されるようになりましょう。
                      </p>
                      <img class="metaTag-description-img" src="img/title タグ解説_screenshot.png">
                      <p class="codepen" data-height="130" data-default-tab="html" data-slug-hash="PoEKjPv" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/PoEKjPv">
                        Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                        on <a href="https://codepen.io">CodePen</a>.</span>
                      </p>
                      <p>metaタグの一つであるmeta descriptionタグとは、検索結果一覧におけるタイトルの下に書かれる説明文に該当します。
                        <br>検索結果に対して直接的にかかわる部分ではないようですが、ユーザーを惹きつけるために重要な要素の一つです。
                      </p>
                      <img class="metaTag-description-img" src="img/metadescription タグ解説_screenshot.png">
                      <p class="codepen" data-height="130" data-default-tab="html" data-slug-hash="yLpzLEM" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/yLpzLEM">
                        Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                        on <a href="https://codepen.io">CodePen</a>.</span>
                      </p>
                      <p>metaタグの一つであるmeta viewportタグとは、サイトをスマホやタブレットなどのPC以外で閲覧する際、サイトをどのサイズで表示するかを指定するためのタグです。
                        <br>上記の書き方以外にも方法はありますが、Googleで推奨されているのは上記の書き方です。コピペして問題ありません。
                      </p>
                      <p class="codepen" data-height="130" data-default-tab="html" data-slug-hash="gOoGbPP" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/gOoGbPP">
                        Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                        on <a href="https://codepen.io">CodePen</a>.</span>
                      </p>
                      <p>linkタグとは、当ファイルとブラウザや外部のファイルとの関係を結ぶためのタグです。
                        <br>relの部分にはリンクの種類、hrefの部分には該当するURLやファイルのパスが記載されます。
                        <br>iconの場合hrefに画像のパスを指定すると、指定された画像がタブ部分の絵柄として表示されます。
                      </p>
                      <img src="../img/タブ画像解説_screenshot.png">
                      <p class="codepen" data-height="130" data-default-tab="html" data-slug-hash="BaJwaEj" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/BaJwaEj">
                        Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                        on <a href="https://codepen.io">CodePen</a>.</span>
                      </p>
                      <p>relの部分がstylesheetの場合、当ファイルの見た目を決めるCSSファイルのパスを指定します。</p>
                      <img class="head-description-img" src="img/head内例_screenshot.png">
                      <p>このスクリーンショットは本ファイルのhead内を表示しています。
                        <br>本ページでは紹介していない部分もありますが、是非参考にしてみてください。
                      </p>
                      <h3 class="subcontents-subtitle">&lt;body&gt;内について</h3>
                      <p class="codepen" data-height="130" data-default-tab="html" data-slug-hash="JjMrdMb" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/JjMrdMb">
                        Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                        on <a href="https://codepen.io">CodePen</a>.</span>
                      </p>
                      <p>bodyタグとは、ブラウザで表示しsubcontents-subtitleたいものを記入するためのタグです。</p>
                      <p class="codepen" data-height="150" data-default-tab="html" data-slug-hash="zYpEGWq" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/zYpEGWq">
                        Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                        on <a href="https://codepen.io">CodePen</a>.</span>
                      </p>
                      <p>headerタグ及びfooterタグとは、それぞれヘッダーとフッターに関する記述を行うためのタグです。
                        <br>他のタグでも代用できますが、一般的にヘッダー及びフッターを制作する際にはそれぞれheaderタグ、footerタグを使用します。
                      </p>
                      <p class="codepen" data-height="130" data-default-tab="html" data-slug-hash="VwyMLGr" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/VwyMLGr">
                        Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                        on <a href="https://codepen.io">CodePen</a>.</span>
                      </p>
                      <p>mainタグとは、そのウェブページにおいて主となるコンテンツについて記述するためのタグです。
                        <br>SEO対策には直接関係ないようですが、読みやすいコードを書くには必要なタグであるといえます。
                      </p>
                      <p class="codepen" data-height="130" data-default-tab="html" data-slug-hash="OJzxVaa" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/OJzxVaa">
                        Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                        on <a href="https://codepen.io">CodePen</a>.</span>
                      </p>
                      <p>asideタグとは、主のコンテンツではなく補助的な内容に関する記述を行うためのタグです。
                        <br>広告や著者の簡易的なプロフィール欄などが該当します。
                      </p>
                      <p class="codepen" data-height="150" data-default-tab="html" data-slug-hash="NWXaqJV" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/NWXaqJV">
                        Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                        on <a href="https://codepen.io">CodePen</a>.</span>
                      </p>
                      <p>scriptタグとは、JavaScriptに関する記述を行うためのタグです。
                        <br>上記ではJavaScriptのファイル及びフレームワークを読み込むためのタグとして使用しています。
                      </p>
                      <h3 class="subcontents-subtitle">&lt;main&gt;内について</h3>
                      <p class="codepen" data-height="130" data-default-tab="html" data-slug-hash="bGaodXy" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/bGaodXy">
                        Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                        on <a href="https://codepen.io">CodePen</a>.</span>
                      </p>
                      <p>articleタグとは、そのウェブページにおける記事の一つを記述するためのタグです。
                        <br>articleタグを複数個使用することはできますが、その際ウェブページが長くなりがちなのでおすすめできません。
                      </p>
                      <p class="codepen" data-height="130" data-default-tab="html" data-slug-hash="PoEJPPL" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                        <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/PoEJPPL">
                        Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                        on <a href="https://codepen.io">CodePen</a>.</span>
                      </p>
                      <p>sectionタグとは、ある記事における一章或いは一節を記述するためのタグです。
                        <br>複数個使用することができ、うまく使うことで読みやすいコードを記述することができます。
                      </p>
                    </section>
                    <section>
                      <h2 class="subcontents-title">まとめ</h2>
                      <p>以上がHTMLのひな形公開&解説でした。
                        <br>プログラミング講座を終えたばかりでも、自分の力でコードを書き始めたらわからないことだらけかと思います。そのような初心者へ手助けになれればと思います。
                        <br>ファイトです!!!!!
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