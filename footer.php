<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
$margin = true;
if ($APPLICATION->GetCurDir() == "/" ||
    $APPLICATION->GetCurDir() == "/reviews/" ||
    $APPLICATION->GetCurDir() == "/zerkala-na-zakaz/" ||
    $APPLICATION->GetCurDir() == "/production/" ||
    $APPLICATION->GetCurDir() == "/contacts/"
) $margin = false
?>
<?php include '/home/a0905998/domains/zerkala.ru/public_html/callback/callbackbtnwrap.php'?>
<aside class="aside">
<p id="aside_p1"><a href="tel:+74957975373" style="color: #435586; text-align: center;"><b>Остались вопросы? Звоните!</b></a></p>
<p id="aside_p2"><a href="tel:+74957975373" style="color: #435586; text-align: center; background-image: url(images/phone.svg);background-repeat: no-repeat;"><b>+7 (495) 797-53-73  </b></a></p>
</aside>
<aside class="aside_desc">
<p id="aside_p1_desc"><b><a href="#zprsPrice_niz" style="margin-top: 80px;top: 15px;font-size: larger;color: #ffffff !important;" class="open-modal">Остались вопросы? Закажите звонок!<img src="/call.gif" style="max-width: 30px;position: absolute;max-width: 34px;margin-right: 30px;margin-left: 13px;    margin-top: 4px;
"></a></b></p>
<!-- <p id="aside_p2_desc"><a href="tel:+74957975373" style="color: #435586; text-align: center; background-image: url(images/phone.svg);background-repeat: no-repeat;"><b>+7 (495) 797-53-73  </b></a></p> -->
</aside>
<footer class="footer" style="<?= $margin ? '' : 'margin-top: 0;' ?>">
    <div class="footer-top">
        <div class="container-w">
            <div class="footer-top__inner">
                <div class="footer-top__l">
                    <a href="#" class="footer__logo">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/logo.svg" alt="Мастерская зеркал в Москве">
                    </a>
                    <div class="footer__menu">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "bottom",
                            array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(""),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "N",
                                "ROOT_MENU_TYPE" => "bottom",
                                "USE_EXT" => "N",
                            )
                        ); ?>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "bottom",
                            array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(""),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "N",
                                "ROOT_MENU_TYPE" => "bottom2",
                                "USE_EXT" => "N",
                            )
                        ); ?>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "bottom",
                            array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(""),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "N",
                                "ROOT_MENU_TYPE" => "bottom3",
                                "USE_EXT" => "N",
                            )
                        ); ?>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "bottom",
                            array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(""),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "N",
                                "ROOT_MENU_TYPE" => "bottom4",
                                "USE_EXT" => "N",
                            )
                        ); ?>
                    </div>
                </div>
                <div class="footer-top__r">
                    <div class="footer-info" style="display: flex; flex-direction:column; justify-content: space-between;">
                    <div class="footer-address" style="font-weight: 700;">АДРЕС</div>

                    <div class="footer-address-text" style="font-size: 15px; margin-bottom: auto; margin-right: 20px; max-width: 270px"><?= $GLOBALS["CONTACTS"]["ADDRESS_FULL"] ?></div>

                        <div class="footer-time" style="font-weight: 700;"><?= $GLOBALS["CONTACTS"]["WORK_TIME"] ?></div>

                    </div>

                    <div class="footer__soc">
                        <div class="footer__soc-title">МЫ В СОЦ.СЕТЯХ</div>
                        <ul>
                            <?php $c = 1 ?>

                            <?php foreach ($GLOBALS["CONTACTS"]["SOC"]["VALUE"] as $key => $value): ?>
                                <?php switch ($c){
                                    case 1: $class = "on"; break;
                                    case 2: $class = "tw"; break;
                                    case 3: $class = "th"; break;
                                    case 4: $class = ""; break;
                                } ?>
                                <li class="footer__soc-<?= $class ?>"><a
                                            href="<?= $GLOBALS["CONTACTS"]["SOC"]["DESCRIPTION"][$key] ?>"><img
                                                src="<?= CFile::GetPath($value) ?>" alt=""></a>
                                </li>
                                <?php $c++ ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="footer__info">
                        <a href="tel:<?= $GLOBALS["CONTACTS"]["PHONE"] ?>"
                           class="footer__tel"><?= $GLOBALS["CONTACTS"]["PHONE"] ?></a>
                           <a href="mailto:zerkala@1mzf.ru" class="form-c__bt-link">zerkala@1mzf.ru</a>
                        <a href="#zprsPrice_callback" class="open-modal bt bt-bord-wh">ОБРАТНЫЙ ЗВОНОК</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container-w">
            <div class="footer-bottom__inner">
                <div class="footer-bottom__cell">
                    <p>Если вас не устраивает работа персонального менеджера обратитесь в службу поддержки клиентов |
                        Мы всегда на связи.</p>
                    <p>Обращаем ваше внимание на то, что данный интернет-сайт носит исключительно информационный
                        характер и ни при каких условиях не является публичной офертой, определяемой положениями Статьи
                        437 (2) Гражданского кодекса Российской Федерации. Для получения подробной информации о наличии
                        и стоимости указанных товаров и (или) услуг, пожалуйста, обращайтесь к менеджеру сайта с помощью
                        специальной формы связи или по телефону в Москве.</p>
                </div>
                <div class="footer-bottom__cell">
                    <p>1994–<?= date("Y") ?> ООО «МЗФ» Все права защищены</p>
                </div>
            </div>
        </div>
    </div>
