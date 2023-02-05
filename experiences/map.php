<?php
$title = '経験談';
$description = 'エンジニアのNiTaです!自分の日記帳です!よろしければ読んでみてください!';
include '../templates/head.php';
?>
   <link rel="stylesheet" href="../css/experiences/map.css">
  </head>
  <body>
  <?php include('../templates/header.php');?>
    <h1 class="title">経験談</h1>
    <div class="container">
      <div class="contents">
        <main>
          <div class="main">
            <article>
              <div class="child-container">
              <div class="recent-blogs">
                  <div class="recent-blog">
                  <a href="visaApplication.php">【アメリカ留学】めんどくさいビザの申請やってみた！</a>
                  </div>   
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