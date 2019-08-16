<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?if (!empty($arResult)):?>

		<!-- side menu -->
		<div class="side-block side-menu">
				<div class="title-block <?=$APPLICATION->GetProperty("CLASS");?>">Навигация</div>
				<div class="menu-block">
<ul>
<?
$previousLevel = 0;
foreach($arResult as $arItem):?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
		</li>

<?endforeach?>



</ul>
</div>
</div>

<?endif?>
