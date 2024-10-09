<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetPageProperty("tags", "Зеркала на заказ в Москве, зеркало купить, большой выбор зеркал в магазине");
$APPLICATION->SetPageProperty("description", "Изготовление зеркала за 1 день! в Москве любой сложности на Нагорной, 17. Крупнейший производитель зеркал! Витраж, состаренные, разноцветные, багет, купить готовое зеркало, по индивидуальным размерам");
$APPLICATION->SetPageProperty("title", " Зеркала на заказ, купить готовые в Москве - изготовление зеркал по индивидуальным размерам на Нагорной 17");
$APPLICATION->SetTitle("Зеркала на заказ в Москве - изготовление по размерам зеркал, и купить зеркала на Нагорной 17");
?>
<style>
@media (max-width: 1391px) {
.banner__tx {
    padding-top: 30px;
    font-size: 20px;
    text-align: center;
    padding-left: 0px !important;
    padding-right: 0px !important;

}
@media (max-width: 991px) {
    .banner_main .banner__bottom {
        padding-top: 10px !important;
    }
}    
}
</style>
    <section class="banner banner_main">
        <div class="banner__video">
            <video id="videoMain" loop="" autoplay="autoplay" playsinline="" poster="/local/templates/zerkala/assets/img/layout/bg3.jpg" muted="muted" style="height: 100%">
                <source id="videoMainSource" src="<?= CFile::GetPath($GLOBALS["VIDEOS"]["MAIN_VIDEO_OPT"]) ?>"
                        type="video/mp4">
                <source id="videoMainSource" src="<?= CFile::GetPath($GLOBALS["VIDEOS"]["MAIN_VIDEO_WEBM"]) ?>"
                        type='video/webm; codecs="vp8, vorbis"'>
            </video>
        </div>
        <div class="container">
            <div class="banner__inner">
                <div class="banner__main">
                    <div class="banner__ab">
                        <a href="/" class="banner__logo">
                            <img src="/local/templates/zerkala/assets/img/svg/logo.svg" alt="">
                        </a> 
<!--                        <div class="banner__address" onclick="scrollToTarget()"> -->
                        <a class="banner__address" href="#map">
                            <img src="/local/templates/zerkala/assets/img/svg/ic-mp.svg" alt="">
                            <span><?= $GLOBALS["CONTACTS"]["ADDRESS"] ?></span>
                        </a>
                        <h1 style="line-height: 1.4;" class="banner__tx">ПРОИЗВОДСТВО ИЗДЕЛИЙ ИЗ ЗЕРКАЛ С 1961 ГОДА</h1>
<!--                        <div class="banner__tx" style="
    background-color: #344e8c82;
    border-left-width: 100px;
    padding-left: 100px;
    padding-right: 100px;
"> Дорогие клиенты! Вследствие технического сбоя в настоящее время не работает телефония (входящие и исходящие вызовы), <br>а также невозможна отправка форм обратной связи с сайта.  <br>В данный момент мы работаем над восстановлением работоспособности наших сервисов. Благодарим за понимание.</div>
                    </div> -->
                </div>
                <div class="banner__bottom">
                    <div class="banner__timer">
                        <div class="timer__title">Работаем без&nbsp;гарантийных обращений:</div>
                        <div id="timer" class="timer">
                            <div id="years" class="it">6<span>лет</span></div>
                            <div class="tm">
                                <div id="days">20<span>дней</span></div>
                                <div id="hours">16<span>часов</span></div>
                                <div id="minutes">09<span>минут</span></div>
                            </div>
                        </div>
                    </div>
<style>
@media (max-width: 1601px) {
    .banner__btn {
    left: 0px !important;
    }
.banner__timer {
    display: flex;
    position: relative;
    margin-bottom: 30px;
}
.timer__title {
margin-right: 111px;
}

}
@media (max-width: 991px) {
.abt__tx {
margin-top: 20px !important;
}
.banner__timer {
    display: none !important;
}
.bnr__slider-title {
    display: none !important;

}
.bnr__slider-title2 {
    display: block !important;

}
.bnr__slider-l .bt {
    display: none !important;

}

.bnr__slider-tt2 {
    display: block !important;

}
.bnr__slider-tt {
    display: none !important;

}
.bnr__slider-r {
    min-width: 100% !important;
}
}


.banner__btn  {
    position: relative;
    left: -220px;
    }
