<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "auth", Array(
	"FORGOT_PASSWORD_URL" => "zabyli-parol.php",	// Страница забытого пароля
		"PROFILE_URL" => "profil.php",	// Страница профиля
		"REGISTER_URL" => "/registratsiya.php",	// Страница регистрации
		"SHOW_ERRORS" => "N",	// Показывать ошибки
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>