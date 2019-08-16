<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("регистрация");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.register",
	"",
	Array(
		"AUTH" => "Y",
		"REQUIRED_FIELDS" => array("EMAIL","NAME","SECOND_NAME","LAST_NAME"),
		"SET_TITLE" => "Y",
		"SHOW_FIELDS" => array("EMAIL","NAME","SECOND_NAME","LAST_NAME","PERSONAL_BIRTHDAY","PERSONAL_PHONE","PERSONAL_MAILBOX"),
		"SUCCESS_PAGE" => "",
		"USER_PROPERTY" => array(),
		"USER_PROPERTY_NAME" => "",
		"USE_BACKURL" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>