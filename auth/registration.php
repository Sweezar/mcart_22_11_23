<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.register",
	"",
	Array(
		"AUTH" => "Y",
		"REQUIRED_FIELDS" => array("EMAIL","TITLE","NAME"),
		"SET_TITLE" => "Y",
		"SHOW_FIELDS" => array("EMAIL","TITLE","NAME","LAST_NAME"),
		"SUCCESS_PAGE" => "",
		"USER_PROPERTY" => array("UF_USER_TYPE"),
		"USER_PROPERTY_NAME" => "",
		"USE_BACKURL" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>