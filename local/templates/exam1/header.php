<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>

<?$APPLICATION->ShowHead();?>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/template_style.css"/>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/slides.min.jquery.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/functions.js"></script>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/reset.css" />
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.css" />
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/owl.carousel.css" />
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/scripts.js"></script>



	<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
	<div class="wrap">
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<div class="hd_header_area">
			<div class="hd_header">
				<table>
					<tr>
						<td rowspan="2" class="hd_companyname">
							<h1><a href="">Мебельный магазин</a></h1>
						</td>
						<td rowspan="2" class="hd_txarea">

							<span class="tel">
								<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"AREA_FILE_SUFFIX" => "inc",
					"EDIT_TEMPLATE" => "",
					"PATH" => "/work.php"
				)
			);?>
							</span>	<br/>
							время работы <span class="workhours">ежедневно с 9-00 до 18-00</span>
						</td>
						<td style="width:232px">
							<form action="">
								<div class="hd_search_form" style="float:right;">
									<input placeholder="Поиск" type="text"/>
									<input type="submit" value=""/>
								</div>
							</form>
						</td>
					</tr>
					<tr>
						<td style="padding-top: 11px;">
							<a href="" class="hd_singin">Войти на сайт</a><br>
							<a href="" class="hd_signup">Зарегистрироватся</a>
						</td>
					</tr>
				</table>
				<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"horizontal_menu",
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_THEME" => "site",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "horizontal_menu"
	),
	false
);?>
</div>
</div>

		<div class="bc_breadcrumbs">
			<ul>
		<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"bread",
	array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "bread"
	),
	false
);?>
</ul>
<div class="clearboth"></div>
</div>

		<!--- // end header area --->

		<div class="main_container page">
			<div class="mn_container">
				<div class="mn_content">
					<div class="main_post">
