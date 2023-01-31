<?php
$title = 'CSS Blogs';
$description = 'エンジニアのNiTaです!どうぞよろしくお願いいたします!';
include '../templates/head.php';
?>
   <link rel="stylesheet" href="../css/css/map.css">
  </head>
  <body>
  <?php include('../templates/header.php');?>
    <h1 class="title">CSS Blogs</h1>
    <div class="container">
      <div class="contents">
        <main>
          <div class="main">
            <article>
              <div class="child-container">
                <div class="main-container">
                  <a class="blog css-elementsPosition" href="elementsPosition.php">
                    <p class="blog-subtitle">初心者向け</p>
                    <p class="blog-title">左右中央寄せを完璧に!<br>text-alignとmargin</p>
                  </a>  
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