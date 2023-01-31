<?php
$title = '【【Ubuntu-22.04】How to change brightness ~BrightnessController~';
$description = 'Today, I will introduce how to change brightness in Ubuntu 22.04. If you are looking for how to fix brightness controller, this page will be help you!';
$keywords = 'NiTa, nita, Linux, Ubuntu, brightness 明るさ';
include '../templates/head.php';
?>
   <link rel="stylesheet" href="../css/ubuntuBrightness-en.css">
  </head>
  <body>
  <?php include('../templates/header.php');?>
    <h1 class="title">IT Blog</h1>
    <div class="container">
      <div class="contents">
        <main>
          <div class="main">
            <article>
              <div class="child-container">
                  <a class="date">2022/6/9</a>
                  <a class="english" href="css-blog-elementsPosition-en.html">For English Ver.</a>
                  <h2 class="main-title">【Ubuntu-22.04】How to change brightness ~BrightnessController~</h2>
                  <div class="main-img"><img src="../img/main1.png"></div>
                  <div class="main-start-explanation">
                    <div class="face-icon">
                      <img src="../img/me2.PNG">
                    </div>
                    <div class="chat">Today, I will introduce how to change brightness by using Brightness Controller.
                        <br>Let's Ubuntu!
                    </div>
                  </div>
                  <div class="index">
                    <p class="index-title">Index</p>
                    <div class="index-container">
                      <ol>
                        <li class="index-subcontent">What is Brittness Controller</li>
                        <li class="index-subcontent">Steps about how to change setting to apply Brghtness Controller</li>
                        <li class="index-subcontent">How to fix brightness controller</li>
                        <li class="index-subcontent">Summary</li>
                      </ol>
                    </div>
                  </div>
                  <div class="subcontents">
                    <section>
                        <h2 class="subcontents-title">Explanation for Brightness Controller</h2>
                        <p>Brightness Controller is a simple app for Ubuntu to change the brightness of your monitor. 
                          <br>It is easy to use, so if there is no way to change the brigtness you can test it!
                        </p>
                    </section>
                    <section>
                        <h2 class="subcontents-title">Steps about how to change settings</h2>
                        <p>Install Brightness Controller</p>
                        <div class="like-terminal">
                          <p class="like-terminalCommands">$ sudo apt update</p>
                          <p class="like-terminalCommands">$ sudo add-apt-repository ppa:apandada1/brightness-controller</p>
                          <p class="like-terminalCommands">$ sudo apt update</p>
                        </div>
                        <p>That's all!</p>          
                    </section>
                    <section>
                      <h2 class="subcontents-title">How to fix BrightnessController</h2>
                      <p>Sometimes, your Brightness Controller does not work.
                        <br>So, I will introduce 3 solutions.
                      </p>
                      <p>1. Disable wayland</p>
                      <p>Wayland is a communication protocol and set as default protocol for Ubuntu 22.04.
                        <br>However, sometimes Brightness Controller does not work on Wayland. When you disable Wayland, you can use Brightness Controller.
                      </p>
                      <div class="like-terminal">
                        <p class="like-terminalCommands">$ sudo vi /etc/gdm3/custom.conf</p>
                      </div>
                      <p>In the custom.conf file,</p>
                      <div class="like-terminal">
                        <p class="like-terminalCommands">WatlandEnable=False</p>
                      </div>
                      <p>2. Change settings for drivers</p>
                      <div class="like-terminal">
                        <p class="like-terminalCommands">$ sudo vi /etc/default/grub</p>
                      </div>
                      <p>In the grub file,</p>
                      <div class="like-teminal">
                        <p class="like-terminalCommands">GRUB_CMDLINE_LINUX_DEFAULT="quiet splash acpi_backlight="vendor"</p>
                      </div>
                      <p>3. Change settings for drivers in terms of the size of monitor</p>
                      <div class="like-terminal">
                        <p class="like-terminalCommands">$ sudo vi /etc/default/grub</p>
                      </div>
                      <p>In the file, the default setting of "GRUB_GFXMODE=640x480"
                        <br>choose your monitor size. For example, because my monitor size is 1280*1080,
                      </p>
                      <div class="like-terminal">
                        <p class="like-terminalCommands">GRUB_GFXMODE=1280x1080</p>
                      </div>
                    </section>
                    <section>
                      <h2 class="subcontents-title">Summary</h2>
                      <p>I hope you spend good ubuntu life!!!</p>
                    </section>
                    <div class="ad-space">
                      <a href="https://px.a8.net/svt/ejp?a8mat=3H9ZPO+64AFDM+50+2HH8I9" rel="nofollow">
                      <img border="0" width="728" height="90" alt="" src="https://www28.a8.net/svt/bgt?aid=210418188370&wid=002&eno=01&mid=s00000000018015029000&mc=1"></a>
                      <img border="0" width="1" height="1" src="https://www11.a8.net/0.gif?a8mat=3H9ZPO+64AFDM+50+2HH8I9" alt="">
                      <a href="https://px.a8.net/svt/ejp?a8mat=3N7ZF3+46MPLM+CO4+15TP8X" rel="nofollow">
                      <img border="0" width="728" height="90" alt="" src="https://www27.a8.net/svt/bgt?aid=220402191253&wid=002&eno=01&mid=s00000001642007025000&mc=1"></a>
                      <img border="0" width="1" height="1" src="https://www10.a8.net/0.gif?a8mat=3N7ZF3+46MPLM+CO4+15TP8X" alt="">
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
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
  </body>
 </html>