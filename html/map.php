<?php
$title = 'HTML Blogs';
$description = 'エンジニアのNiTaです!どうぞよろしくお願いいたします!';
include '../templates/head.php';
?>
   <link rel="stylesheet" href="../css/html/map.css">
  </head>
  <body>
  <?php include('../templates/header.php');?>
    <h1 class="title">HTML Blogs</h1>
    <div class="container">
      <div class="contents">
        <main>
          <div class="main">
            <article>
              <div class="child-container">
              <div class="recent-blogs">
                  <div class="recent-blog">
                    <a href="base.php">【初心者向け】htmlテンプレート公開!</a>
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