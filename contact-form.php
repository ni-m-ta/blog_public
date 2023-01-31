<?php
$title = 'Contact Form';
$description = 'バックエンドエンジニアのNiTaです!';
include 'templates/head.php';
?>
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/contact-form.css">
  </head>
  <body>
  <?php include('templates/header.php');?>
    <h1 class="title">Contact Form</h1>
    <div class="container">
      <div class="contents">
        <main>
          <div class="main">
            <article>
              <div class="child-container">
                  <a class="date">2022/4/13</a>
                  <h2 class="main-title">Contact Form</h2>
                  <section>
                    <div>
                      <p>NAME: 似里 達哉 (Tatsuya Nisato)
                        <br>ADDRESS: 秋田県秋田市 (Japan)
                        <br>PHONE NUMBER: 080-3334-0911
                        <br>MAIL ADDRESS: tatsuyanisato@gmail.com
                        <br>お気軽にお問い合わせください!!!
                        <br>If you have a question, free to ask me!!!
                      </p>
                    </div>  
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