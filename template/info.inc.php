<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="google-site-verification" content="J2vrRbZhbOeEi-BFnj3AUunTg1k8hStHBZyfpmMNwgU" /><!--регистрация в google.com-->
<meta name="yandex-verification" content="c9e3785a77e73815" /> <!--регистрация в Яндекс-->
<meta charset="<?=$config['encoding']?>" />
<title><?=$title?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="<?=$keywords?>">
<meta name="description" content="<?=$description?>">
<link rel="stylesheet" href="<?=$config['sitelink']?>template/bootstrap/css/bootstrap.min.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?=$config['sitelink']?>template/info.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?=$config['sitelink']?>template/bootstrap/css/bootstrap-responsive.min.css" type="text/css" media="screen, projection">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"/>
<meta name="apple-mobile-web-app-capable" content="yes">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js" type="text/javascript"></script>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "http://aquaphor.kg/",
  "name": "Фильтры для очистки воды и системы очистки Аквафор",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+996312900410",
    "contactType": "Customer service"
  }
}
</script>
</head>
<body>
<!--google переводчик-->


<!--header-->
<header class="navbar navbar-fixed-top">
<nav class="navbar-inner">
<div class="container-fluid">
<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</a>
<!--<a class="brand" href="<?=$config['sitelink']?>"><?= $config['sitename']?></a>-->

<!--<img src="<?=$config['sitelink']?>i/logo-small.png" alt="alesunix" class="pull-left" style="height:40px;">-->
<a class="brand" href="<?=$config['sitelink']?>" title="<?=$config['sitename']?>"><b><big><span class="text-info">&nbsp;<?=$config['sitename']?></span></a></b></big>

<div class="nav-collapse collapse">
<ul class="nav pull-right">
<?=GetMenuItems($this_page, $mainmenu, $category)?>

<!--google переводчик-->



</ul>
</div>
</div>
</nav>
</header>

<!--/header-->
<!--content-->

<style>
.hide{ visibility: hidden; }<!--Стиль скрытия title -->
</style>
<section class="content container-fluid">
<div class="share42init pull-right" data-url="<?= $config['sitelink'] . $page ?>.html" data-title="<?= $title ?>"></div>
<h3 class="muted"><?=$config['slogan']?></h3>

<div class="row-fluid">
<article class="span9 well well-large well-inverse">
<!--DIV title hide --><div class="hide"><h1><?=$title;?></h1></div><!--/DIV title hide -->
<?=$content;?>
</article><!--/span-->

<!--/Установка новостей-->
<?php
  
?>
<aside class="span3">
<!--/Блоки-->
<?=GetBlock($page_blocks, 'catalog', $catalog )?>
<?=GetBlock($page_blocks, 'catalog2', $catalog2 )?>
<?=GetBlock($page_blocks, 'reviews', $reviews )?>
<?=GetBlock($page_blocks, 'newsblock', $newsblock )?>
<?=GetBlock($page_blocks, 'stock', $stock )?>
<?=GetBlock($page_blocks, 'news', $news )?>
<?=GetBlock($page_blocks, 'waterboss', $waterboss )?>
<!--/Коментарии-->



</aside><!--/span-->
</div><!--/row-->
</section>
<!--/content-->
<!--footer-->
<style>
.footer-bg {
background: #F2F2F2; /* Цвет фона */
}
</style>
<footer class="container-fluid & footer-bg">
<div class="navbar centered-pills">
<nav class="navbar-inner">
<ul class="nav-pills" style="margin:5px 0 0 0;">
<?=GetMenuItems($this_page, $footmenu, $category)?>
</ul>
</nav>
</div>
<!--/Социалки -->
<script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
<script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,twitter" data-counter=""></div>

<!--Социалки кнопка «Нравится»-->
<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Faquaphor.plus&width=300&layout=standard&action=like&
size=small&show_faces=true&share=true&height=80&appId" width="300" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
<!--/Социалки кнопка «Нравится»-->

<small><p align="right" class="pull-right">
Лицензия:
<br>
Фирменный магазин "Аквафор плюс" <br>
Адрес: г. Бишкек, ул. Киевская 77 <br>
(у остановки здания Илбирс)<br>
Телефон: (0312) 900 - 410;<br>
(0701) 811 - 331; <br>
(0551) 445 - 344;<br>
(0772) 539 - 348
<br>

<!-- WWW.NET.KG , code for http://aquaphor.kg -->
<script language="javascript" type="text/javascript">
 java="1.0";
 java1=""+"refer="+escape(document.referrer)+"&amp;page="+escape(window.location.href);
 document.cookie="astratop=1; path=/";
 java1+="&amp;c="+(document.cookie?"yes":"now");
</script>
<script language="javascript1.1" type="text/javascript">
 java="1.1";
 java1+="&amp;java="+(navigator.javaEnabled()?"yes":"now");
