<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!DOCTYPE html>
<html xml:lang="ru" lang="ru">
<head>
<meta name="theme-color" content="#051a47" />
<meta name="yandex-verification" content="f24f50fa3fd3f32b">
<?$APPLICATION->ShowLink("canonical", null, true);?>

<?php use \Bitrix\Main\Page\Asset;

    Asset::getInstance()->addcss(SITE_TEMPLATE_PATH . "/assets/lib/swiper/swiper-bundle.min.css");
    Asset::getInstance()->addcss(SITE_TEMPLATE_PATH . "/assets/lib/fancybox/jquery.fancybox.min.css");
    Asset::getInstance()->addcss(SITE_TEMPLATE_PATH . "/assets/lib/select2/select2.min.css");
    Asset::getInstance()->addcss(SITE_TEMPLATE_PATH . "/assets/css/style.css?v=1.0.0a");
    Asset::getInstance()->addcss(SITE_TEMPLATE_PATH . "/assets/css/external.css?v=1.0.0a");

    Asset::getInstance()->addJs("https://api-maps.yandex.ru/2.1/?apikey=a100bdc8-0123-487c-a784-3b11a0f1c7b2&lang=ru_RU");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/lib/jquery-3.5.1.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/lib/swiper/swiper-bundle.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/lib/jquery.maskedinput.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/lib/fancybox/jquery.fancybox.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/lib/select2/select2.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/lib/svgxuse.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/main.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/form.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/track_utm.js");

    Asset::getInstance()->addString("<link rel='shortcut icon' href='/favicon.ico' type='image/x-icon'>");
    Asset::getInstance()->addString("<link rel='icon' href='/logo120.svg' type='image/svg+xml'>");
    Asset::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1.0'>");
    Asset::getInstance()->addString("<meta charset='UTF-8'>");
    Asset::getInstance()->addString("<meta http-equiv='X-UA-Compatible' content='ie=edge'>");
    ?>
<!--    <link rel="icon" href="/favicon.ico">
    <link rel="shortcut icon" href="https://zerkala.ru/favicon.ico" type="image/x-icon" /> -->
    <? $APPLICATION->ShowHead(); ?>
    <? if (isset($_REQUEST['utm_source']) || isset($_REQUEST['utm_campaign'])){
    unset($_SESSION['utm']);
    $_SESSION['utm']['utm_source'] = $_REQUEST['utm_source'];
    $_SESSION['utm']['utm_campaign'] = $_REQUEST['utm_campaign'];
    $_SESSION['utm']['utm_medium'] = $_REQUEST['utm_medium'];
    $_SESSION['utm']['utm_term'] = $_REQUEST['utm_term'];
    $_SESSION['utm']['utm_content'] = $_REQUEST['utm_content'];
};
 ?>
    <title><?= $APPLICATION->ShowTitle(); ?>, купить в Москве Нагорная 17 изготовление зеркал по размерам</title>
    <?php
    $white = false;
    if ($APPLICATION->GetCurDir() == "/reviews/" ||
        $APPLICATION->GetCurDir() == "/contacts/" ||
        $APPLICATION->GetCurDir() == "/pravovaya-informatsiya/" ||
        $APPLICATION->GetCurDir() == "/publichnaya-oferta/" ||
        $APPLICATION->GetCurDir() == "/publichnaya-oferta/" ||
        $APPLICATION->GetCurDir() == "/info/instalation/" ||
        $APPLICATION->GetCurDir() == "/lk-design/" ||
        $APPLICATION->GetCurDir() == "/zhks/eniteo/"

    ) $white = true;
    $tw = false;
    if ($APPLICATION->GetCurDir() == "/about/" ||
        $APPLICATION->GetCurDir() == "/info/" ||
        $APPLICATION->GetCurDir() == "/sale/" ||
        $APPLICATION->GetCurDir() == "/career/" ||
        $APPLICATION->GetCurDir() == "/guarantee/" ||
        $APPLICATION->GetCurDir() == "/production/" ||
        $APPLICATION->GetCurDir() == "/products/" ||
        $APPLICATION->GetCurDir() == "/zerkala-na-zakaz/" ||
    $APPLICATION->GetCurDir() == "/lk-design/"
    ) $tw = true;
    $jsScrlSec = false;
    if ($APPLICATION->GetCurDir() == "/about/" ||
        $APPLICATION->GetCurDir() == "/production/" ||
        $APPLICATION->GetCurDir() == "/career/"
    ) $jsScrlSec = true;
    ?>