.bnr__slider-title2 {
    display: none;

}
.bnr__slider-title2 {
    font-size: 35px;


}
.bnr__slider-tt2 {
    display: none;

}
.bnr__slider-r {
    min-width: 575px;
    
}
</style>
                    <div class="banner__btn">
                        <a href="/zerkala-na-zakaz/" class="bt bt-wh bt-bgg" style="padding: 15px 40px;">ЗЕРКАЛА НА ЗАКАЗ</a>
                        <a href="#zprsPrice_callback"  class="open-modal bt bt-blue bt-bgg" style="padding: 15px 44px;min-width: 220px;">ЗАКАЗАТЬ ЗВОНОК</a>
                        <a href="#ordPrice" class="open-modal bt bt-wh bt-bgg" style="padding: 15px 40px;min-width: 220px;">ЗАЯВКА НА РАСЧЁТ</a>
                         <a href="tel:+7 (495) 797-53-73" class="banner__btn_tel_glav">+7 (495) 797-53-73</a>
                        <a href="mailto:zerkala@1mzf.ru" class="banner__btn_tel_glav">zerkala@1mzf.ru</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bnr">
        <div class="container">
            <div class="bnr__inner">
                <div class="bnr__slider js-bnr-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
<a href="/sale/" class="" title="">
                           <div class="bnr__slider-item">
                                <div class="bnr__slider-bg">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/layout/bn-bg.jpg" alt="">
                                </div>
                                <div class="bnr__slider-l" style="left: 13px;">
                                    <div class="bnr__slider-title"><p style="margin-left: -60px;font-size: 48px;text-transform: none;" class="bnr__slider-title-p">Товар недели! </p></div>
                                    <div class="bnr__slider-title2"><p style="margin-left: -60px;font-size: 34px;text-transform: none;" class="bnr__slider-title-p"><b>Товар недели! </b></p></div>
                                    <div class="bnr__slider-title"><p style="padding-top: 24px;font-size: 34px;position: fixed;margin-top: 0px;"><b>до</b></p> <p style="padding-left: 80px;margin-top: 0px;">-60%!</p></div>
                                    <div class="bnr__slider-title2"><p style="font-size: 40px;margin-top: 0px;"><b>до -60%!</b></p></div>
                                    <div class="bnr__slider-tt" style="font-size: 40px;margin-top: 40px;"><b id="bglavsale">Всего 20 зеркал <br>со скидками</b></div>
                                    <div class="bnr__slider-tt2" style="font-size: 34px;margin-top: 0px;"><b id="bglavsale">Всего 20 зеркал <br>со скидками</b></div>
                                    <!-- <div class="bnr__slider-   tx"></div> -->
                                    <div href="/sale/" class="open-modal bt bt-bord-wh bt-bgg bt-fs">ПОДРОБНЕЕ</div> 
                                </div>
                                <div class="bnr__slider-r">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/bnr-img.jpg" alt="">
                                </div>
                            </div>
</a>
                        </div>
                    </div>

                    <!--<div class="swiper-button-prev js-bnr-slider-prev"></div>
                    <div class="swiper-button-next js-bnr-slider-next"></div>
                    <div class="swiper-pagination js-bnr-slider-pagination"></div>-->
                </div>
            </div>
        </div>
    </section>
<? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main_stars", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "Content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "24",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "VIDEO",
			1 => "VIDEO_YT",
			2 => "JOB",
			3 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ID",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "main_stars"
	),
	false
); ?>
    <section class="clnt">
        <div class="container">
            <div class="title-main">
                <h2>КЛИЕНТЫ И ПРОЕКТЫ</h2>
            </div>
            <div class="clnt__inner">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "main_clients",
                    array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "N",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "N",
                        "DISPLAY_PREVIEW_TEXT" => "N",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array("NAME", "PREVIEW_PICTURE", ""),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "4",
                        "IBLOCK_TYPE" => "Content",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "N",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "12",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Новости",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array("", "JOB", ""),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "ID",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "ASC",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N"
                    )
                ); ?>

                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "main_projects",
                    array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "N",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "N",
                        "DISPLAY_PREVIEW_TEXT" => "N",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "DATE_CREATE", ""),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "37",
                        "IBLOCK_TYPE" => "Content",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "N",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "16",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Новости",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array("RATE", ""),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "ID",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "ASC",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N"
                    )
                ); ?>
            </div>
        </div>
    </section>
    <section class="abt">
        <div class="container">
            <div class="abt__inner">
                <div class="abt__i">
                    <div class="abt__l">
                        <h2>О КОМПАНИИ</h2>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/layout/abt-img1.jpg" alt="">
                    </div>
                    <div class="abt__r">
                        <img alt="Зеркала на заказ в москве" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/layout/abt-img2.jpg" alt="">
                        <img title="Огромный выбор зеркал в Москве. На рынке уже 60 лет" alt="Огромный выбор зеркал в Москве" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/layout/abt-img3.jpg" alt="">
                    </div>
                </div>

                <div class="abt__all">
                    <div class="abt__list">
                        <div class="abt__list-item">
                            <div class="abt__list-title">На рынке уже</div>
                            <div class="abt__list-tx">60 лет</div>
                        </div>
                        <div class="abt__list-item">
                            <div class="abt__list-title">Площадь фабрики</div>
                            <div class="abt__list-tx">10 000 м²</div>
                        </div>
                    </div>

                    <h4 class="abt__tx" style="font-weight: 400;margin-top: 0px;">
                        Наш завод является крупнейшим производителем в центральной России. Большой парк технологического
                        оборудования располагается на площади более 10.000 кв. м. Большой опыт и профессионализм
                        сотрудников позволяют качественно выполнять заказы любого уровня сложности.
                    </h4>
                </div>


            </div>
        </div>
    </section>
    <section class="rev">
        <div class="container">
            <div class="title-main">
                <h2>Отзывы</h2>
                <a href="/reviews/" class="bt bt-bl bt-bgg">ВСЕ ОТЗЫВЫ</a>
            </div>
            <div class="rev__inner">
                <div class="rev__slider js-rev-slider">
                    <? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main_reviews", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "DATE_CREATE",
			3 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "8",
		"IBLOCK_TYPE" => "Content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "2",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "RATE",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "",
		"SORT_BY2" => "TIMESTAMP_X",
		"SORT_ORDER1" => $_REQUEST["SORT_ORDER"]?$_REQUEST["SORT_ORDER"]:"DESC",
		"SORT_ORDER2" => "DESC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "main_reviews"
	),
	false
); ?>
<!--                    <div class="swiper-button-prev js-rev-slider-prev"></div>
                    <div class="swiper-button-next js-rev-slider-next"></div>
                    <div class="swiper-pagination js-rev-slider-pagination"></div> -->
                </div>
            </div>
        </div>
    </section>
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "main_news",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "N",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", ""),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "6",
        "IBLOCK_TYPE" => "Content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "12",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("DATE", "LINK", "", ""),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "ID",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
); ?>
    <section class="mp mt-0">
        <div id="map" name="map" class="mp__map"></div>

        <div class="mp__tx">
            <div class="mp__tx-title">Контакты</div>
            <a href="tel:<?= $GLOBALS["CONTACTS"]["PHONE"] ?>"
               class="mp__tx-tel"><?= $GLOBALS["CONTACTS"]["PHONE"] ?></a>
            <a href="mailto:<?= $GLOBALS["CONTACTS"]["MAIL"] ?>" class="mp__tx-mail"><?= $GLOBALS["CONTACTS"]["MAIL"] ?></a>
            <div class="mp__tx-adrs"><?= $GLOBALS["CONTACTS"]["ADDRESS_FULL"] ?></div>

            <div class="mp__tx-soc" id="target-section">
                <?php foreach ($GLOBALS["CONTACTS"]["SOC"]["VALUE"] as $key => $value): ?>
                    <a href="<?= $GLOBALS["CONTACTS"]["SOC"]["DESCRIPTION"][$key] ?>">
                        <img src="<?= CFile::GetPath($value) ?>" alt="soc">
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "main_activity",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "N",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("NAME", "PREVIEW_PICTURE", ""),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "7",
        "IBLOCK_TYPE" => "Content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "7",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("", "", "", ""),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "ID",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
); ?>
<? $APPLICATION->IncludeComponent(
    "form:feedback",
    "main_question",
    array(
        "IBLOCK_ID" => "9",
        "IBLOCK_TYPE" => "Forms",
        "MAIL_EVENT" => array("MAIN_QUESTION_GLAV"),
        "TOKEN" => "main_question"
    )
); ?>
<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>