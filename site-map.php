<?php
$title = 'Site Map';
$description = 'バックエンドエンジニアのNiTaです!';
include 'templates/head.php';
?>
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/site-map.css">
  </head>
  <body>
  <?php include('templates/header.php');?>
    <h1 class="title">Site Map</h1>
    <div class="container">
      <div class="contents">
        <main>
          <div class="main">
            <article>
              <div class="child-container">
                <div>
                  <a href="html/base.php">2022/4/3 【初心者向け】コピペOK!HTMLひな形公開・解説</a>
                </div>
                <div>
                  <a href="cssBlog/elementsPosition.php">2022/4/11 【初心者向け】左右中央寄せをしたい!text-alignとmargin</a>
                  <br>
                  <a href="cssBlog/elementsPosition-en.php">4/12/2022 【For Begginers】Center elements horizontaly by using text-align & margin</a>
                </div>          
              </div>
          </article>
          </div> 
        </main>
        <?php include('templates/profile.php');?>
      </div>
    </div>
    <?php include('templates/footer.php');?>
    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
  </body>
 </html>