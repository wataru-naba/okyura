<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">

<title>   <?= $this->fetch('title') ?> オキュコンタクト | 那覇市牧志のコンタクトレンズ・ケア用品販売店 </title>

<?php if( getenv('APP_ENV') == 'test'):?>
    <base href="/menicon/okyura/" target="_self">
<?php elseif(getenv('APP_ENV') == 'prod'):?>
    <base href="/" target="_self">
<?php endif;?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="コンタクトレンズのメリット、>ソフトレンズとハードレンズの違いは何？">
<link rel="shortcut icon" href="">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/common.css">
<link rel="stylesheet" href="./css/top.css">
<link rel="stylesheet" href="./css/contact.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<header>
    <div class="header-inner">
        <h1 class="header-logo"><a href="./"><img src="./images/h_logo.png" alt="オキュコンタクト"/></a></h1>
        <nav class="header-nav">
            <ul class="header-nav-list">
                <li><a href="./beginner.html">初めての方へ</a></li>
                <li><a href="./products.html">取扱商品</a></li>
                <li><a href="./melsplan.html">メルスプラン</a></li>
            </ul>
            <div class="header-nav-info"><a href="" class="">お問い合わせ</a></div>
        </nav>
        <div class="header-nav-btn"><p>menu</p><span></span><span></span><span></span></div>
    </div>
</header>

<?= $this->fetch('content') ?>

<div class="topPage">
    <a href="./index.html" class="topPage-btn">トップページ</a>
</div>
<div class="pageTop">
    <img src="./images/pagetop.png"/>
</div>


<footer>
    <div class="footer-inner">
        <h1 class="footer-log"><img src="./images/f_logo.png" alt="オキュコンタクト"/></h1>
        <p class="footer-address">
            沖縄県那覇市牧志１丁目４−４３新川ビル 2階<br/>
            （沖映通り 美栄橋駅から徒歩約4分）
        </p>
        <a href="" class="footer-tel"><img src="./images/f_tel.png" alt="098-868-1980"/></a>
        <nav>
            <ul class="footer-nav-list">
                <li><a href="./beginner.html">初めての方へ</a></li>
                <li><a href="./products.html">取扱商品</a></li>
                <li><a href="./melsplan.html">メルスプラン</a></li>
                <li><a href="./sitemap.html">サイトマップ</a></li>
            </ul>
        </nav>
    </div>
    <div class="copyright">
        Copyright &copy; 2023 OCU CONTACT All rights reserved.
    </div>
</footer>

<script src="./js/script.js"></script>
<?= $this->fetch('script') ?>
</body>
</html>