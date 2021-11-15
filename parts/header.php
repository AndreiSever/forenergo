<?php
$modeMoscow = 0;
/**
 *   @var $DOCUMENT_ROOT
 **/
//define('__ROOT__', dirname(dirname(__FILE__)));
//echo __ROOT__;
//define('__ROOT__', dirname(dirname(__FILE__)));
require_once $_SERVER['DOCUMENT_ROOT'].'/sxGeo/Helper.php';
//require_once($DOCUMENT_ROOT."/sxGeo/Helper.php");
?>
<!DOCTYPE html>
<html>

<head lang="ru">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.png" type="image/png">

    <!--<link href="/css/flexboxgrid.min.css" rel="stylesheet"> -->

    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <link href="/css/styles.css" rel="stylesheet">
    <link href="https://unpkg.com/swiper@7/swiper-bundle.min.css" rel="stylesheet">
    <link href="/js/fancybox/jquery.fancybox.min.css" rel="stylesheet">


    <title><?=$title?></title>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-W6BGXDT');</script>
    <!-- End Google Tag Manager -->
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6BGXDT"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="gen-header">
        <div class="header-top-top">
            <div class="container wrp-mobil-menu">
                <div class="menu-icon-mobile"></div>
                <nav class="header-menu-right">
                     <a href="/opn-6.php/#date">ОПН 6 кВ</a>
                    <a href="/opn-10.php#date">ОПН 10 кВ</a>
                    <a href="/opn-20.php#date">ОПН 20 кВ</a>
                    <a href="/opn-35.php#date">ОПН 35 кВ</a>
                </nav>
                <a class="header-logo" href="/"><img src="/img/logo-e21-head.png" alt="Логотип" /></a>
                <div class="contacts-header">
                    <div class="header-phone">
                        <div><a href="tel:83512116010">+7(351)211-60-10</a></div>
                        <div><a href="tel:83512116020">+7(351)211-60-20</a></div>
                    </div>
                    <div class="header-email">
                        <a href="mailto:office@energy-21.ru">office@energy-21.ru</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container header-bann">
            <h1>ОГРАНИЧИТЕЛИ ПЕРЕНАПРЯЖЕНИЯ ОПН ПОЛИМЕРНЫЕ (ОПН-П)</h1>

            <div class="header-anons">
                Предлагаем ограничители перенапряжения типа ОПНП (полимерные) для электрических сетей напряжением 6 кВ, 10 кВ, 20 кВ и 35 кВ по ценам завода-изготовителя.  Продукция в наличии на складах завода и дилеров, а также под заказ – в зависимости от требуемых параметров. Ограничители перенапряжения аттестованы в ПАО «Россети».
            </div>
        </div>
    </header>
    <div class="general-content container">
