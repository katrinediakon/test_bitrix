<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("забыли пароль");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.auth.forgotpasswd",
	"",
	Array(
		"AUTH_AUTH_URL" => "/test.php",
		"AUTH_REGISTER_URL" => "/registratsiya.php"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>