<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Профиль");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.profile", 
	".default", 
	array(
		"CHECK_RIGHTS" => "N",
		"SEND_INFO" => "Y",
		"SET_TITLE" => "Y",
		"USER_PROPERTY" => array(
		),
		"USER_PROPERTY_NAME" => "",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>