<script type="text/javascript" async src="https://app.comagic.ru/static/cs.min.js?k=84WiicwiKAGt347GF5HEkE9RP2HfyS7q"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(23290744, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        ecommerce:"dataLayer"
   });
</script>
<!-- /Yandex.Metrika counter -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-99BJRQ9SNB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-99BJRQ9SNB');
</script>
</head>
<? $APPLICATION->ShowPanel(); ?>
<body>
<noscript><div><img src="https://mc.yandex.ru/watch/23290744" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

<div class="header-mob header-mob-wh <?= $jsScrlSec ? "js-scrl" : "js-scrl" ?>">
    <div class="container">
        <div class="header-mob__inner">
            <a href="/" class="header-mob__logo">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/logo.svg" alt="Мастерская зеркал в Москве">
            </a>
            <div class="header-mob__r">
                <a href="#ordPrice" class="open-modal header-mob__link"> <img
                            src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/calc.svg" alt="зеркаа в размер"></a>
                <a href="tel:<?= $GLOBALS["CONTACTS"]["PHONE"] ?>" class="header-mob__link ic1"> <img
                            src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/ic-hd1.svg" alt="зеркала заказать"></a>
                <div class="header-mob-drop">
                	<a href="javascript:void(0)" class="header-mob__link ic2">
                		<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/ic-hd2.svg" alt="зеркало кабинет">
                	</a>
                	<div class="header__drop-main header__drop-mob">
                        <a href="http://mzf-zakaz.ru/" class="bt bt-bord-wh open-modal">ЛИЧНЫЙ КАБИНЕТ КЛИЕНТА</a>
                        <a href="https://steklo17.ru/user-account/" class="bt bt-bord-wh">ЛИЧНЫЙ КАБИНЕТ ДИЗАЙНЕРА</a> 
                    </div>
                </div>
                <a href="#" class="header-mob__toggle js-toggl">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </div>
    </div>
</div>
<header class="header<?= $white ? " header-wh" : "" ?> header_tw">
    <div class="container-w">
        <div class="header__inner">
            <div class="header__address">
                    <?php if ($APPLICATION->GetCurDir() != "/"): ?>
                <a href="/" class="header__logo">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/logo.svg" alt="Мастерская зеркал">
                </a>
                    <?php endif; ?>
                <?php if ($APPLICATION->GetCurDir() != "/"): ?>
                    <span><?= explode(".", $GLOBALS["CONTACTS"]["ADDRESS"])[2] ?></span>
                <?php endif; ?>
            </div>

            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "main",
                array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "N",
                    "COMPONENT_TEMPLATE" => "main"
                ),
                false
            ); ?>
            <div class="header__right">
            <div class="header__contact">
                <a href="tel:+74957975373"
                   class="header__tel">+7 (495) 797-53-73</a>
                   <a href="mailto:zerkala@1mzf.ru" class="header__mail">zerkala@1mzf.ru</a>
            </div>
                <div class="header__btn">
<!--                    <a href="#ordPrice2" class="open-modal bt bt-bord-bl">КАЛЬКУЛЯТОР</a> -->
                    <a href="#zprsPrice_callback" class="open-modal bt bt-bord-bl">ЗАКАЗАТЬ ЗВОНОК</a>
                    <div class="header__drop">
                        <div class="header__drop-title">Личный кабинет</div>
                        <div class="header__drop-main">
                            <a href="http://mzf-zakaz.ru/" class="bt bt-bord-wh open-modal">ЛИЧНЫЙ КАБИНЕТ КЛИЕНТА</a>
                            <a href="https://steklo17.ru/user-account/" class="bt bt-bord-wh">ЛИЧНЫЙ КАБИНЕТ ДИЗАЙНЕРА</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


