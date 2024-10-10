<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "О компании, изготовление по размерам. Г. МОСКВА, УЛ.НАГОРНАЯ, ДОМ 17 КОРПУС 1");
$APPLICATION->SetPageProperty("title", "о компании");
$APPLICATION->SetTitle("Зеркала на заказ в Москве - изготовление по размерам, купить на Нагорной 17");
?>
<style>
	h4 {
    font-weight: 400;
}
	@media (max-width: 1280px) {
	h3 {
font-size: 16px !important;;
        margin-top: 13px;

}
}
</style>
    <section class="banner banner_tw">
        <div class="banner__video">
            <video id="videoMain" loop="" autoplay="autoplay" playsinline="" muted="muted" poster="">
                <source id="videoMainSource" src="<?= CFile::GetPath($GLOBALS["VIDEOS"]["ABOUT"]) ?>" type="video/mp4">
            </video>
        </div>
        <div class="container">
            <div class="banner__inner">
                <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "main", Array(
                    "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                    "SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                    "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
                ),
                    false
                );?>
                <div class="banner__vd">
                    <div class="banner__vd-l tw">

                            <h1><?= $APPLICATION->ShowTitle() ?></h1>
                            <div class="banner__tx">Более 60 лет лидеры&nbsp;производству стекла и&nbsp;зеркал</div>

                        <div class="banner__vd-btn">
                            <a href="#zprsPrice_callback" class="open-modal bt bt-blue bt-bgg">ЗАКАЗАТЬ ЗВОНОК</a>
                            <a href="#ordPrice" class="open-modal bt bt-wh bt-bgg">ЗАЯВКА НА РАСЧЁТ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-list">
            <div class="container">
                <div class="banner-list__inner">
                    <a href="#ab" class="banner-list__link">О&nbsp;компании</a>
                    <a href="#contrl" class="banner-list__link">Контроль и&nbsp;процесс</a>
                    <a href="#ex" class="banner-list__link">Экскурсия</a>
                    <a href="#vcns" class="banner-list__link">Вакансии</a>
                    <a href="#lft" class="banner-list__link">Лифтовая программа</a>
                    <a href="#rev" class="banner-list__link">Отзывы</a>
                </div>
            </div>
        </div>
    </section>
    <section class="abt-all" id="ab">
        <div class="container">
            <div class="title-main">
                <h2>О компании</h2>
            </div>
            <div class="abt-all__inner">
                <div class="abt-all__row">
                    <div class="abt-all__cell">
                        <div class="abt-all__item">
                            <div class="abt-all__item-img">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/layout/abt-img4.png" alt=""
                                     style="height: 50%; object-fit: cover">
                            </div>
                            <h3 class="abt-all__item-tx" style="font-weight: 400;text-transform: math-auto;font-size: 20px;">
                                МОСКОВСКАЯ ЗЕРКАЛЬНАЯ ФАБРИКА основана в 1961 г. Более шестидесяти лет фабрика считается лидером по производству разной продукции, изготовленной из стекла и зеркал.
                            </h3>
                        </div>
                    </div>
                    <div class="abt-all__cell">
                        <div class="abt-all__item">
                            <div class="abt-all__item-img">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/layout/abt-img5.jpg" alt="" style="height: 50%; object-fit: cover">
                            </div>
                            <h3 class="abt-all__item-tx" style="font-weight: 400;text-transform: math-auto;font-size: 20px;">
                                На сегодняшний день компания владеет всеми видами технологий по изготовлению зеркал, продукции из зеркального и стеклянного полотна.
                            </h3>
                        </div>
                    </div>
                    <div class="abt-all__cell">
                        <div class="abt-all__item">
                            <div class="abt-all__item-img">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/layout/abt-img6.jpg" alt="">
                            </div>
                            <h3 class="abt-all__item-tx" style="font-weight: 400;text-transform: math-auto;font-size: 20px;">
                                МОСКОВСКАЯ ЗЕРКАЛЬНАЯ ФАБРИКА отслеживает все инновации в зеркально-стекольном секторе, и предлагает своим потребителям самую современную и качественную продукцию.							</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<div class="container d-flex new-btns">
    <div class="title-main">
    <h2 style="font-size: larger;margin-right: 4px;">НАШЕ ПРОИЗВОДСТВО</h2>
    </div>
    <a href="/production/" class="bt bt-bl bt-bgg bt-fs">ПОДРОБНЕЕ</a>
