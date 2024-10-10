<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="nw">
    <div class="nw__bg">
        <img loading="lazy" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/layout/nw-bg.jpg" alt="Зеркало для дома">
    </div>
    <div class="container">
        <div class="title-main">
            <h2>НОВОСТИ</h2>
            <a href="<?= $GLOBALS["CONTACTS"]["DZEN"] ?>" class="bt bt-bord-wh bt-bgg" target="_blank">ВСЕ НОВОСТИ</a>
        </div>
        <div class="nw__inner">
            <div class="nw__dz">
				<a href="https://dzen.ru/mzf___17" target="_blank"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/layout/dz1.jpg" alt="Яндекс дзен зеркала"></a>
            </div>
            <div class="nw__slider js-nw-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <div class="swiper-slide" id="<?= $this->GetEditAreaId($arItem["ID"]) ?>">
                            <div class="nw__slider-item">
                                <a href="<?= $arItem["PROPERTIES"]["LINK"]["VALUE"] ?>" alt="<?= $arItem["NAME"] ?>"></a>
                                <div class="nw__slider-bg">
                                    <img loading="lazy" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["NAME"] ?>">
                                </div>
                                <div class="nw__slider-date"><?= $arItem["PROPERTIES"]["DATE"]["VALUE"] ?></div>
                                <div class="nw__slider-title"><?= $arItem["NAME"] ?></div>
                                <div class="nw__slider-tx"><?= $arItem["PREVIEW_TEXT"] ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="swiper-button-prev js-nw-prev"></div>
                <div class="swiper-button-next js-nw-next"></div>
                <div class="swiper-pagination js-nw-pagination"></div>
            </div>
        </div>
    </div>
</section>

