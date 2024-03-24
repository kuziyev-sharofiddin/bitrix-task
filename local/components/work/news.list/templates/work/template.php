<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" style="width: 316.667px; margin-right: 40px;">
        <div class="blog__box">
            <div class="blog__image"><img
                    src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="blog story">
                <div class="blog__hover flex-center">
                    <h4 class="font30 weight800">READ MORE</h4>
                </div>
            </div>
            <div class="blog__info">
                <h4 class="font15 weight800"><?=$arItem["NAME"]?></h4>
                <p class="font12 weight500 padding10"><?=$arItem["PREVIEW_TEXT"]?></p>
                <p class="font12 weight500"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></p>
            </div>
        </div>
    </div>
<?endforeach;?>