</footer>
    <style>
.aside {
  display: none;
  position: sticky;
  bottom: 0px;
  width: 100%;
  background: #d3d3d3;
    left: 0;
    right: 0;
    margin: 0 auto;
}
.aside.sticky {
  display: none;
    height: 80px;
    background: #aaa;
    position: sticky;
  width: 100%;
  background: #ffffffe6;
  bottom: 0px;
    left: 0;
    right: 0;
    margin: 0 auto;
    z-index: 8;
}
.aside_desc {
  display: none;
  position: sticky;
  bottom: 0px;
  width: 100%;
  background: #344e8cd9;
    left: 0;
    right: 0;
    margin: 0 auto;
}
.aside_desc.sticky {
  display: block;
    height: 80px;
    position: sticky;
  width: 100%;
  background: #344e8cd9;
  bottom: 0px;
    left: 0;
    right: 0;
    margin: 0 auto;
    z-index: 8;
}
#aside_p1_desc {
  font-size: x-large;
  color: #ffffff !important;
  margin-bottom: 0rem;
  padding-top: 5px;
  text-align: center;
}
#aside_p2_desc {
  font-size: x-large;
  color: #ffffff !important;
  text-align: center;
  margin-top: 0px;
}

#aside_p1 {
    font-size: 21px;
  color: #435586;
  margin-bottom: 0rem;
  padding-top: 5px;
  text-align: center;
}
#aside_p2 {
    font-size: x-large;
  color: #435586;
  text-align: center;
  margin-top: 0px;
}
@media (max-width: 991px) {
.aside_desc {
  display: none;
    }
.aside_desc.sticky {
  display: none;
    }
}
@media (max-width: 991px) {
.aside {
  display: none;
    }
.aside.sticky {
  display: block;
    }
}
    </style>
