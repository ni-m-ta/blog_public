<?php
$title = '【初心者向け】左右中央寄せをしたい!text-alignとmargin';
$description = 'ここでは初心者向けにCCSの解説を行います。今回はtext-align:center;とmargin:auto;の違いを理解してみましょう!';
include '../templates/head.php';
?>
   <link rel="stylesheet" href="../css/css/elementsPosition.css">
  </head>
  <body>
  <?php include('../templates/header.php');?>

    <h1 class="title">CCS Blog</h1>
    <div class="container">
      <div class="contents">
        <main>
          <div class="main">
            <article>
              <div class="child-container">
                  <a class="date">2022/4/5</a>
                  <a class="english" href="elementsPosition-en.php">For English Ver.</a>
                  <h2 class="main-title">【初心者向け】左右中央寄せをしたい!text-alignとmargin</h2>
                  <div class="main-img"><img src="../img/css-img.jpg"></div>
                  <div class="main-start-explanation">
                    <div class="face-icon">
                      <img src="../img/me2.PNG">
                    </div>
                    <div class="chat">今回はCCSの難しいポイントである左右中央寄せをできるようになりましょう!
                        <br>そのためにtext-align:center;とmargin:auto;を理解しましょう!
                    </div>
                  </div>
                  <div class="achievements">
                    <div class="child-container">
                      <p class="achievements-title">この記事からわかること・できるようになること</p>
                      <ul>
                        <li>左右中央寄せができるようになる</li>
                        <li>text-align:center;とmargin:auto;の違いがわかる</li>
                        <li>要素の配置を変えられるようになる</li>
                      </ul> 
                    </div>
                  </div>
                  <div class="index">
                    <p class="index-title">目次</p>
                    <div class="index-container">
                      <ol>
                        <li class="index-subcontent">ブロック要素とインライン要素の違い</li>
                        <li class="index-subcontent">ブロック要素とインライン要素の領域</li>
                        <li class="index-subcontent">text-align:centerとmargin:auto;の違い</li>
                        <li class="index-subcontent">まとめ</li>
                      </ol>
                    </div>
                  </div>
                  <div class="subcontents">
                    <section>
                        <h2 class="subcontents-title">ブロック要素とインライン要素の違い</h2>
                        <p>要素の配置を理解するためにはまずブロック要素とインライン要素の違いを理解する必要があります。
                            <br>なぜならtext-alignとmarginが影響する要素は異なるからです。
                        </p>
                        <p>まずブロック要素とは、見出しや表、章などHTMLファイルの文書を構成するための基本となる要素です。
                            <br>例としては、&lt;div&gt;や&lt;p&gt;、&lt;section&gt;があげられます。
                        </p>
                        <p>一方インライン要素とは、ブロック要素内に用いられる要素で、文章の一部として使われます。
                            <br>例としては、&lt;a&gt;、&lt;span&gt;などがあげられます。
                        </p>
                        <p>正しい表記（ブロック要素がインライン要素を内包している）</p>
                            <p class="codepen" data-height="130" data-default-tab="html" data-slug-hash="MWrXzMP" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                                <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/MWrXzMP">
                                Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                                on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                        <p>誤った表記（ブロック要素がインライン要素に内包されている、ただしHTMLのルールが緩いためブラウザ上では正しく表示されるようにみえるが後に不都合が生じる可能性が高い）</p>
                            <p class="codepen" data-height="130" data-default-tab="html" data-slug-hash="RwxJqXo" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                                <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/RwxJqXo">
                                Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                                on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                    </section>
                    <section>
                        <h2 class="subcontents-title">ブロック要素とインライン要素の領域</h2>
                        <p>各要素の領域を理解することは、要素の配置の仕方を理解することにつながります。
                            <br>ではブロック要素とインライン要素の領域の違いについてみていきましょう。
                        </p>
                        <p class="codepen" data-height="150" data-default-tab="html,result" data-slug-hash="qBpKLab" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                            <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/qBpKLab">
                            Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>
                        <p>上記の表示からわかることは、</p>
                        <ul>
                            <li>デフォルトのブロック要素は、横幅を指定しない限り、画面の幅いっぱいに広がること（厳密にいえば、このブロック要素を囲む要素いっぱいの幅に広がる）</li>
                            <li>デフォルトのインライン要素は、内包する文章など分の幅をとること</li>
                        </ul>
                        <p>上記の違いを理解したうえで次の章をみていきましょう。</p>
                    </section>
                    <section>
                        <h2 class="subcontents-title">text-align:center;とmargin:auto;の違い</h2>
                        <p>相違点を論ずる前に、一致点について解説します。
                            <br>text-align:center;とmargin:auto; の一致点とは、どちらも「ブロック要素に適用」されることです。
                        </p>
                        <p>下記のコードは、インライン要素にそれぞれtext-align:center;とmargin:auto;適用したものです。
                            <br>どちらも変化は確認できません。
                        </p>
                        <p class="codepen" data-height="150" data-default-tab="html,result" data-slug-hash="qBpKwJR" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                            <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/qBpKwJR">
                            Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>
                        <p>一方下記のコードは、ブロック要素にそれぞれtext-align:center;とmargin:auto;適用したものです。
                            <br>margin:auto;を適用したブロック要素には変化が見られず、text-align:center;を適用したブロック要素においては中身の文章が中央寄せされています。
                        </p>
                        <p class="codepen" data-height="150" data-default-tab="html,result" data-slug-hash="OJzEGeB" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                            <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/OJzEGeB">
                            Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                          </p>
                        <p>このようにtext-align:center;の役割とは、<strong>「ブロック要素の中身を中央寄せすること」</strong>です。
                            <br>この際ブロック要素の中身とは、文章やインライン要素が含まれます。
                        </p>
                        <p>一方でmargin:auto;の役割とは、<strong>「ブロック要素自体を中央寄せすること」</strong>です。
                            <br>下記のコードをみてください。
                        </p>
                        <p class="codepen" data-height="130" data-default-tab="html,result" data-slug-hash="YzYvbLJ" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                            <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/YzYvbLJ">
                            Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>
                        <p>このようにブロック要素のwidthを指定しmargin:auto;を用いることで、ブロック要素自体を中央寄せすることができます。</p>
                        <p class="codepen" data-height="130" data-default-tab="html,result" data-slug-hash="LYerogB" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                            <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/LYerogB">
                            Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>
                        <p>またこのようにtext-align:center;を適用することで、中身のインライン要素を中央寄せすることができます。</p>
                    </section>
                    <section>
                      <h2 class="subcontents-title">まとめ</h2>
                      <p>最後にtext-align:center;とmargin:auto;の違いについて確認しましょう。</p>
                      <ul>
                          <li>text-align:center;とは、<strong>「ブロック要素の中身を中央寄せすること」</strong>です。</li>
                          <li>margin:auto;とは、<strong>「ブロック要素自体を中央寄せすること」</strong>です。</li>
                      </ul>
                      <p>いかがでしょうか。わからない場合はひとまずコードを書いてみましょう。そのうち感覚をつかめるはずです!
                          <br>今回はまたこの辺で。お疲れ様でした!
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