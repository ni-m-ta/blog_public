<?php
$title = 'How to use text-align: center; & margin: auto;';
$description = 'Today, we will discuss how to use text-align:center & margin: auto;';
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
                  <a class="date">4/11/2022</a>
                  <a class="english" href="elementsPosition.php">日本語版へ</a>
                  <h2 class="main-title">【For Beginners】How to use text-align & margin!</h2>
                  <div class="main-img"><img src="../img/css-img.jpg"></div>
                  <div class="main-start-explanation">
                    <div class="face-icon">
                      <img src="../img/me2.PNG">
                    </div>
                    <div class="chat">Let's get how to place elements horizontally!
                        <br>To acheive the purpose, we will mainly discuss text-align and margin!
                    </div>
                  </div>
                  <div class="achievements">
                    <div class="child-container">
                      <p class="achievements-title">Achievements</p>
                      <ul>
                        <li>Get how to place elements horizontally</li>
                        <li>Get how to use text-align:center;& margin:auto;</li>
                      </ul> 
                    </div>
                  </div>
                  <div class="index">
                    <p class="index-title">Index</p>
                    <div class="index-container">
                      <ol>
                        <li class="index-subcontent">Difference between block and inline elements</li>
                        <li class="index-subcontent">Spaces of block and inlne elements</li>
                        <li class="index-subcontent">Difference between text-align:center; and margin:auto;</li>
                        <li class="index-subcontent">Summary</li>
                      </ol>
                    </div>
                  </div>
                  <div class="subcontents">
                    <section>
                        <h2 class="subcontents-title">Difference between block and inline elements</h2>
                        <p>To get how to put elements, you need to understand what block and inline elements are.
                            <br>This is because there are differences between text-align:center; and margin:auto; in elements they affect.
                        </p>
                        <p>First of all, block elements are basic elements to organize HTML files as header, matrixes, and so on.
                            <br>For example, block elements include &lt;div&gt;や&lt;p&gt;、&lt;section&gt;
                        </p>
                        <p>On the other hand, inline elements are used in block elements as a part of sentences.
                            <br>For example, inline elements include &lt;a&gt;、&lt;span&gt;.
                        </p>
                        <p>Good (inline elements in block elements)</p>
                            <p class="codepen" data-height="130" data-default-tab="html" data-slug-hash="MWrXzMP" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                                <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/MWrXzMP">
                                Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                                on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                        <p>Bad (block elements in inline elements)</p>
                            <p class="codepen" data-height="130" data-default-tab="html" data-slug-hash="RwxJqXo" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                                <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/RwxJqXo">
                                Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                                on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                    </section>
                    <section>
                        <h2 class="subcontents-title">Spaces of block and inline elements</h2>
                        <p>By getting the spaces of these elements, you can understand how to use them more easily.
                            <br>Let's check the differences between block and inline elements in spaces.
                        </p>
                        <p class="codepen" data-height="150" data-default-tab="html,result" data-slug-hash="qBpKLab" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                            <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/qBpKLab">
                            Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>
                        <p>From the above codes, you can realise</p>
                        <ul>
                            <li>The spaces of default block elements are the same as the space of your screen (More strictly speaking, the spaces is the same as that of parent block elements.)</li>
                            <li>The spaces of default inline elements is the same as the contents the elements include.</li>
                        </ul>
                        <p>After you understand the above codes, let's check the following contents.</p>
                    </section>
                    <section>
                        <h2 class="subcontents-title">Differences between text-align & margin</h2>
                        <p>Before discussing the differnces, the common feature should be checked. 
                            <br>The common feature is that both can be applied for block elements.
                        </p>
                        <p>In the following codes, text-align:center; and margin:auto; are used for inline elements.
                            <br>You cannot recognize differences visually.
                        </p>
                        <p class="codepen" data-height="150" data-default-tab="html,result" data-slug-hash="qBpKwJR" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                            <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/qBpKwJR">
                            Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>
                        <p>On the other hand, in the following codes, text-align:center; and margin:auto; are used for block elements.
                            <br>We can only see the changes in block elements affected by text-align:center;.
                        </p>
                        <p class="codepen" data-height="150" data-default-tab="html,result" data-slug-hash="OJzEGeB" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                            <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/OJzEGeB">
                            Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                          </p>
                        <p>In this way, the role of text-align:center; is <strong>to center contents in block elements horizontally.</strong>
                            <br>The contents include sentences, inline elements, and so on.
                        </p>
                        <p>On the other hand, the role of margin: auto; is <strong>to center block elements themselves.</strong>
                            <br>Let's see the following codes
                        </p>
                        <p class="codepen" data-height="130" data-default-tab="html,result" data-slug-hash="YzYvbLJ" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                            <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/YzYvbLJ">
                            Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>
                        <p>In this way, by clarifing the width of block elements and setting margin:auto;, you can center block elements.</p>
                        <p class="codepen" data-height="130" data-default-tab="html,result" data-slug-hash="LYerogB" data-user="ni-m-ta" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                            <span>See the Pen <a href="https://codepen.io/ni-m-ta/pen/LYerogB">
                            Untitled</a> by Tatsuya Nisato (<a href="https://codepen.io/ni-m-ta">@ni-m-ta</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>
                        <p>Moreover, by setting text-align:center;, you can center the contents in block elements.</p>
                    </section>
                    <section>
                      <h2 class="subcontents-title">Summary</h2>
                      <p>To sum up, the each role of text-align:center; and margin:auto; is...</p>
                      <ul>
                          <li>text-align:center; is <strong>to center the contents (sentences, inline elements...)in block elements.</strong></li>
                          <li>margin:auto; is <strong>to center block elements themseleves</strong></li>
                      </ul>
                      <p>If you feel difficult to understand, you should write codes again and again!
                          <br>Good Luck!!!
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