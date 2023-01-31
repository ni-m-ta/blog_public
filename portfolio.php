<?php
$title = 'Portfolio';
$description = 'バックエンドエンジニアのNiTaです!';
include 'templates/head.php';
?>
   <link rel="stylesheet" href="css/portfolio.css">
  </head>
  <body>
  <?php include('templates/header.php');?>
    <h1 class="title">Portfolio</h1>
    <div class="container">
      <div class="contents">
        <main>
          <div class="main">
            <article>
              <div class="child-container">
                  <a class="date">2022/4/13</a>
                  <h2 class="main-title">Portfolio</h2>
                  <section>
                    <h3><a href="https://apps.apple.com/app/aiu-unofficial/id6443444731">AIU(unOfficial)</a></h3>
                    <p>私が所属している大学の非公式iOSアプリです。学生生活をより楽にするために製作いたしました。</p>
                    <h3><a href="https://ecap.top">Evaluate Classes and Professors</a></h3>
                    <p>大学の授業や教授を評価するための掲示板Webアプリです。学生にとって最良の授業選択ができるように製作いたしました。</p>
                  </section>                  
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