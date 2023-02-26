<?php
$title = '【Git Cheatsheet】業務で活躍Gitコマンド集';
$description = 'エンジニアのNiTaです!今回はGitについて解説していきます。Feb/2023';
include '../templates/head.php';
?>
<link rel="stylesheet" href="../css/it/howToUseGit.css">
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
                <a class="date">2023/2/26</a>
                <h2 class="main-title">【Git Cheatsheet】業務で活躍Gitコマンド集</h2>
                <div class="main-img"><img src="../img/main1.png"></div>
                <div class="main-start-explanation">
                    <div class="face-icon">
                        <img src="../img/me2.PNG">
                    </div>
                    <div class="chat">業務でよく使うGitのコマンドを解説していきます!
                    </div>
                </div>
                <div class="index">
                    <p class="index-title">目次</p>
                    <div class="index-container">
                    <ol>
                        <li class="index-subcontent">Gitについて</li>
                        <li class="index-subcontent">コマンド集</li>
                        <li class="index-subcontent">まとめ</li>
                    </ol>
                    </div>
                </div>
                <div class="subcontents">
                    <section>
                        <h2 class="subcontents-title">Gitについて</h2>
                        <p>Gitとは分散型バージョン管理システムです。わかりやすく言い換えると、一つのプロジェクトのコードを書く時に上手に管理するためのツールです。</p>
                        <p>多くの場合このGitとGithubやBitBacketと一緒に使います。その違いを簡単に説明すると、Gitは1人のために、GithubやBitBacketはみんなのためのコード管理ツールです。</p>
                    </section>
                    <section>
                        <h2 class="subcontents-title">コマンド集</h2>
                        <h3 class='subcontents-subtitle'>業務開始</h3>
                            <p>作業を開始する際、masterブランチから作業ブランチへ移行すると思います。その際のコマンドを紹介。</p>
                            <div class='like-terminal'>
                            <p class='like-terminalCommands'>$ git checkout master</p>
                            <p class='like-terminalCommands'>$ git pull origin master</p>
                            <p class='like-terminalCommands'>$ git checkout -b feature/作業ブランチ名</p>
                            </div>
                            <p>まずはマスターブランチに移動。その後リモートブランチ(Githubなど)にある最新の履歴を取得し、ローカルのmasterブランチに反映。-bをつけたcheckoutコマンドで作業ブランチを作成、移動します。</p>
                        <h3 class='subcontents-subtitle'>編集後</h3>
                            <p>編集後のコマンドについて</p>
                            <div class='like-terminal'>
                            <p class='like-terminalCommands'>$ git add .</p>
                            <p class='like-terminalCommands'>$ git commit -m "作業内容に関するコメント"</p>
                            <p class='like-terminalCommands'>$ git push origin feature/作業ブランチ名</p>
                            </div>
                            <p>まずは編集内容をステージング(保存的な)。その後コメントともにコミット(コメントと編集内容を履歴に残す)。最後にリモートブランチ(Githubなど)に履歴を反映させる。</p>
                        <h3 class='subcontents-subtitle'>マージする</h3>
                        <p>作業ブランチにて一通り作業、レビューも終えたとします。その後develop環境またstaging環境(作業後の動作確認をするためのブランチ)にマージすることになるかと思います。</p>
                        <div class='like-terminal'>
                        <p class='like-terminalCommands'>$ git checkout マージ元のブランチ名(親的な）</p>
                        <p class='like-terminalCommands'>$ git merge --no-ff 編集作業した作業ブランチ名(子的な)</p>
                        </div>
                        <p>まずはマージもとのブランチに移動します。その後作業したブランチの編集内容を反映させます。この際コンフリクト(編集内容が他の人とかぶってしまいGitがどちらを判断したらいいかわからなくなっている場合)が起きてしまうことがあります。</p>
                        <h3 class='subcontents-subtitle'>コンフリクトの解消</h3>
                        <p>コンフリクトが起きても慌てず騒がず(僕は慌てて余計なことをしてしまい迷惑をかけたことがあります。落ち着いて)。この際取るべき方法として状況別に紹介します。</p>
                        <p>マージしてみたけどコンフリクトが起きたからやーめた</p>
                        <div class='like-terminal'>
                        <p class='like-terminalCommands'>$ git merge --abort</p>
                        </div>
                        <p>マージしたらコンフリクトが起きた。どうにかしようと編集したけどやっぱやーめた</p>
                        <div class='like-terminal'>
                        <p class='like-terminalCommands'>$ git reset --hard HEAD</p>
                        </div>
                        <p>マージ全て完了した。でもやっぱりマージ自体を取り消そう</p>
                        <div class='like-terminal'>
                        <p class='like-terminalCommands'>$ git revert -m 1or2 マージコミット識別番号(マージコミットしたという履歴を示す英数字の羅列)</p>
                        </div>
                        <p>まず数字(1or2)について。ここでマージ元の履歴を優先するか、マージしてきた履歴を優先するかを選択します。基本は1を選択。$ git show で二つのコミット識別番号が提示されますが前者が1後者が2です。</p>
                    </section>
                    <section>
                    <h2 class="subcontents-title">まとめ</h2>
                        <p>今回の記事を作成するにあたり、<a href="https://qiita.com/chihiro/items/5dd671aa6f1c332986a7">【git】マージしたけどやっぱりやめたい時のやり方4種類</a>を参考にいたしました。
                        <br>またGitの仕組みについてより詳しく知りたい方はこちらの記事<a href="https://softwarenote.info/p2113/">Git ワークフロー（ブランチモデル）とその手順</a>も参考になるかかと思います。</p>
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