</div>

    <section class="abt-sh" id="contrl">
        <div class="abt-sh__bg">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/layout/sh-bg.jpg" alt="">
        </div>
        <div class="container">
            <div class="abt-sh__inner">
                <div class="abt-sh__row">
                    <div class="abt-sh__cell">
                        <div class="abt-sh__item">
                            <div class="abt-sh__item-icon">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/ic-sh1.svg" alt="">
                            </div>
                            <div class="abt-sh__item-title">Система многоуровнего контроля</div>
                            <div class="abt-sh__item-tx">Отслеживает, чтобы качество выпускаемой продукции соответствовало всем международным и европейским стандартам.</div>
                        </div>
                    </div>
                    <div class="abt-sh__cell">
                        <div class="abt-sh__item">
                            <div class="abt-sh__item-icon">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/ic-sh2.svg" alt="">
                            </div>
                            <div class="abt-sh__item-title">Компьютеризированный процесс</div>
                            <div class="abt-sh__item-tx">От оформления заказа до его выдачи точно отслеживается весь производственный цикл и сокращается время изготовления любых даже самых сложных и нестандартных заказов на изготовление зеркал на заказ.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="abt-ex" id="ex">
        <div class="container">
            <div class="title-main">
                <h2>Экскурсия по фабрике</h2>
            </div>
            <div class="abt-ex__inner">
                <div class="abt-ex__pnr">
<!--                    <iframe allowfullscreen="true" src="https://momento360.com/e/u/a9b53aa8f8b0403ba7a4e18243aabc66"></iframe>-->
                    <iframe width="1150" height="550" src="/mzf-chehov/"></iframe>

                </div>

                <div class="abt-ex__bt">
                    <div class="abt-ex__bt-l">
                        <div class="abt-ex__title">
                            3D тур по производству
                        </div>
                        <div class="abt-ex__tx">Чтобы перейти в полноэкранный режим нажмите на экране иконку 	<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/ic-size.svg" alt=""></div>
                        <div class="abt-ex__tx">Для просмотра помещений 	<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/ic-pom.svg" alt=""></div>
                    </div>

                    <div class="abt-ex__bt-r">
                        <p>Полотно проходит цикл испытаний на соответствие размерам с помощью микрометра и иных измерительных приборов. Осуществляется визуальная проверка внешнего вида изделия при установленных в ТУ параметрах освещения. Готовая продукция упаковывается в бумагу, гофрокартон или деревянные ящики для последующей доставки.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="abt-ex">
        <div class="container">
            <div class="title-main">
                <h2>Экскурсия по выставочному залу</h2>
            </div>
            <div class="abt-ex__inner">
                <div class="abt-ex__pnr">
