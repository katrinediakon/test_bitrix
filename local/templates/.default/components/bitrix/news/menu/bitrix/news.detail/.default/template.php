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
<!-- <?print_r($arResult)?> -->
<div class="content">
		<div class="cnt">
				<header>
						<h1>Отзыв - <?=$arResult["NAME"]?> - <?=$arResult['PROPERTIES']['COMPANY']['VALUE']?></h1>
				</header>
				<hr>
	<div class="review-block">
<div class="review-text">
<div class="review-text-cont"><?=$arResult['DETAIL_TEXT']?> </div>
<div class="review-autor">
	<?=$arResult["NAME"]?>, <?=$arResult['ACTIVE_FROM']?>., <?=$arResult['PROPERTIES']['POSITION']['VALUE']?>, <?=$arResult['PROPERTIES']['COMPANY']['VALUE']?>.
</div>
</div>
<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
<div style="clear: both;" class="review-img-wrap"><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="img"></div>
<?endif?>
<?if(!$arParams["DISPLAY_PICTURE"]!="N" && !is_array($arResult["DETAIL_PICTURE"])):?>
<div style="clear: both;" class="review-img-wrap"><img src="/local/templates/.default/no_photo.jpg" alt="img"></div>
<?endif?>

</div>
<div class="exam-review-doc">
<?if($arParams["DISPLAY_PROPERTIES"]["DOC"]!="N" && is_array($arResult["DISPLAY_PROPERTIES"]["DOC"])):?>
<p>Документы:</p>
<?$i=1?>
<?foreach ($arResult["DISPLAY_PROPERTIES"]["DOC"]["FILE_VALUE"] as $arItem):?>

<div  class="exam-review-item-doc"><img class="rew-doc-ico" src="/local/templates/.default/pdf_ico_40.png"><a href="<?=$arItem["SRC"]?>"> Файл <?echo $i++?></a></div>
<?endforeach?>
<?endif?>
</div>
<hr>

		</div>
</div>