<script>
"use strict";
$(document).ready(function() {
  function stickySidebar() {
   	var scrollDistance = $(document).scrollTop(),
        headerHeight = $('.header').outerHeight(true),
        sidebarHeight = $('.aside').outerHeight(true),
        footerOffsetTop = $('.footer').offset().top,
        $sidebar = $('.aside');

    if( scrollDistance >= headerHeight) {
      $sidebar.addClass('sticky');
    } else {
      $sidebar.removeClass('sticky');
    }
    
    if ( scrollDistance + sidebarHeight  >= footerOffsetTop) {
      $sidebar.removeClass('sticky');
    }

  }
  stickySidebar();
  $(document).scroll(function() {
    stickySidebar();
  });
});
$(document).ready(function() {
  function stickySidebar_desc() {
   	var scrollDistance = $(document).scrollTop(),
        headerHeight = $('.header').outerHeight(true),
        sidebarHeight = $('.aside_desc').outerHeight(true),
        footerOffsetTop = $('.footer').offset().top,
        $sidebar_desc = $('.aside_desc');
    
    if( scrollDistance >= headerHeight) {
      $sidebar_desc.addClass('sticky');
    } else {
      $sidebar_desc.removeClass('sticky');
    }
    
    if ( scrollDistance + sidebarHeight  >= footerOffsetTop) {
      $sidebar_desc.removeClass('sticky');
    }

  }
  stickySidebar_desc();
  $(document).scroll(function() {
    stickySidebar_desc();
  });
});
</script>
<div class="dialogs">
    <div class="close-bg">
    </div>
    <div class="flex">
        <? $APPLICATION->IncludeComponent(
	"form:feedback", 
	"popup_question12", 
	array(
		"IBLOCK_ID" => "59",
		"IBLOCK_TYPE" => "Forms",
		"MAIL_EVENT" => array(
			0 => "MAIN_QUESTION21",
		),
		"TOKEN" => "popup_question",
		"COMPONENT_TEMPLATE" => "popup_question12",
		"MAIL_TO" => "",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
); ?>

        <div class="popup" id="thanks">
            <div class="popup__close close">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/ic-close.svg" alt="">
            </div>

            <div class="popup__content">
                <div class="popup__title">
                    ВАША ЗАЯВКА ОТПРАВЛЕНА
                </div>
                <div class="popup__tx">Благодарим за обращение! Наш менеджер свяжется с вами в ближайшее время.</div>
            </div>
        </div>

        <? $APPLICATION->IncludeComponent(
	"form:feedback", 
	"modal_admin", 
	array(
		"IBLOCK_ID" => "51",
		"IBLOCK_TYPE" => "Forms",
		"MAIL_EVENT" => array(
			0 => "MODAL_ADMIN",
			1 => "MODAL_ADMIN_CLIENT",
		),
		"TOKEN" => "modal_admin",
		"COMPONENT_TEMPLATE" => "modal_admin",
		"MAIL_TO" => ""
	),
	false
); ?>
        <? $APPLICATION->IncludeComponent(
	"form:feedback", 
	"popup_question_niz", 
	array(
		"IBLOCK_ID" => "55",
		"IBLOCK_TYPE" => "Forms",
		"MAIL_EVENT" => array(
			0 => "MAIN_QUESTION_NIZ",
		),
		"TOKEN" => "popup_question_niz",
		"COMPONENT_TEMPLATE" => "popup_question_niz",
		"MAIL_TO" => "",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
); ?>
        <? $APPLICATION->IncludeComponent(
	"form:feedback", 
	"popup_top", 
	array(
		"IBLOCK_ID" => "60",
		"IBLOCK_TYPE" => "Forms",
		"MAIL_EVENT" => array(
			0 => "popup_top_TOP",
		),
		"TOKEN" => "popup_callback",
		"COMPONENT_TEMPLATE" => "popup_top",
		"MAIL_TO" => "",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
); ?>
        <? $APPLICATION->IncludeComponent(
	"form:feedback", 
	"popup_callback1", 
	array(
		"IBLOCK_ID" => "56",
		"IBLOCK_TYPE" => "Forms",
		"MAIL_EVENT" => array(
			0 => "MAIN_callback",
		),
		"TOKEN" => "popup_callback1",
		"COMPONENT_TEMPLATE" => "popup_callback1",
		"MAIL_TO" => "",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
); ?>

        <? $APPLICATION->IncludeComponent(
            "form:feedback",
            "popup_vac",
            array(
                "IBLOCK_ID" => "15",
                "IBLOCK_TYPE" => "Forms",
                "MAIL_EVENT" => array(
                    0 => "VAC",
                ),
                "TOKEN" => "VAC",
            ),
            false
        ); ?>
        <div class="popup w3" id="vacancies">
            <div class="popup__close close">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/ic-close.svg" alt="">
            </div>

            <div class="popup__content">
                <div class="popup__vacancies">
                    <div class="popup__vacancies-title">Оператор call-центра БЕЗ холодных звонков и поиска клиентов
                    </div>
                    <div class="popup__vacancies-city">г. Москва</div>

                    <div class="popup__vacancies-item">
                        <div class="popup__vacancies-title-min">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/ic-vc1.svg" alt="">
                            ОБЯЗАННОСТИ:
                        </div>
                        <ul id="resp">
                            <li>Прием входящих звонков;</li>
                            <li>Предоставление информации по продукции и услугам компании;</li>
                            <li>Оформление клиентов в базе данных.</li>
                        </ul>
                    </div>
                    <div class="popup__vacancies-item">
<!--                        <div class="popup__vacancies-title-min">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/ic-vc2.svg" alt="">
                            ТРЕБОВАНИЯ:
                        </div> -->
                        <ul id="req">
                            <li>Знание ПК на уровне пользователя;</li>
                            <li>Грамотная и четкая речь, хорошая дикция;</li>
                            <li>Внимательность, коммуникабельность, эмоциональная устойчивость;</li>
                            <li>Опыт работы от полугода (рассматриваем кандидатов без опыта работы).</li>
                        </ul>
                    </div>
                    <div class="popup__vacancies-item">
                        <div class="popup__vacancies-title-min">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/ic-vc2.svg" alt="">
                            УСЛОВИЯ:
                        </div>
                        <ul id="cond">
                            <li>Знание ПК на уровне пользователя;</li>
                            <li>Грамотная и четкая речь, хорошая дикция;</li>
                            <li>Внимательность, коммуникабельность, эмоциональная устойчивость;</li>
                            <li>Опыт работы от полугода (рассматриваем кандидатов без опыта работы).</li>
                        </ul>
                    </div>

                    <div class="popup__vacancies-btn">
                        <a href="#join" class="open-modal bt bt-bord-bl bt-fs bt-bgg">ОТПРАВИТЬ РЕЗЮМЕ</a>
                    </div>
                </div>
            </div>
        </div>

        <? $APPLICATION->IncludeComponent(
	"form:feedback", 
	"popup_review", 
	array(
		"IBLOCK_ID" => "8",
		"IBLOCK_TYPE" => "Content",
		"MAIL_EVENT" => array(
			0 => "REVIEW",
			1 => "REVIEW_CLIENT",
		),
		"TOKEN" => "popup_review",
		"COMPONENT_TEMPLATE" => "popup_review",
		"MAIL_TO" => ""
	),
	false
); ?>
        <div class="popup" id="thanks2">
            <div class="popup__close close">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/ic-close.svg" alt="">
            </div>

            <div class="popup__content">
                <div class="popup__title">
                    Ваша заявка принята!
                </div>
                <div class="popup__tx">
                    Наш менеджер свяжется с вами в кратчайшее время

                </div>
            </div>
        </div>


        <? $APPLICATION->IncludeComponent(
	"form:feedback", 
	"modal_product", 
	array(
		"IBLOCK_ID" => "52",
		"IBLOCK_TYPE" => "Forms",
		"MAIL_EVENT" => array(
			0 => "LEAD",
		),
		"TOKEN" => "modal_product",
		"COMPONENT_TEMPLATE" => "modal_product",
		"MAIL_TO" => ""
	),
	false
); ?>


        <? $APPLICATION->IncludeComponent(
	"form:feedback", 
	"popup_ordPrice", 
	array(
		"IBLOCK_ID" => "12",
		"IBLOCK_TYPE" => "Forms",
		"MAIL_EVENT" => array(
			0 => "ORDPRICE",
		),
		"TOKEN" => "popup_ordPrice",
		"COMPONENT_TEMPLATE" => "popup_ordPrice",
		"MAIL_TO" => ""
	),
	false
); ?>

        <? $APPLICATION->IncludeComponent(
	"form:feedback", 
	"calculator", 
	array(
		"IBLOCK_ID" => "53",
		"IBLOCK_TYPE" => "Forms",
		"MAIL_EVENT" => array(
			0 => "CALC",
		),
		"TOKEN" => "calculator",
		"COMPONENT_TEMPLATE" => "calculator",
		"MAIL_TO" => ""
	),
	false
); ?>

        <? $APPLICATION->IncludeComponent(
	"form:feedback", 
	"ask_price", 
	array(
		"IBLOCK_ID" => "54",
		"IBLOCK_TYPE" => "Forms",
		"MAIL_EVENT" => array(
			0 => "ASK_PRICE",
		),
		"TOKEN" => "ask_price",
		"COMPONENT_TEMPLATE" => "ask_price",
		"MAIL_TO" => ""
	),
	false
); ?>


    </div>

</div>
<!-- libs -->
<?$APPLICATION->IncludeComponent(
   "viardaru:cookie.utm",
   "",
   Array(
      "COMPOSITE_FRAME_MODE" => "A",
      "COMPOSITE_FRAME_TYPE" => "AUTO",
      "UTM_CAMPAIGN" => "utm_campaign",
      "UTM_CONTENT" => "utm_content",
      "UTM_MEDIUM" => "utm_medium",
      "UTM_SOURCE" => "utm_source",
      "UTM_TERM" => "utm_term"
   )
);?>


</body>
</html>