<!--                    <iframe allowfullscreen="true" src="https://momento360.com/e/u/a9b53aa8f8b0403ba7a4e18243aabc66"></iframe>-->
                    <iframe width="1150" height="550" src="/virtual_tour/"></iframe>

                </div>

                <div class="abt-ex__bt tw">
                    <div class="abt-ex__title">
                        3D тур по производству
                    </div>
                    <div class="abt-ex__tx">Чтобы перейти в полноэкранный режим нажмите на экране иконку 	<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/ic-size.svg" alt=""></div>
                    <div class="abt-ex__tx">Для просмотра помещений 	<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/ic-pom.svg" alt=""></div>
                </div>
            </div>
        </div>
    </section>
    <section class="abt-vc" id="vcns">
        <div class="abt-vc__bg">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/vc-img1.png" alt="">
        </div>
        <div class="container">
            <div class="abt-vc__inner">
                <div class="abt-vc__l">
                    <h2>вАКАНСИИ</h2>
                    <p>Регулярно публикуем вакансии для соискателей, желающих работать и развиваться в рамках надёжной и прогрессивной компании:</p>
                    <a href="/career/" class="bt bt-bord-bl bt-bgg bt-fs">КАРЬЕРНЫЕ ВОЗМОЖНОСТИ</a>

                    <div class="abt-vc__img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/vc-img1.png" alt="bannner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="abt-lft" id="lft">
        <div class="container">
            <div class="abt-lft__inner">
                <div class="abt-lft__cell">
                    <h2>
                        Лифтовая программа
                    </h2>
                    <div class="abt-lft__item">
                        <h4 class="abt-lft__tt">Заполните заявку на изготовление</h4>
                        <h4 class="abt-lft__tx">Предлагаем приобрести в Московской Зеркальной Фабрике зеркала в холл, вестибюль, подъезд, а так же в лифты жилых домов. Предложение действует для объектов в Москве и Московской области. Наша компания готова изготовить, доставить и установить зеркала по вашему заказу.</h4>
                        <h4 class="abt-lft__it">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/ic-it1.svg" alt="">
                            Изготавливаем по стандарту и для индивидуальных проектов
                        </h4>
                        <h4 class="abt-lft__it">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/ic-it2.svg" alt="">
                            Для управляющих компаний, физических лиц и жителей домов.
                        </h4>
                        <a href="#ordPrice3" class="bt bt-bl bt-bgg bt-fs open-modal">ЗАПРОС СТОИМОСТИ</a>
                    </div>
                </div>

                <div class="abt-lft__img">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/layout/lft-img1.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="abt-lft">
        <div class="container">
            <div class="title-main">
                <h2>эксклюзивный дизайн зеркал</h2>
            </div>
            <div class="abt-lft__inner">
                <div class="abt-lft__img">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/layout/lft-img2.jpg" alt="">
                </div>
                <div class="abt-lft__cell">
                    <div class="abt-lft__item">
                        <div class="abt-lft__tx">У вас есть полная свобода выбора: размер, форма, стиль оправы, покрытие — все зависит от ваших предпочтений и потребностей. Наша команда опытных мастеров с радостью поможет вам воплотить идеи, которые идеально подойдут под вашу комнату или офис. </div>

                        <a href="/zerkala-na-zakaz/" class="bt bt-bl bt-bgg bt-fs">ЗЕРКАЛА НА ЗАКАЗ</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="abt-orv">
        <div class="abt-orv__bg">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/layout/orv-img.jpg" alt="">
        </div>
        <div class="container">
            <div class="abt-orv__inner">
                <div class="abt-orv__tx">
                    <h2>оБРАЩЕНИЕ к АДМИНИСТРАЦИИ</h2>
                    <p>Предоставляем возможность обратиться напрямую к администрации завода. Данный сервис предназначен для решения оперативных вопросов и предложений.</p>

                    <div class="abt-orv__bt">
                        <a href="#formAmnstr" class="open-modal bt bt-bord-bl bt-bgg bt-fs">ЗАПОЛНИТЬ ФОРМУ</a>
                        <div class="abt-orv__info">
                            <div class="abt-orv__info-item">
                                <a href="tel:<?= $GLOBALS["CONTACTS"]["PHONE"] ?>" class="abt-orv__info-link"><?= $GLOBALS["CONTACTS"]["PHONE"] ?></a>
                                <div class="abt-orv__info-t"><?= $GLOBALS["CONTACTS"]["WORK_TIME"] ?></div>
                            </div>
                            <div class="abt-orv__info-item">
                                <a href="mailto:<?= $GLOBALS["CONTACTS"]["MAIL"] ?>" class="abt-orv__info-link"><?= $GLOBALS["CONTACTS"]["MAIL"] ?></a>
                                <div class="abt-orv__info-t"><?= $GLOBALS["CONTACTS"]["ADDRESS"] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="rev" id="rev">
        <div class="container">
            <div class="title-main">
                <h2>Отзывы</h2>
            </div>
            <div class="rev__all">
                <h4 class="rev__all-tx">Вы можете ознакомиться с комментариями наших клиентов и оставить собственный отзыв о приобретённой продукции.</h4>
                <div class="rev__all-btn">
                    <div class="rev__all-btn-item">
                        <a href="#reviewsP" class="open-modal bt bt-bord-bl bt-fs bt-bgg">НАПИСАТЬ ОТЗЫВ</a>
                    </div>
                    <div class="rev__all-btn-item">
                        <a href="/reviews/" class="bt bt-bl bt-fs bt-bgg">ВСЕ ОТЗЫВЫ</a>
                    </div>
                </div>
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
                            "IBLOCK_ID" => "8",
                            "IBLOCK_TYPE" => "Content",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "N",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "5",
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
                    <div class="swiper-button-prev js-rev-slider-prev"></div>
                    <div class="swiper-button-next js-rev-slider-next"></div>
                    <div class="swiper-pagination js-rev-slider-pagination"></div>
                </div>
            </div>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>