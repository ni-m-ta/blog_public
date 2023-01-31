<?php
$title = 'NiTa BLOG | Profile';
$description = 'エンジニアのNiTaです!';
include 'templates/head.php';
?>
   <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
  <?php include('templates/header.php');?>
    <h1 class="title">Profile</h1>
    <div class="container">
      <div class="contents">
        <main>
          <div class="main">
            <article>
              <div class="child-container">
                  <p class="date">2022/4/5</p>
                  <h2 class="main-title">Introduction</h2>
                  <div class="main-img"><img src="img/me2.PNG"></div>
                  <div class="main-start-explanation">
                    <div class="face-icon">
                      <img src="img/me2.PNG">
                    </div>
                    <div class="chat">Hi! Everyone! My name is Tatsuya Nisato!
                      <br>Nice to meet you!
                      <br>As I cultivate myself, I will update this introduction!
                    </div>
                  </div>
                  <div class="subcontents">
                    <section>
                      <div class="profile-descripton">
                        <h3>About | NiTa</h3>
                        <p>From Iwate, Japan</p>
                        <p>Since I was a child, I had wanted to be a professional tennis player.<br>
                            However, I realized I couldn't.<br>
                            When I got lost in my future, I found engineering.<br>
                            After that, I am studing Computer Science and developing my products.
                        </p>
                        <p>I love Pokemon! Especially, Banette.</p>
                        <p>I like sleeping in my bed with my cat.</p>
                        <p>My cat called "Bun-chan".</p>
                        <p>Now, I am in St. Mary's College of California to study business.</p>
                      </div>
                    </section>
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