</script>
<script language="javascript1.2" type="text/javascript">
 java="1.2";
 java1+="&amp;razresh="+screen.width+'x'+screen.height+"&amp;cvet="+
 (((navigator.appName.substring(0,3)=="Mic"))?
 screen.colorDepth:screen.pixelDepth);
</script>
<script language="javascript1.3" type="text/javascript">java="1.3"</script>
<script language="javascript" type="text/javascript">
 java1+="&amp;jscript="+java+"&amp;rand="+Math.random();
 document.write("<a href='http://www.net.kg/stat.php?id=5253&amp;fromsite=5253' target='_blank'>"+
 "<img src='http://www.net.kg/img.php?id=5253&amp;"+java1+
 "' border='0' alt='WWW.NET.KG' width='88' height='31' /></a>");
</script>
<noscript>
 <a href='http://www.net.kg/stat.php?id=5253&amp;fromsite=5253' target='_blank'><img
  src="http://www.net.kg/img.php?id=5253" border='0' alt='WWW.NET.KG' width='88'
  height='31' /></a>
</noscript>
<!-- /WWW.NET.KG -->

<!--Счетчик LiveInternet counter-->
<script type="text/javascript"><!--
document.write("<a href='//www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t11.1;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: number of pageviews for 24 hours,"+
" of visitors for 24 hours and for today is shown' "+
"border='0' width='88' height='31'><\/a>")
//--></script><!--/LiveInternet--></p>
<p class="pull-left">
<?=date('Y')?> © "Аквафор плюс" Официальный представитель в Кыргызстане!
<dfn><br><font size=1px><b>
Все права на использование материалов сайта принадлежат Корпорации АКВАФОР.<br>
Использование материалов без письменного согласия и ссылки на источник запрещено.<br>

<a href="https://www.facebook.com/aquaphor.plus" target="_blank">Наша страница в facebook.com</a><br>
<a href="https://ok.ru/profile/544626776573" target="_blank">Наша страница в Ok.ru</a>
</font></b></dfn></small>
<br><br>
<!--Informer.kg code start-->
<img src="http://www.informer.kg/pog/pngs/informer19.png" width="88" height="31" alt="Погода в Кыргызстане" border="0" />
<img src="http://www.informer.kg/cur/pngs/informer34.png" width="88" height="31" alt="Курс валют" border="0" />
<img src="http://100btc.ru/informer/BTC-USD_88x31.png" border="0" title="Bitcoin" width="88" height="31" alt="Курс Bitcoin к USD">
<!-- Informer.kg code end-->
<br>
<sub><a href="https://www.facebook.com/alesunix" target="_blank">developed by alesunix</a></sub>
</p>
</footer>
<!--/footer -->
<!--/Google статистика -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-45405429-3', 'auto');
ga('send', 'pageview');

</script>

<script type="text/javascript" src="<?= $config['sitelink']?>template/bootstrap/js/bootstrap.min.js"></script>

<!--tooltips--->
<script type="text/javascript">
$(window).resize(function() {
if ($(window).width() < 979) {
$('aside a').tooltip('destroy');
$('header ul.nav.pull-right li:last-child a').tooltip('destroy');
$('aside a').tooltip({
placement: "top"
});
$('header ul.nav.pull-right li:last-child a').tooltip({
placement: "top"
});
}
else {
$('header ul.nav.pull-right li:last-child a').tooltip('destroy');
$('aside a').tooltip('destroy');
$('aside a').tooltip({
placement: "left"
});
$('header ul.nav.pull-right li:last-child a').tooltip({
placement: "bottom"
});
}
});

if ($(window).width() < 979) {
$('aside a').tooltip({
placement: "top"
});
$('header ul.nav.pull-right li:last-child a').tooltip({
placement: "top"
});
}
else {
$('aside a').tooltip({
placement: "left"
});
}
$('header a').tooltip({
placement: "bottom"
});
$('a,label,input').tooltip({});
</script>
<!--/tooltips--->
<!--Кнопка вверх--->
<script>
$(document).ready(function() {

$('body').append('<div class="button-up" style="display: none;opacity: 0.7;width: 70px;height:100%;position: fixed;left: 0px;top: 0px;cursor: pointer;text-align: center;line-height: 100px;color: #45688E;">^ Наверх</div>');

$ (window).scroll (function () {
if ($ (this).scrollTop () > 300) {
$ ('.button-up').fadeIn();
} else {
$ ('.button-up').fadeOut();
}
});

$('.button-up').click(function(){
$('body,html').animate({
scrollTop: 0
}, 100);
return false;
});

$('.button-up').hover(function() {
$(this).animate({
'opacity':'1',
}).css({'background-color':'#E1E7ED','color':'#45688E'});
}, function(){
$(this).animate({
'opacity':'0.7'
}).css({'background':'none','color':'#45688E'});;
});

});
</script><!--/Кнопка вверх--->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->



</body></html>