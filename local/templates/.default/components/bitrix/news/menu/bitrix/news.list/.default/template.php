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
<div class="item">
<div class="side-block side-opin">
<div class="inner-block">
<div class="title">
 <div class="photo-block">
	 <?if(is_array($arItem["PREVIEW_PICTURE"])):?>
	   <? $renderImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 59, "height" => 59), BX_RESIZE_IMAGE_PROPORTIONAL, false); ?>
		 <? echo (CFile::ShowImage($renderImage['src'], $newWidth, $newHeight, "border=0", "", true))?>


	 <?endif?>
	 <?if(!is_array($arItem["PREVIEW_PICTURE"])):?>
	 	 <img src="/local/templates/.default/no_photo.jpg" alt="">

	 <?endif?>

 </div>
 <div class="name-block"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></div>
 <div class="pos-block"><?=$arItem['PROPERTIES']['POSITION']['VALUE']?>, <?=$arItem['PROPERTIES']['COMPANY']['VALUE']?></div>
</div>
<div class="text-block"><?echo substr($arItem["PREVIEW_TEXT"], 0, 80);?>...</div>
</div>
</div>
</div>
	<?endforeach;?>
